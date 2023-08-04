<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\FactoryInspectionSafety;
use App\FactoryInspectionAct;
use App\FactoryInspectionWage;
use App\Factory_leave;
use App\Factory;
use App\FactoryInspectionImpact;
use App\Document;
use App\User;
use App\FactoryInspectionInforms;
use App\FactoryLabourInspectionLaw;
use App\ShopInspectionSafety;
use App\ShopInspectionInform;
use App\Shop;
use App\ShopLabourInspectionLaw;
use App\OtherShopName;
use App\Worker;
use App\Share;
class InspectionPdfController extends Controller
{
    public function generatepdf($id){
        // dd($id);
          $user_id = Auth::user()->id;
           //for FromDepartment
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
        //    $request->all();
           //   dd($department);
          /** To generate PDF **/
          $factory_safety = FactoryInspectionSafety::where('factoryinspectioninform_id',$id)->first();
          if($factory_safety){
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf();
            $view = \View::make('pdftemplate.inspectionSafety',compact('factory_safety'));
            $html_content = $view->render();
            $pdfname=$factory_safety->factoryname."-FactorySafety-".$factory_safety->create_date.mt_rand().".pdf";
            $mpdf->WriteHTML($html_content);
            $mpdf->Output(storage_path('app/public/inspection/'.$pdfname),'F');
            // create document for inspection safety 
            //for FromDepartment
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
            //   dd($department);
            $document=new Document();
            $document->FactoryId=Factory::where('FactoryName',$factory_safety->factoryname)->value('FactoryId');
            $document->Factory_Type = 1;
            $document->FromDepartment=$department;
            $document->create_date=$factory_safety->created_at;
            $document->entrydate=$factory_safety->created_at;
            $document->documentTitle='လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ';
            $document->documenttype	='သာမန်';
            $document->creator=$user_id;
            $document->documentfileName=$pdfname;
            $document->check_id = $id;
            // $document->save()
            if($document->save()){
              //save user log 
                 activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($document)
                           ->withProperties($id)
                           ->log('Print pdf factory_safety.');
            }
        }
          
        $factoryLabourLaw = FactoryLabourInspectionLaw::where('factoryinspectioninform_id',$id)->first();
        if($factoryLabourLaw){
            $factoryinform = FactoryInspectionInforms::where('cid',$factoryLabourLaw->factoryinspectioninform_id)->first();
            $factory = Factory::where('FactoryId',$factoryLabourLaw->factory_id)->first();
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf();
            $view = \View::make('pdftemplate.inspectionlaw',compact('factoryLabourLaw','factoryinform','factory'));
            $html_content = $view->render();
            $pdfname=Factory::where('FactoryId',$factoryLabourLaw->factory_id)->value('FactoryName')."-FactoryLabourLaw-".$factoryLabourLaw->create_date.mt_rand().".pdf";
            $mpdf->WriteHTML($html_content);
            $mpdf->Output(storage_path('app/public/inspection/'.$pdfname),'F');
            $document=new Document();
            $document->Factory_Type = 1;
            $document->FactoryId=FactoryInspectionInforms::where('cid',$id)->value('factory_id');
            $document->FromDepartment=$department;
            $document->create_date=$factoryLabourLaw->created_at;
            $document->entrydate=$factoryLabourLaw->created_at;
            $document->documentTitle='ဥပဒေများအရ စစ်ဆေးချက်ပုံစံ';
            $document->documenttype	='သာမန်';
            $document->creator=$user_id;
            $document->documentfileName=$pdfname;
            $document->check_id = $id;
            // $document->save();

            if($document->save()){
              //save user log 
                 activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($document)
                           ->withProperties($id)
                           ->log('Print pdf factory Labour Law.');
            }

        }
               
          return back()->with('success', ' PDf ထည့်သွင်းခြင်းအောင်မြင်ပါသည်...');
    }
    public function ShopInspectionPdf($id){
         $user_id = Auth::user()->id;
           //for FromDepartment
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

        $shop_safety = ShopInspectionSafety::where('check_id',$id)->first();
        if($shop_safety){
            $shopinform = new ShopInspectionInform;
            $shopinform = ShopInspectionInform::where('id',$shop_safety->check_id)->first();
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf();
            $view = \View::make('pdftemplate.ShopInspectionSafety',compact('shop_safety','shopinform'));
            $html_content = $view->render();
            $pdfname=$shop_safety->shopname."-shop_safety-".$shop_safety->create_date.mt_rand().".pdf";
            $mpdf->WriteHTML($html_content);
            $mpdf->Output(storage_path('app/public/inspection/'.$pdfname),'F');
            $document=new Document();
            $document->Factory_Type = 2;
            $document->FactoryId=ShopInspectionInform::where('id',$id)->value('ShopId');
            $document->FromDepartment=$department;
            $document->create_date=$shop_safety->created_at;
            $document->entrydate=$shop_safety->created_at;
            $document->documentTitle='လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးစစ်ဆေးချက်ပုံစံ';
            $document->documenttype ='သာမန်';
            $document->creator=$user_id;
            $document->documentfileName=$pdfname;
            $document->check_id = $id;
            // $document->save();
            if($document->save()){
              //save user log 
                 activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($document)
                           ->withProperties($id)
                           ->log('Print pdf Shop Inspection Safety.');
            }


        }
        // dd('hello');

        $shop_labourlaw = ShopLabourInspectionLaw::where('check_id',$id)->first();
        if($shop_labourlaw){
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
            $document=new Document();
            $document->Factory_Type = 2;
            $document->FactoryId=ShopInspectionInform::where('id',$id)->value('ShopId');
            $document->FromDepartment=$department;
            $document->create_date=$shop_safety->created_at;
            $document->entrydate=$shop_safety->created_at;
            $document->documentTitle='အလုပ်သမားဥပဒေစစ်ဆေးရေး';
            $document->documenttype ='သာမန်';
            $document->creator=$user_id;
            $document->documentfileName=$pdfname;
            $document->check_id = $id;
            // $document->save();
            if($document->save()){
              //save user log 
                 activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($document)
                           ->withProperties($id)
                           ->log('Print pdf Shop Inspection Labour Law.');
            }

        }
        return back()->with('success', ' PDf ထည့်သွင်းခြင်းအောင်မြင်ပါသည်...');
    }

}
