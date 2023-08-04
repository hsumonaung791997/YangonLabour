<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Factoryinspectioninform;
use App\Factory;
use App\CaseOpen;
use App\Document;
use App\Instruction;
use App\User;
use App\Casereport;
use Auth;
use App\Township;
use App\District;
use App\Region;
use DB;
use mPDF;
use Carbon\carbon;
use Storage;

class InternalProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $array = explode(',', Auth::user()->accessibletwonship);   

          $cases=DB::table('cases')
             ->join('factoryinspectioninforms','factoryinspectioninforms.cid','=','cases.checkid')
             ->join('users','users.id','=','cases.FromUserId')
             ->join('factories','factories.FactoryId','=','factoryinspectioninforms.factory_id')
             ->select('cases.*', 'users.*', 'factoryinspectioninforms.*', 'factories.*')
             ->whereIN('cases.FromTownshipid',$array)  
             ->where('cases.factorytype',1)
            ->paginate(20);


   
 
      // dd($cases);
    return view('caseopen.index',compact('cases'));

}
/*for all cases list */
public function caseindex($id){
    $array = explode(',', Auth::user()->accessibletwonship); 
    
    if($id==1){
        $cases=DB::table('cases')
             ->join('factoryinspectioninforms','factoryinspectioninforms.cid','=','cases.checkid')
             ->join('users','users.id','=','cases.FromUserId')
             ->join('factories','factories.FactoryId','=','factoryinspectioninforms.factory_id')
             ->select('cases.*', 'users.*', 'factoryinspectioninforms.*', 'factories.*')
             ->whereIN('cases.FromTownshipid',$array)  
             ->where('cases.factorytype',1)
            ->paginate(20);


    }else{
        $cases=DB::table('cases')
             ->join('shop_inspection_informs','shop_inspection_informs.id','=','cases.checkid')
             ->join('users','users.id','=','cases.FromUserId')
             ->join('shops','shops.ShopId','=','shop_inspection_informs.ShopId')
             ->select('cases.*', 'users.*', 'shop_inspection_informs.*', 'shops.*')
             ->whereIN('cases.FromTownshipid',$array)  
             ->where('cases.factorytype',2)
            ->paginate(20); 
    }
    // dd($cases);
 return view ('caseopen.casetype',compact('cases','id'));         

}
  
  public function CaseClose($id){
      CaseOpen::where('caseid',$id)->update(['Status'=>3]);
      return back()->with('success','ဖိုင်ပိတ်သိမ်းခြင်း အောင်မြင်ပါသည် ');
  }
    /* To Create The New Case Inspection */
    public function createtype()
        {
        
     return view('caseopen.newcasetype');

     
    }
    public function create($id){

    $array = explode(',', Auth::user()->accessibletwonship);     
    if($id==1){
      $factory=DB::table('factoryinspectioninforms')
                ->join('factories','factories.FactoryId','factoryinspectioninforms.factory_id')
                ->join('users','users.id','factoryinspectioninforms.inspectionid')
                ->select('factoryinspectioninforms.*','factories.*','users.*')
                ->whereIN('factories.township_id',$array)
                ->paginate(20);
   
    }else{
        $factory=DB::table('shop_inspection_informs')
                ->join('shops','shops.ShopId','shop_inspection_informs.ShopId')
                ->join('users','users.id','shop_inspection_informs.inspectionid')
                ->select('shop_inspection_informs.*','shop_inspection_informs.id as sid','shops.*','users.*')
                ->whereIN('shops.township_id',$array)
                ->paginate(20);
            // dd($factory);
    }
  //  dd($factory);
 return view('caseopen.newcaseinspection',compact('factory','id'));     
        
    }
    /*** For New Case Opening **/
    /*public function caseopen(Request $request){
        
        $newcase=DB::select("select * from factoryinspectioninforms i,factories f where i.inspectionid=".Auth::user()->id." and i.factory_id=f.FactoryId and f.FactoryName like '%".$request->get('searchwords')."%'");
       return view('caseopen.caseopen',compact('newcase'));
      

    }*/
    /*For New Cae Open via url*/
    public function caseopenurl($cid,$id){
     
    //for adimin, region and minister
   if($id==1){
    $data['newcase']=DB::table('factoryinspectioninforms')
         ->join('factories','factories.FactoryId','factoryinspectioninforms.factory_id')
         ->join('townships','townships.id','factories.township_id')
         ->join('districts','districts.id','factories.district_id')
         ->join('regions','regions.id','factories.region_id')
         ->join('industrialzones','industrialzones.id','factories.zone_id')
         ->join('users','users.id','factoryinspectioninforms.inspectionid')
          ->select('factories.*','factoryinspectioninforms.*','townships.*','districts.*','regions.*','users.id','users.name','industrialzones.*')
         ->where('factoryinspectioninforms.cid',$cid)        
        ->get();
        $data['document']=Document::where('check_id',$cid)->where('Factory_Type',1)->get();  

   }
   else{
         $data['newcase']=DB::table('shop_inspection_informs')
         ->join('shops','shops.ShopId','shop_inspection_informs.ShopId')
         ->join('townships','townships.id','shops.township_id')
         ->join('districts','districts.id','shops.district_id')
         ->join('regions','regions.id','shops.region_id')
         ->join('users','users.id','shop_inspection_informs.inspectionid')
         ->select('shops.*','shop_inspection_informs.id as sid','shop_inspection_informs.*','townships.*','districts.*','regions.*','users.id','users.name')
         ->where('shop_inspection_informs.id',$cid)        
        ->get();
        $data['document']=Document::where('check_id',$cid)->where('Factory_Type',2)->get();  
   }
  $data['id']=$id; 
           
    //d($data['newcase']) ;
        //dd($data['document']);
  return view('caseopen.caseopen',$data);
    }
    /** For Case Create **/
    public function createcase(Request $request){
      // dd($request->all());
        $role=Auth::user()->roles;
        foreach($role as $r){
            $roleid=$r->id;
        }

      switch($request->save){

    case 'opencase':
     $create_date =  $request->get('createdate');
      
      $case=new CaseOpen();

      foreach ($request->input('filename') as $key => $value) {
        if($key==1){
          $case->documentId1=$value;  
        }
        if($key==2){
         $case->documentId2=$value;   
        }
        if($key==3){
           $case->documentId3=$value; 
        }
        if($key==4){
         $case->documentId4=$value;   
        }
        if($key==5){
         $case->documentId5=$value;   
        }
        if($key==6){
          $case->documentId6=$value;  
        }
        if($key==7){
          $case->documentId7=$value;  
        }
        if($key==8){
           $case->documentId8=$value;  
        }
        if($key==9){
         $case->documentId9=$value;   
     }    
    
}  
        $case->createdate=$create_date;
        $case->FromUserID=Auth::user()->id;
        $case->role_id=$roleid;
        $case->InspectedDate=$request->get('inspecteddate');
        $case->checkid=$request->get('checkid');
        $case->FromTownshipid=$request->get('townshipid');
        $case->FromDistrictid=$request->get('districtid');
        $case->zoneid=$request->get('zoneid');
        $case->factorytype=$request->get('factorytype');
        $case->Status=1;
        // $case->save();
        if($case->save()){
        //save user log
            activity()->useLog(Auth::user()->name)
                       ->causedBy(Auth::user()->id)
                       ->performedOn($case)
                       ->withProperties($request->all())
                       ->log('Create Case.');
        }
      break;
      case'updatecase':
      /* extract from inspection table */
      if($request->get('factorytype')==1){
        $second   =Factoryinspectioninform::find($request->get('checkid'));
      $inspection= Factoryinspectioninform::where('inspectedtimes', '=', $second->inspectedtimes)->
      where('inspectiondate','<',$second->inspectiondate)->
      whereyear('inspectiondate',$second->inspectiondate)->
       get();
       foreach ($inspection as $in){
        $case=CaseOpen::where('checkid',$in->cid)->first();
        foreach ($request->input('filename') as $key => $value) {
        if($key==1){
          $case->documentId5=$value;  
        }
        if($key==2){
         $case->documentId6=$value;   
        }
        if($key==3){
           $case->documentId7=$value; 
        }
        if($key==4){
         $case->documentId8=$value;   
        }
        if($key==5){
         $case->documentId9=$value;   
        }
       
  
      }
      
      
// $case->save();

      if($case->save()){
        //save user log
            activity()->useLog(Auth::user()->name)
                       ->causedBy(Auth::user()->id)
                       ->performedOn($case)
                       ->withProperties($request->all())
                       ->log('Create Case.');
        }

      }
}else{
  // dd($request->all());
     $second   =ShopInspectionInform::find($request->get('checkid'));
      $inspection= ShopInspectionInform::where('inspectedtime', '=', $second->inspectedtime)->
      where('inspectiondate','<',$second->inspectiondate)->
      whereyear('inspectiondate',$second->inspectiondate)->
       get();
       foreach ($inspection as $in){
        $case=CaseOpen::where('checkid',$in->id)->first();
        foreach ($request->input('filename') as $key => $value) {
        if($key==1){
          $case->documentId5=$value;  
        }
        if($key==2){
         $case->documentId6=$value;   
        }
        if($key==3){
           $case->documentId7=$value; 
        }
        if($key==4){
         $case->documentId8=$value;   
        }
        if($key==5){
         $case->documentId9=$value;   
        }
       
  
      }
      
      
// $case->save();

      if($case->save()){
        //save user log
            activity()->useLog(Auth::user()->name)
                       ->causedBy(Auth::user()->id)
                       ->performedOn($case)
                       ->withProperties($request->all())
                       ->log('Create Case.');
        }


      }

}
      break;

      }
    return redirect('/caselist');  

    }
    public function store(Request $request)
    {
        //
    }
    /*For Create Instruction **/
    public function createinstruction($id,$factorytype){
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
if($factorytype==1){
   $cases=DB::table('cases')
       ->join('factoryinspectioninforms','factoryinspectioninforms.cid','=','cases.checkid')
       ->join('factories','factories.FactoryId','=','factoryinspectioninforms.factory_id')
       ->select('factories.FactoryName','factories.township_id','factories.district_id','factories.FactoryId','factoryinspectioninforms.inspectiondate','factoryinspectioninforms.cid')
       ->where('cases.caseid',$id)  
      ->first();
}
  else
      { 
        $cases=DB::table('cases')
       ->join('shop_inspection_informs','shop_inspection_informs.id','=','cases.checkid')
       ->join('shops','shops.ShopId','=','shop_inspection_informs.ShopId')
       ->select('shops.shopname as FactoryName','shops.township_id','shops.district_id','shops.ShopId as FactoryId','shop_inspection_informs.inspectiondate','shop_inspection_informs.id as cid')
       ->where('cases.caseid',$id)  
       ->first();
      //  dd($cases);
       }
       return view ('instruction.instruction',compact('id','roleid','department','cases','factorytype'));  
    }
    /*to save the instruction **/
    public function saveinstruction(Request $request){
      // dd($request->get('fnotedesc'));
      $request->validate([
        'factoryid'=>'required',
        'factoryname' => 'required',
        'inspecteddate' => 'required',
        'lastdate' => 'required',
        'informdate' => 'required',
        'docno' => 'required',
        'caseid' => 'required',
        'instructiontype' => 'required',
		'brief' => 'required',
      ],[
                    'instructiontype.required'=>'အလုပ်ရုံအမည် ထည့်သွင်းပေးပါရန်',
                    'brief.required' => 'အကြောင်းအရာ ထည့်သွင်းပေးပါရန်',
                    'informdate.required' => 'ကြောင်းကြားရမည့်ရက်စွဲ ထည့်သွင်းပေးပါရန်',
                    'lastdate.required' => 'နောက်ဆုံးထားလုပ်ဆောင်ရမည့်ရက်စွဲ ထည့်သွင်းပေးပါရန်',
                    'docno.required'=>'စာအမှတ် ထည့်သွင်းပေးပါရန်',

                    
                ]);
      
        /**to get the data from request data **/
        $refdoc=$request->get('refdoc');
        $docno=$request->get('docno');
        $insdate=$request->get('insdate');
        $brief=$request->get('brief');
        $lastdate=$request->get('lastdate');
        $insdep=$request->get('instructiondep');
        $informdate=$request->get('informdate');
        $doctype=$request->get('docutype');
        $caseid=$request->get('caseid');
        $instype=$request->get('instructiontype');
        $factoryid=$request->get('factoryid');
        $inspecteddate=$request->get('inspecteddate');
        $factoryname=$request->get('factoryname');
        $userid=Auth::user()->id;


        /** To save the instruction Table **/ 
        $instruction=new Instruction();
        $instruction->case_id=$caseid;
        $instruction->factory_id=$factoryid;
        $instruction->lastdodate=$lastdate;
        $instruction->instructiondep=$insdep;
        $instruction->instructiontitle=$brief;
        $instruction->instructiondate=$informdate;
        $instruction->create_date=$insdate; 
        $instruction->user_id=$userid; 
        $instruction->docmentno=$docno;
        $instruction->refdoc=$refdoc;
        $instruction->inspected_date=$inspecteddate;
        $instruction->factoryname=$factoryname; 
        $instruction->documenttype=$doctype; 
        $instruction->inspectiontype_id=$instype; 
        $instruction->role_id=$request->get('roleid');
        $instruction->township_id=$request->get('townshipid'); 
        $instruction->district_id=$request->get('districtid');  
        if($instype==1) {
            $instruction->a_leave=$request->get('aleaveno');
            $instruction->a_wages=$request->get('awageno');
            $instruction->a_note=$request->get('anoteno');
            $instruction->a_worktime=$request->get('aworktimeno');
            $instruction->a_other=$request->get('aotherno');
            $instruction->a_leavedesc=$request->get('aleavedesc');
            $instruction->a_wagedesc=$request->get('awagedesc');
            $instruction->a_notedesc=$request->get('anotedesc');
            $instruction->a_worktimedesc=$request->get('aworktimedesc');
            $instruction->a_otherdesc=$request->get('aotherdesc');
        }elseif($instype==2){
            $instruction->f_safety=$request->get('fsafetyno');
            $instruction->f_health=$request->get('fhealthno');
            $instruction->f_welfare=$request->get('fwelfareno');
            $instruction->f_note=$request->get('fnoteno');
            $instruction->f_other=$request->get('fotherno');
            $instruction->f_safetydesc=$request->get('fsafetydesc');
            $instruction->f_healthdesc=$request->get('fhealthdesc');
            $instruction->f_welfaredesc=$request->get('fwelfaredesc');
            $instruction->f_notedesc=$request->get('fnotedesc');
            $instruction->f_otherdesc=$request->get('fotherdesc');

        }
        $instruction->factory_type = $request->factorytype;
        $instruction->instructor=$request->get('instructor');
        $instruction->instructor_rank=$request->get('instructorrank');
        $instruction->save(); 
/*update the case status**/
//
CaseOpen::where('caseid',$caseid)->update(['Status' => 2]);
      
     $instructionview=Instruction::where('id',$instruction->id)->get();
      
       return view('instruction.instructiondetail',compact('instructionview'));
        
    }
    /** to view from instruction list*/

    public function detailinstruction($id){
       $instructionview=Instruction::where('id',$id)->get();
       return view('instruction.instructiondetail',compact('instructionview'));
    }
    /** to destroy instruction **/
    public function destroyinstruction($id){
$ins = Instruction::where('id', '=', $id)->delete();
return redirect('/instructionlist');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*to report */
    public function report($id,$factorytype){
        
       
        if($factorytype==1){
          $case=DB::select('select * from cases c, users u,factories f,factoryinspectioninforms i where f.FactoryId=i.factory_id and i.cid=c.checkid and c.FromUserId=u.id and c.caseid='.$id);
        }else{
          $case=DB::select('select * from cases c, users u,shops f,shop_inspection_informs i where f.ShopId=i.ShopId and i.id=c.checkid and c.FromUserId=u.id and c.caseid='.$id);          
        }
        $instpercase=DB::select('select * from instructions ins,documents d where ins.id=d.instructionid and ins.case_id='.$id);
        $reportto=DB::select('select * from users u, role_users ru  where u.id=ru.user_id and (ru.role_id=2 or ru.role_id=3)');
      //  dd($instpercase); 
       
       return view('instruction.report',compact('case','instpercase','reportto','factorytype','id'));

        
       
          
    }
    /** for reporting process **/
    public function reportdetail(Request $request){
      // dd($request->all());
        $request->validate(['reportinformation' => 'required']);
        $factorytype = $request->factorytype;
        $caseid=$request->get('caseid');
        $township=$request->get('township');
        $district=$request->get('district');
        $region=$request->get('region');
        $minister=$request->get('minister');
        $region=$request->get('region');
          if($township==null){
            $township=0;
            }
        if($district==null){
            $district=0;
            }
        if($region==null){
            $region=0;
            }
        
         
           $casereport=new Casereport();
           $casereport->reportinformation=$request->get('reportinformation');
           $casereport->case_id=$caseid;
           $casereport->ToTownship=$township;
           $casereport->ToDistrict=$district;
           $casereport->ToRegion=$region;
           $casereport->Tominister=$minister;
           $casereport->factory_type= $factorytype;
           $casereport->save();

          
           
       
       return redirect('/submissionReport');
      

    }
    
    // to show submission report
    public function submitreport(){
      return view('instruction.submissionreport');
    }
    public function submissionreport(){
	    $case=DB::table('cases')->join('users','users.id','cases.FromUserId')->join('casereports','cases.caseid','casereports.case_id')->
    join('instructions','instructions.case_id','cases.caseid')->join('documents','documents.instructionid','instructions.id')->orderByDesc('casereports.id','desc')->paginate(5);
   if($case->isEmpty()){
	   $factorytype=CaseOpen::select('factorytype','caseid')->get();
	   foreach($factorytype as $type){
		   if($type->factorytype==1){
			   $case=DB::table('cases')
			   ->join('users','users.id','cases.FromUserId')
			   ->join('casereports','cases.caseid','casereports.case_id')
			   ->join('factoryinspectioninforms as inform','inform.cid','cases.checkid')
			   ->join('factories as f','f.FactoryId','inform.factory_id')
			   ->join('documents as d','d.check_id','inform.cid')
			   ->where('cases.caseid',$type->caseid)
			   ->where('cases.factorytype',1)
			   ->select('cases.*','casereports.*','f.FactoryName as factoryname','d.documentfileName','users.*')
			   ->orderByDesc('casereports.id','desc')->paginate(5);

		   }else{
			   $case=DB::table('cases')
			   ->join('users','users.id','cases.FromUserId')
			   ->join('casereports','cases.caseid','casereports.case_id')
			   ->join('shop_inspection_informs as inform','inform.id','cases.checkid')
			   ->join('documents as d','d.check_id','inform.id')
			   ->where('cases.caseid',$type->caseid)
			   ->where('cases.factorytype',2)
			   ->select('cases.*','casereports.*','inform.shopname as factoryname','d.documentfileName','users.*')
			   ->orderByDesc('casereports.id','desc')->paginate(5); 
		   }
	   }
   }
   return view('instruction.submissionreport',compact('case')); 
  

   
      
  }    
     
        public function show($id)
    {
        //
    }
/** For Case Detail **/
public function detailcase($id){


    $case=DB::select('select * from cases c, users u,townships t,districts d, regions r,factories f,factoryinspectioninforms i where u.township_id=t.id and t.district_id=d.id and d.region_id=r.id and f.FactoryId=i.factory_id and i.cid=c.checkid and c.FromUserId=u.id and c.caseid='.$id);
        $instpercase=DB::select('select * from instructions where  case_id='.$id);
        //dd($instpercase);
   return view('caseopen.casedetail',compact('case','instpercase'));  


}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* for instruction update */
    public function update(Request $request)

    {
       $id=$request->get('instructionid');
        $refdoc=$request->get('refdoc');
        $docno=$request->get('docno');
        $insdate=$request->get('insdate');
        $brief=$request->get('brief');
        $lastdate=$request->get('lastdate');
        $insdep=$request->get('instructiondep');
        $informdate=$request->get('informdate');
        $doctype=$request->get('docutype');
        $caseid=$request->get('caseid');
        $instype=$request->get('instructiontype');
        $factoryid=$request->get('factoryid');
        $inspecteddate=$request->get('inspecteddate');
        $factoryname=$request->get('factoryname');
        $userid=Auth::user()->id;
        $instruction=Instruction::find($id);
        $instruction->case_id=$caseid;
        $instruction->factory_id=$factoryid;
        $instruction->lastdodate=$lastdate;
        $instruction->instructiondep=$insdep;
        $instruction->instructiontitle=$brief;
        $instruction->instructiondate=$informdate;
        $instruction->create_date=$insdate; 
        $instruction->user_id=$userid; 
        $instruction->docmentno=$docno;
        $instruction->refdoc=$refdoc;
        $instruction->inspected_date=$inspecteddate;
        $instruction->factoryname=$factoryname; 
        $instruction->documenttype=$doctype; 
         $instruction->role_id=$request->get('roleid');
        $instruction->township_id=$request->get('townshipid'); 
        $instruction->district_id=$request->get('districtid');  
        if($instype==1) {
            $instruction->a_leave=$request->get('aleaveno');
            $instruction->a_wages=$request->get('awageno');
            $instruction->a_note=$request->get('anoteno');
            $instruction->a_worktime=$request->get('aworktimeno');
            $instruction->a_other=$request->get('aotherno');
            $instruction->a_leavedesc=$request->get('aleavedesc');
            $instruction->a_wagedesc=$request->get('awagedesc');
            $instruction->a_notedesc=$request->get('anotedesc');
            $instruction->a_worktimedesc=$request->get('aworktiemdesc');
            $instruction->a_otherdesc=$request->get('aotherdesc');
        }elseif($instype==2){
            $instruction->f_safety=$request->get('fsafetyno');
            $instruction->f_health=$request->get('fhealthno');
            $instruction->f_welfare=$request->get('fwelfareno');
            $instruction->f_note=$request->get('fnoteno');
            $instruction->f_other=$request->get('fotherno');
            $instruction->f_safetydesc=$request->get('fsafetydesc');
            $instruction->f_healthdesc=$request->get('fhealthdesc');
            $instruction->f_welfaredesc=$request->get('fwelfaredesc');
            $instruction->f_notedesc=$request->get('fnotedesc');
            $instruction->f_otherdesc=$request->get('fotherdesc');

        } 
        $instruction->instructor=$request->get('instructor');
        $instruction->instructor_rank=$request->get('instructorrank');  
        $instruction->save(); 


$instructionview=Instruction::where('id',$id)->get();
        return view('instruction.instructiondetail',compact('instructionview'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /*to generate pdf */
    public function generatepdf($id){
    
        $userid=Auth::user()->id;
        
      // $instruction=Instruction::find($id);
        /** To generate PDF **/
      $ins=Instruction::where('id',$id)->first();
      // dd($ins);
      if($ins->factory_type=='1' && $ins->inspectiontype_id=='1'){
          require_once '../vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();
        $view = \View::make('instruction.instructiontemplate',compact('ins'));
        $pdfname=$ins->factoryname.'-FactoryLawInstruction-'.$ins->create_date.mt_rand().'.pdf';
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
        $document->creator=$userid;
        $document->documenttype=$ins->documenttype;
        $document->documentfileName=$pdfname;
        $document->instructionid=$id;
        $document->save();
      }elseif($ins->factory_type=='1' && $ins->inspectiontype_id=='2'){
          require_once '../vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();
        $view = \View::make('instruction.factoryinsturctionpdf',compact('ins'));
        $pdfname=$ins->factoryname.'-FactoryInstruction-'.$ins->create_date.mt_rand().'.pdf';
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
        $document->creator=$userid;
        $document->documenttype=$ins->documenttype;
        $document->documentfileName=$pdfname;
        $document->instructionid=$id;
        $document->save();
      }elseif($ins->factory_type=='2' && $ins->inspectiontype_id=='1'){
          require_once '../vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();
        $view = \View::make('instruction.shopinstructionlawpdf',compact('ins'));
        $pdfname=$ins->factoryname.'-ShopLawInstruction-'.$ins->create_date.mt_rand().'.pdf';
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
        $document->creator=$userid;
        $document->documenttype=$ins->documenttype;
        $document->documentfileName=$pdfname;
        $document->instructionid=$id;
        $document->save();
      }elseif($ins->factory_type=='2' && $ins->inspectiontype_id=='2'){
        require_once '../vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();
        $view = \View::make('instruction.shopinstructionpdf',compact('ins'));
        $pdfname=$ins->factoryname.'-ShopInstruction-'.$ins->create_date.mt_rand().'.pdf';
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
        $document->creator=$userid;
        $document->documenttype=$ins->documenttype;
        $document->documentfileName=$pdfname;
        $document->instructionid=$id;
        $document->save();
      }

      
        // return $html_content;
        return redirect('instructionlist')->with('success','ဖိုင်ထုတ်ခြင်း အောင်မြင်ပါသည် ');
      
           }
    public function destroy($id)
    {
        //
    }
    /* for autom complete search */
     public function searchfact(Request $request){

        if($request->get('query'))
        {
              $query = $request->get('query');

              $data=DB::select("select FactoryName from factories where FactoryName like '%".$query."%'");
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
         $name = $request->name;
         $data=DB::select("select * from factoryinspectioninforms i,factories f where i.factory_id=f.FactoryId and f.FactoryName='".$name."' order by i.inspectiondate desc limit 1");
         // return Response::json(array('success'=>true,'result'=>$result));
         return $data;
    }
/** for inspection table filter data **/
public function inspectionfilter(Request $request){
$array = explode(',', Auth::user()->accessibletwonship);
       if($request->ajax())
{
$output="";
if($request->factorytype==1){
     $cases=DB::table('factoryinspectioninforms')
                ->join('factories','factories.FactoryId','factoryinspectioninforms.factory_id')
                ->join('users','users.id','factoryinspectioninforms.inspectionid')
                ->select('factoryinspectioninforms.*','factories.*','users.*')
                ->whereIN('factories.township_id',$array)
                ->where('factories.FactoryName','LIKE','%'.$request->search."%")->get();
if($cases)
{
    $i=1;
foreach ($cases as $key => $case) {
$output.='<tr>'.
'<td>'.$i++.'</td>'.
'<td><a href="'.url('casenewinspection/'.$case->cid.'/'.$request->factorytype).'">'.$case->FactoryName.'</a></td>'.
'<td>'.$case->inspectiondate.'</td>'.
'<td>'.$case->lastinspectiondate.'</td>'.
'<td>'.$case->inspection_name.'</td>'.
'<td>'.$case->inspectedtimes .$case->inspectiontype.'</td>'.
'<td><a href="'.url('inspectionpdf/'.$case->cid).'">Pdf <i class="fas fa-download"></a></td>'.
'</tr>';
}
echo $output;
   }
}
else{
     $cases=DB::table('shop_inspection_informs')
                ->join('shops','shops.ShopId','shop_inspection_informs.ShopId')
                ->join('users','users.id','shop_inspection_informs.inspectionid')
                ->select('shop_inspection_informs.id as sid','shop_inspection_informs.*','shops.*','users.*')
                ->whereIN('shops.township_id',$array)
                ->where('shops.shopname','LIKE','%'.$request->search."%")->get();
if($cases)
{
    $i=1;
foreach ($cases as $key => $case) {
$output.='<tr>'.
'<td>'.$i++.'</td>'.
'<td><a href="'.url('casenewinspection/'.$case->sid.'/'.$request->factorytype).'">'.$case->shopname.'</a></td>'.
'<td>'.$case->inspectiondate.'</td>'.
'<td>'.$case->lastinspectiondate.'</td>'.
'<td>'.$case->inspection_name.'</td>'.
'<td>'.$case->inspectedtime .$case->inspection_type.'</td>'.
'<td><a href="'.url('inspectionpdf/'.$case->sid).'">Pdf <i class="fas fa-download"></a></td>'.
'</tr>';
}
echo $output;
   }

}       
    }
}
public function instructionlist(){
 $array = explode(',', Auth::user()->accessibletwonship);
  
        $instruction=Instruction::whereIn('township_id',$array)->orderBy('id', 'desc')->paginate(10);
  
    return view('instruction.instructionlist',compact('instruction'));

}
public function downloadfile($id){
$dl=Document::where('instructionid',$id)->value('documentfileName');

return response()->download(storage_path("app/public/instruction/{$dl}"));

}

}
