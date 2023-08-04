<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Seminar;
use App\FactoryProsecuted;
use Carbon\Carbon;
use App\Factory;
use App\FactoryInspectionImpact;
use App\AffectedInformation;
use App\FactoryLabourInspectionLaw;
use App\ShopLabourInspectionLaw;
use App\FactoryInspectionSafety;
use App\ShopInspectionSafety;
use Auth;
use App\PermissionOtFactory;
use DB;
use App\Instruction;
use App\Region;
use App\Township;
class ReportController extends Controller
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


    public function ReportAll(){
        $region=Region::all();
        return view('report.report',compact('region'));
    }

   
    public function seminardata(Request $request){
        // dd($request->all());
        $from = $request->from;
        $to = $request->to;
        $type=$request->type;
        $township_id = $request->township_id;
        $township_name = Township::where('id',$township_id)->value('township_name');
        // dd($township_id);
        //acccessible townships get from user
        $accessibletownship =(Auth::user()->accessibletwonship);
        $accessibletownships = explode(',', $accessibletownship);
// dd(var_dump($accessibletownships));
            if (in_array($township_id, $accessibletownships))
            {
                // dd('good');
            }
            else
            {
                return back()->with('success','You cannot access this township!');
            }

        if($type==1){
            //seminar report 
            $report=Seminar::where('township_id',$township_id)->whereBetween('helddate', [$from, $to])->get();
        }elseif($type==2){
            //Proscuted report factory and shop 
            $report=FactoryProsecuted::where('Township',$township_id)->whereBetween('ProsecutedDay', [$from, $to])->get();
        }elseif($type==3){
            // close factory and open factory increase worker and reduce worker report
            $newdate = date("m", strtotime("-1 months"));
            $mytime = Carbon::now();
            $lastmonthopencount= Factory::where('township_id',$township_id)->whereMonth('created_at',$newdate)->whereYear('created_at',date('Y'))->groupby('township_id')->where('status',0)->count();
            $lastmonthclosecount= Factory::where('township_id',$township_id)->whereMonth('created_at',$newdate)->whereYear('created_at',date('Y'))->groupby('township_id')->where('status',1)->count();
            $lastmonth=Factory::where('township_id',$township_id)->whereMonth('created_at',$newdate)->whereYear('created_at',date('Y'))->get();
            $thismonth=Factory::where('township_id',$township_id)->whereMonth('created_at',Carbon::now()->month)->whereYear('created_at',date('Y'))->get();

            // dd($lastmonth);
            $thismonthopen= Factory::where('township_id',$township_id)->whereMonth('created_at',Carbon::now()->month)->whereYear('created_at',date('Y'))->groupby('township_id')->where('status',0)->count();
            $thismonthclose= Factory::where('township_id',$township_id)->whereMonth('created_at',Carbon::now()->month)->whereYear('created_at',date('Y'))->groupby('township_id')->where('status',1)->count();

            // dd($report);
            return view('report.reportview',compact('lastmonthopencount','lastmonthclosecount','thismonthopen','thismonthclose','lastmonth','thismonth','type','township_name','township_id','from','to'));
        }elseif($type==4){
            /**ot permission  */
            // $ot=PermissionOtFactory::whereIn('township',$accessibletownships)->whereBetween('created_at', [$from, $to])->get();

            $ot = DB::table('permission_ot_factories')
            ->join('o_t_reports', 'permission_ot_factories.id', '=', 'o_t_reports.ot_id')
            ->where('permission_ot_factories.township',$township_id)->whereBetween('permission_ot_factories.created_at', [$from, $to])
            ->where('o_t_reports.status','=',1)
            ->select('permission_ot_factories.*', 'o_t_reports.status')
            ->get();
            // dd($ot);
            $ot_count = $ot->count();
            return view('report.reportview',compact('ot_count','ot','type','township_name','township_id','from','to'));

        }elseif($type==5){
            $report= FactoryInspectionImpact::where('township_id',$township_id)->whereBetween('created_at', [$from, $to])->get();
            // dd($report);
        }elseif($type==6){
            $report=AffectedInformation::where('township_id',$township_id)->whereBetween('created_at',[$from, $to])->get();
        }elseif($type==7){
            // စစ်ဆေးရေးလချူပ် (GLI) 

            $reportfactory = FactoryLabourInspectionLaw::where('township_id',$township_id)->whereBetween('created_at',[$from, $to])->get();
            // dd($reportfactory);

            $reportshop = ShopLabourInspectionLaw::where('township_id',$township_id)->whereBetween('created_at',[$from, $to])->get();
            return view('report.reportview',compact('reportfactory','reportshop','type','township_name','township_id','from','to'));
        }elseif($type==8){
            // စစ်ဆေးရေးလချူပ် (IF) 
            $reportfactory = FactoryInspectionSafety::where('township_id',$township_id)->whereBetween('created_at',[$from, $to])->get();
            $reportshop = ShopInspectionSafety::where('township_id',$township_id)->whereBetween('created_at',[$from, $to])->get();
            // dd($reportshop);
            return view('report.reportview',compact('reportfactory','reportshop','type','township_name','township_id','from','to'));
        }elseif($type==9){
            // ညွှန်ကြားချက်များ (အလုပ်ရုံစစ်ဆေးရေး) 
            // $instruction = Instruction::whereIn('township_id',$accessibletownships)->whereBetween('created_at', [$from, $to])->get();
            // $factory_instruction=$instruction->where('factory_type',1)->count();
            // $shop_instruction=$instruction->where('factory_type',2)->count();

            $factory_instruction = DB::table("instructions")
                ->where('township_id',$township_id)->whereBetween('created_at', [$from, $to])
                ->where('factory_type',1)
                ->select(DB::raw("SUM(f_safety) as f_safety_total,SUM(f_health) as f_health_total,SUM(f_welfare) as f_welfare_total,SUM(f_note) as f_note_total,SUM(f_other) as f_other_total"))
                ->get();

            $shop_instruction = DB::table("instructions")
            ->where('township_id',$township_id)->whereBetween('created_at', [$from, $to])
            ->where('factory_type',2)
            ->select(DB::raw("SUM(f_safety) as f_safety_total,SUM(f_health) as f_health_total,SUM(f_welfare) as f_welfare_total,SUM(f_note) as f_note_total,SUM(f_other) as f_other_total"))
            ->get();
            //  dd($factory_instruction);
            // foreach($factory_instruction as $f){
            //     dd($f->a_leave_total);
            // }
            return view('report.reportview',compact('factory_instruction','shop_instruction','type','township_name','township_id','from','to'));

        }

        if($type==10){
            // ညွှန်ကြားချက်များ (အလုပ်သမားဥပဒေစစ်ဆေးရေး) 
            $factory_instruction = DB::table("instructions")
                ->where('township_id',$township_id)->whereBetween('created_at', [$from, $to])
                ->where('factory_type',1)
                ->select(DB::raw("SUM(a_leave) as a_leave_total,SUM(a_wages) as a_wages_total,SUM(a_note) as a_note_total,SUM(a_worktime) as a_worktime_total,SUM(a_other) as a_other_total"))
                ->get();

            $shop_instruction = DB::table("instructions")
            ->where('township_id',$township_id)->whereBetween('created_at', [$from, $to])
            ->where('factory_type',2)
            ->select(DB::raw("SUM(a_leave) as a_leave_total,SUM(a_wages) as a_wages_total,SUM(a_note) as a_note_total,SUM(a_worktime) as a_worktime_total,SUM(a_other) as a_other_total"))
            ->get();
            //  dd($shop_instruction);
            // foreach($factory_instruction as $f){
            //     dd($f->a_leave_total);
            // }
            return view('report.reportview',compact('factory_instruction','shop_instruction','type','township_name','township_id','from','to'));

        }
        // dd($report);
        return view('report.reportview',compact('report','type','township_name','township_id','from','to'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
