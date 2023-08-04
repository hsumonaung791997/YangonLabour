<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Region;
use App\District;
use App\Township;
use DB;
use App\AffectedInformation;
use App\Factory;
use App\Shop;
use App\FactoryInspectionImpact;
use App\ImpactInstruction;
use mPDF;
use Carbon\carbon;
use Storage;
use App\Document;

class ImpactInstructionController extends Controller
{
    public function create($id,$factory_id,$factorytype){
        // dd($factory_id);

       $affected_information = AffectedInformation::where('id',$id)->first();
       $impact=FactoryInspectionImpact::where('affected_inform_id',$id)->first();

       if($factorytype==1){
           $factory = Factory::where('FactoryId',$affected_information->FactoryID)->first();
       }else{
         $factory = Shop::where('ShopId',$affected_information->FactoryID)->first();
       }
    //    dd($factory);
       $role=Auth::user()->roles;
       foreach($role as $r){
        $roleid=$r->id;
       }
       if($roleid==1 || $roleid==2){
       $department='Ministry';
       }
       elseif($roleid==3 || $roleid==4){
        $department=Region::where('id',Auth::user()->region_id)->first();
       }elseif($roleid==5 || $roleid==6){
        $department=District::where('id',Auth::user()->district_id)->first();
       }elseif($roleid==7 || $roleid==8){
         $department=Township::where('id',Auth::user()->township_id)->first();
       }
//    dd($impact);
       return view ('instruction.impact_instruction',compact('id','roleid','department','factorytype','affected_information','factory','impact')); 

    }

    public function store(Request $request){
        $request->request->add(['user_id'=> Auth::user()->id]);
        $ins = ImpactInstruction::create($request->all());
        $affected_information= AffectedInformation::where('id',$ins->case_id)->first();
        // dd($ins);
        if($ins){
            /**
                 * user logs
                 */
                activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($ins)
                           ->withProperties($ins)
                           ->log('လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက် ညွှန်ကြားချက်ထုတ်ခြင်း');
                /** 
                 * 
                */

            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf();
            $view = \View::make('instruction.Impact_instructiontemplate',compact('ins','affected_information'));
            $pdfname=$ins->name.'-ImpactInstruction-'.$ins->create_date.mt_rand().'.pdf';
            $html_content = $view->render();
            $mpdf->WriteHTML($html_content);
            $mpdf->Output(storage_path('app/public/instruction/'.$pdfname),'F');
            /* To save The Document File */
            $document=new Document();
            $document->documentId=$ins->docmentno;       
            $document->documentReferenceNo=$ins->refdoc;
            $document->FactoryId=$ins->factory_id;
            $document->FromDepartment=$ins->instructiondep;
            $document->create_date=$ins->create_date;
            $document->entrydate=$ins->create_date;
            $document->documentTitle=$ins->instructiontitle;
            $document->creator=Auth::user()->id;
            $document->documenttype=$ins->documenttype;
            $document->documentfileName=$pdfname;
            $document->instructionid=$ins->id;
            $document->save();
        }
        return redirect()->route('impactinstruciton.list');
    }

    public function InstructionLists(){
        // dd('hi');
        $array = explode(',', Auth::user()->accessibletwonship);
  
        $instruction=ImpactInstruction::whereIn('township_id',$array)->orderBy('id', 'desc')->paginate(10);
  
        return view('instruction.Impact_instructionlist',compact('instruction'));
    }

      public function downloadfile($id){
          // dd($id);
              $ins=ImpactInstruction::where('id',$id)->first();
              $affected_information = AffectedInformation::where('id',$ins->case_id)->first();
              // dd($affected_information);   
              require_once '../vendor/autoload.php';
              $mpdf = new \Mpdf\Mpdf();
              $view = \View::make('instruction.Impact_instructiontemplate',compact('ins','affected_information'));
              $pdfname=$ins->name.'-ImpactInstruction-'.$ins->create_date.mt_rand().'.pdf';
              $html_content = $view->render();
              $mpdf->WriteHTML($html_content);
              return $mpdf->Output();
          
          }
    
    public function EditInstruction($id){
        $ins=ImpactInstruction::where('id',$id)->first();
        return view('instruction.edit_impact_instruction',compact('ins'));   
    }

    public function EditInstructionSave(Request $request,$id){
        $ins=ImpactInstruction::where('id',$id)->first();
        $ins->update($request->all());

         /**
                 * user logs
                 */
                activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($ins)
                           ->withProperties($ins)
                           ->log('လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက် ညွှန်ကြားချက်ပြင်ခြင်း');
                /** 
                 * 
                */

        // dd($ins);
        return redirect()->route('impactinstruciton.list')->with('success', 'ညွှန်ကြားချက်ပြင်ဆင်ခြင်း အောင်မြင်ပါသည်');
    }

            
}
