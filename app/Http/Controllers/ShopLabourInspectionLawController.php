<?php

namespace App\Http\Controllers;

use App\ShopLabourInspectionLaw;
use App\TempShopInspectionInform;
use Illuminate\Http\Request;
use App\TempShopLabourInspectionLaw;
use Auth;
use App\Http\Controllers\Controller;
use App\ShopInspectionInform;
use App\Shop;
use App\Document;
use App\User;

class ShopLabourInspectionLawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inspection.shoplabourinspectionlaw');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
         $request->validate([
                'shop_id' => 'required',
            ],[
                'shop_id.required' => 'ဆိုင်နှင့်အလုပ်ဌာန အမည်ပြန်ရှာပေးပါရန်။'
            
            ]);
         
        if($request->tempoary=="tempoary"){
            $user_id = Auth::user()->id;
            $shop_inform_id=TempShopInspectionInform::where('user_id', $user_id)->value('shop_inspection_inform_id');
            // dd($shop_inform_id);
            $request->request->add(['user_id'=> $user_id,'check_id' => $shop_inform_id]);
            $temp= TempShopLabourInspectionLaw::where('check_id',$shop_inform_id)->first();
            if($temp){
                $temp->update($request->all());
            }else{
                TempShopLabourInspectionLaw::create($request->all());
            }
            return redirect('/ShopLabourInspectionLaw/create')->with('success', 'ယာယီသိမ်းဆည်းပြီးပါပီ');
        }else{
            $shop_inform_id=TempShopInspectionInform::where('user_id', Auth::user()->id)->value('shop_inspection_inform_id');
            $request->request->add(['check_id' => $shop_inform_id ,'user_id'=>Auth::user()->id,]);
                $shop_labourlaw=ShopLabourInspectionLaw::create($request->all());
            if($shop_labourlaw){
                 //store activity log
                activity()->useLog(Auth::user()->name)
                                   ->causedBy(Auth::user()->id)
                                   ->performedOn($shop_labourlaw)
                                   ->withProperties($request->all())
                                   ->log('Create Shop Inspection Labour Law');

                $user_id = Auth::user()->id;
            /**to generate pdf */
            $shopinform = ShopInspectionInform::where('id',$shop_labourlaw->check_id)->first();
            //$shopname = OtherShopName::where('shop_inform_id',$shop_labourlaw->check_id)->first();
            // dd($id);
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf();
            $view = \View::make('pdftemplate.ShopInspectionLabourLaw',compact('shop_labourlaw','shopinform'));
            $html_content = $view->render();
            $pdfname=Shop::where('ShopId',$shop_labourlaw->shop_id)->value('shopname')."-ShopLabourLaw-".$shop_labourlaw->create_date.mt_rand().".pdf";
            $mpdf->WriteHTML($html_content);
            $mpdf->Output(storage_path('app/public/inspection/'.$pdfname),'F');

            $FromDepartment = User::where('id',$user_id)->first();
            // dd($FromDepartment);
            if($FromDepartment->township_id){
                $department = $FromDepartment->township_id;
            }elseif($FromDepartment->district_id){
                $department =$FromDepartment->district_id;
            }elseif($FromDepartment->region_id){
                $department = $FromDepartment->region_id;                
            }else{
                $department=null;
            }
            $document=new Document();
            $document->Factory_Type = 2;
            $document->FactoryId=ShopInspectionInform::where('id',$shop_labourlaw->check_id)->value('ShopId');
            $document->FromDepartment=$department;
            $document->create_date=$shop_labourlaw->created_at;
            $document->entrydate=$shop_labourlaw->created_at;
            $document->documentTitle='အလုပ်သမားဥပဒေစစ်ဆေးရေး';
            $document->documenttype ='သာမန်';
            $document->creator=$user_id;
            $document->documentfileName=$pdfname;
            $document->check_id = $shop_labourlaw->check_id;
            // $document->save();
            if($document->save()){
              //save user log 
                 activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($document)
                           ->withProperties($shop_labourlaw->check_id)
                           ->log('Print pdf Shop Inspection Labour Law.');
            }

                TempShopLabourInspectionLaw::where('check_id',$shop_inform_id)->where('user_id', $user_id)->delete();
            }
            TempShopInspectionInform::where('shop_inspection_inform_id',$shop_inform_id)->where('user_id', $user_id)->delete();
            return redirect('/ShopLabourInspectionLaw/create')->with('success', 'အလုပ်သမားဥပဒေစစ်ဆေး စစ်ဆေးခြင်း ထည့်သွင်းပြီးပါပီ ...');
        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShopLabourInspectionLaw  $shopLabourInspectionLaw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop_labourlaw = ShopLabourInspectionLaw::where('id',$id)->first();
        if($shop_labourlaw){
            $shopinform = ShopInspectionInform::where('id',$shop_labourlaw->check_id)->first();
            //$shopname = OtherShopName::where('shop_inform_id',$shop_labourlaw->check_id)->first();
            // dd($id);
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf();
            $view = \View::make('pdftemplate.ShopInspectionLabourLaw',compact('shop_labourlaw','shopinform'));
            $html_content = $view->render();
            $mpdf->WriteHTML($html_content);
            return $mpdf->Output();

    }
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShopLabourInspectionLaw  $shopLabourInspectionLaw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tempshopLabourLaw = TempShopLabourInspectionLaw::where('id',$id)->first();
        return view('temp.tempshoplabourlaw',compact('tempshopLabourLaw'));
    }

    public function editLabourLawInspection($id){
        // dd($id);
        $shop_labour_law=ShopLabourInspectionLaw::where('id',$id)->first();
        return view('inspection.edit_shoplabourinspectionlaw',compact('shop_labour_law'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShopLabourInspectionLaw  $shopLabourInspectionLaw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $shop_labour_law=ShopLabourInspectionLaw::where('id',$id)->first();
        if($shop_labour_law){
            $shop_labour_law->update($request->all());
        }
        return redirect('ShopInspectionLists')->with('success','အလုပ်သမားဥပဒေစစ်ဆေးရေး ပြင်ဆင်ခြင်း အောင်မြင်ပါသည်');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShopLabourInspectionLaw  $shopLabourInspectionLaw
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopLabourInspectionLaw $shopLabourInspectionLaw)
    {
        //
    }
}
