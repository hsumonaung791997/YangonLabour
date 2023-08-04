<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Township;
use App\Industrialzone;
use App\EconomicClass;
use App\ShopInspectionInform;
use App\TempShopInspectionInform;
use DB;
use Auth;
use App\Worker;
use App\OtherShopName;
class ShopInspectionController extends Controller
{
   public function autocompletefill(Request $request){
     $accessibletownship =(Auth::user()->accessibletwonship);
     $accessibletownships = explode(',', $accessibletownship);

	   if($request->get('query'))
	   {
		   $query=$request->get('query');
             $data =  Shop::whereIn('township_id',$accessibletownships)->where('shopname', 'LIKE', '%'. $query. '%')->get();
       if(!$data->isEmpty()){
           $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
             $output .= '
             <li><a href="#">'.$row->shopname.'</a></li>
             ';
            }
            $output .= '</ul>';
            echo $output;
       }else{
          $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
               $output .= '
               <li><a href="#">'.'ရှာနေသော ဆိုင် / အလုပ်ဌာန မရှိပါ ... '.'</a></li>
               ';
              $output .= '</ul>';
              echo $output;
       }
		  
       }
   }

   public function search(Request $request){
        
        if($request->get('query'))
        {
              $query = $request->get('query');

              $data =  Shop::all();
              // dd($data);
              $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
              foreach($data as $row)
              {
               $output .= '
               <li><a href="#">'.$row->FactoryName.'</a></li>
               ';
              }
              $output .= '</ul>';
              echo $output;
         }
    }

   public function data(Request $request){
          $accessibletownship =(Auth::user()->accessibletwonship);
          $accessibletownships = explode(',', $accessibletownship);

         $name = $request->name;
         $shop = shop::whereIn('township_id',$accessibletownships)->where('shopname',$name)->first();
         $lastinspection = ShopInspectionInform::where('ShopId',$shop->ShopId)->latest()->first();
         if($lastinspection){
          $shop['lastinspectionndate'] = $lastinspection->inspectiondate;
         }
         $township =  Township::where('id',$shop->township_id)->value('township_name');
         if($township){
             $shop['township'] = $township;
         }
         $class_name = EconomicClass::where('class_code',$shop->class_name)->value('class_name');
         if($class_name){
              $shop['class_name'] = $class_name;
         }
         // return Response::json(array('success'=>true,'result'=>$result));
         return $shop;
   }

   public function shop_information_add(){
    // dd('sdf');
        return view('inspection.shop_information');
   }

   public function shop_information_store(Request $request){
     // dd($request->all());
     $request->validate([
          'ShopId' => 'required'
     ],['ShopId.required'=>'ဆိုင်အလုပ်ဌာန ထည့်သွင်းပေးပါရန်']);

     if($request->tempoary=="tempoary"){
          $user_id = Auth::user()->id;
          $request->request->add(['user_id'=> $user_id]);
          $tempshopinform = TempShopInspectionInform::where('ShopId',$request->ShopId)->first();
          if($tempshopinform){
              $tempshopinform->update($request->all());
          }else{
               TempShopInspectionInform::create($request->all());
          }
          return redirect('/shop_information_add')->with('success', 'ယာယီသိမ်းဆည်းပြီးပါပီ');
     }else{
          $request->validate([
               'inspection_name' => 'required',
               'inspectorrank' => 'required',
               'inspectiondate' => 'required'
               
          ],[
               'inspection_name.required'=>'စစ်ဆေးရေးအရာရှိအမည်  ထည့်သွင်းပေးပါရန်',
               'inspectorrank.required' => 'စစ်ဆေးသူအရာရှိ ရာထူး ထည့်သွင်းပေးပါရန်',
               'inspectiondate.required' => 'စစ်ဆေးသည့်ရက်စွဲ ထည့်သွင်းပေးပါရန်'
          ]);
          // dd($request->all());
          // $data = $request->all();
          // $workers = $data['addmore'];
          // dd($request->ShopId);
          // unset($data['addmore']);
          $user_id = Auth::user()->id;
          $request->request->add(['inspectionid'=> $user_id]);
          $shop_inspection_inform_id = ShopInspectionInform::create($request->all());
          if($shop_inspection_inform_id){

              activity()->useLog(Auth::user()->name)
                                   ->causedBy(Auth::user()->id)
                                   ->performedOn($shop_inspection_inform_id)
                                   ->withProperties($request->all())
                                   ->log('Create Shop Inspection Inform');

               // /update shop table worker total
               $shop = Shop::where('ShopId',$request->ShopId)->first();
               $shop->totalMaleWorker = $request->totalm;
               $shop->totalFemaleWorker = $request->totalf;
               $shop->loacationaddress = $request->shopaddress;
               $shop->ownername= $request->ownername;
               $shop->owneraddress = $request->owneraddress;
               $shop->mangername = $request->managername;
               $shop->manageraddress = $request->manageraddress;
               $shop->PropertyType = $request->property;
               $shop->update();
               //for to store temp table
               $tempshopinform = TempShopInspectionInform::where('ShopId',$request->ShopId)->where('user_id',$user_id)->first();
               $request->request->add(['user_id'=> $user_id]);
               if($tempshopinform){
                   $tempshopinform->update($request->all());
               }else{
                    TempShopInspectionInform::create($request->all());
               }
               $ShopInspectionSession =ShopInspectionInform::where('ShopId',$request->ShopId)->latest()->first();
               $tempshopinform = TempShopInspectionInform::where('ShopId',$request->ShopId)->where('user_id',$user_id)->first();
               $tempshopinform->shop_inspection_inform_id= $ShopInspectionSession->id;
               $tempshopinform->update();

               //for အလုပ်သမားများ၏ အကြောင်းအရာများ 
               foreach ($request->workers as $key => $value) {
                    $worker=array_add($value, 'shop_inform_id', $ShopInspectionSession->id);
                    // dd($worker);
                    Worker::create($worker);
                }

                //forအလုပ်ရှင်ပိုင်ဆိုင်သော ဆိုင်၊အလုပ်ဌာန၊အလုပ်ရုံစသည်တို.၏ အမည်နှင့် လိပ်စာ 
               foreach ($request->othershop as $key => $value) {
                    $othershop=array_add($value, 'shop_inform_id', $ShopInspectionSession->id);
                    // dd($othershop);
                    OtherShopName::create($othershop);
                }
          }
         
          // dd($shop_inspection_inform_id);
          
            return redirect('/shop_information_add')->with('success', 'လုပ်ငန်းဌာနဆိုင်ရာ အချက်အလက်များ ထည့်သွင်းပြီးပါပီ ...');
     }

     
   }



  
   
}
