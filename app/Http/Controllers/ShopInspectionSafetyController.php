<?php

namespace App\Http\Controllers;

use App\ShopInspectionSafety;
use Illuminate\Http\Request;
use App\TempShopInspectionInform;
use App\TempShopInspectionSafety;
use Auth;
use App\Http\Controllers\Controller;
use App\Shop;
use App\ShopInspectionInform;
use App\User;
use App\Document;

class ShopInspectionSafetyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ShopInspection.shopinspectionact');
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
            'shop_id' =>'required',
            'township_id'=> 'required',
        ],[
            'shop_id.required' => 'ဆိုင်/အလုပ်ဌာန အမည် ရိုက်ထည့်ပေးပါရန်',            
        ]);

        $user_id = Auth::user()->id;

        if($request->tempoary=="tempoary"){
            
            $shop_inform_id=TempShopInspectionInform::where('user_id', $user_id)->value('shop_inspection_inform_id');
            // dd($shop_inform_id);
            $request->request->add(['user_id'=> $user_id,'check_id' => $shop_inform_id]);
            $tempsafety = TempShopInspectionSafety::where('shopname',$request->shopname)->first();
            if($tempsafety){
                $tempsafety->update($request->all());
            }else{
                TempShopInspectionSafety::create($request->all());
            }
            return redirect('/ShopLabourInspectionLaw/create')->with('success', 'ယာယီသိမ်းဆည်းပြီးပါပီ');
        }else{
            $request->validate([
                'inspectorname' => 'required',
                'inspectorrank' => 'required',
            ],[
                'inspectorname.required' => 'စစ်ဆေးသူ အမည် ထည့်သွင်းပေးပါရန်',
                'inspectorrank.required' => 'စစ်ဆေးသူ ရာထူး ထည့်သွင်းပေးပါရန်',
                
            ]);
            $shop_inform_id=TempShopInspectionInform::where('user_id', Auth::user()->id)->value('shop_inspection_inform_id');
            $request->request->add(['check_id' => $shop_inform_id ,'user_id'=>Auth::user()->id,]);
            $shop_safety=ShopInspectionSafety::create($request->all());
            if($shop_safety){
                //store activity log
                activity()->useLog(Auth::user()->name)
                                   ->causedBy(Auth::user()->id)
                                   ->performedOn($shop_safety)
                                   ->withProperties($request->all())
                                   ->log('Create Shop Inspection Safety');
                    $shopinform = ShopInspectionInform::where('id',$shop_safety->check_id)->first();
                    require_once '../vendor/autoload.php';
                    $mpdf = new \Mpdf\Mpdf();
                    $view = \View::make('pdftemplate.ShopInspectionSafety',compact('shop_safety','shopinform'));
                    $html_content = $view->render();
                    $pdfname=$shop_safety->shopname."-shop_safety-".$shop_safety->create_date.mt_rand().".pdf";
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
                    $document->FactoryId=ShopInspectionInform::where('id',$shop_safety->check_id)->value('ShopId');
                    $document->FromDepartment=$department;
                    $document->create_date=$shop_safety->created_at;
                    $document->entrydate=$shop_safety->created_at;
                    $document->documentTitle='လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးစစ်ဆေးချက်ပုံစံ';
                    $document->documenttype ='သာမန်';
                    $document->creator=$user_id;
                    $document->documentfileName=$pdfname;
                    $document->check_id = $shop_safety->check_id;
                    // $document->save();
                    if($document->save()){
                        //save user log 
                        activity()->useLog(Auth::user()->name)
                                    ->causedBy(Auth::user()->id)
                                    ->performedOn($document)
                                    ->withProperties($shop_safety->check_id)
                                    ->log('Print pdf Shop Inspection Safety.');
                    }

                TempShopInspectionSafety::where('check_id',$shop_inform_id)->where('user_id', $user_id)->delete();
            }
            return redirect('/ShopLabourInspectionLaw/create')->with('success', 'လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးစစ်ဆေးချက်ပုံစံ ထည့်သွင်းပြီးပါပီ ...');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShopInspectionSafety  $shopInspectionSafety
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop_safety = ShopInspectionSafety::where('id',$id)->first();
        if($shop_safety){
            $shopinform = ShopInspectionInform::where('id',$shop_safety->check_id)->first();
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf();
            $view = \View::make('pdftemplate.ShopInspectionSafety',compact('shop_safety','shopinform'));
            $html_content = $view->render();
            $mpdf->WriteHTML($html_content);
            return $mpdf->Output();

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShopInspectionSafety  $shopInspectionSafety
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shopsafety = TempShopInspectionSafety::where('id',$id)->first();
        return view('temp.tempshopinspectionsafety',compact('shopsafety'));
    }

    public function editInspection($id){
        // dd($id);
        $shop_safety=ShopInspectionSafety::where('id',$id)->first();
        $shop= Shop::where('ShopId',$shop_safety->shop_id)->first();
        return view('inspection.Edit_ShopSafteyInspection',compact('shop_safety','shop'));
        
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShopInspectionSafety  $shopInspectionSafety
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $shop_safety=ShopInspectionSafety::where('id',$id)->first();
        if($shop_safety){
            $shop_safety->update($request->all());
        }
        return redirect('ShopInspectionLists')->with('success',' အလုပ်ရုံစစ်ဆေးရေး ပြင်ဆင်ခြင်း အောင်မြင်ပါသည်');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShopInspectionSafety  $shopInspectionSafety
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopInspectionSafety $shopInspectionSafety)
    {
        //
    }
}
