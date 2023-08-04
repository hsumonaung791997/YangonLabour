<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Township;
use App\Seminar;
use App\FactoryProsecuted;
use App\Factory;
use DB;
use Carbon\Carbon;
use App\FactoryInspectionImpact;
use App\AffectedInformation;
use App\FactoryLabourInspectionLaw;
use App\ShopLabourInspectionLaw;
use App\FactoryInspectionSafety;
use App\ShopInspectionSafety;
class ReportPdfController extends Controller
{
    public function reportPdf($type,$township_id,$from,$to){
        // dd($type);
        $township_name = Township::where('id',$township_id)->value('township_name');
        // dd($township_name);
        if($type==1){
            /**
             * for သင္တန္းႏွစ္ခ်ူပ္ Pdf report
             */
            $report=Seminar::where('township_id',$township_id)->whereBetween('helddate', [$from, $to])->get();

            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [300, 400]]);
            $view = \View::make('reportpdf.report_seminar',compact('report','township_name'));
            $html_content = $view->render();
            $mpdf->WriteHTML($html_content);
            return $mpdf->Output();
        }elseif($type==2){
            /**
             *  တရားစွဲလချူပ်
             */
           
             /**
              * တရားစြဲလခ်ူပ္
              */
            $report=FactoryProsecuted::where('Township',$township_id)->whereBetween('ProsecutedDay', [$from, $to])->get();

            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [300, 400]]);
            $view = \View::make('reportpdf.report_prosecute',compact('report','township_name'));
            $html_content = $view->render();
            $mpdf->WriteHTML($html_content);
            return $mpdf->Output();
        }elseif($type==3){
            /**
             * စက်ရုံဖွင့် / ပိတ်နှင့် လုပ်သားအတိုး / အလျော့စာရင်
             */

             /**
              * စက္႐ုံဖြင့္ / ပိတ္ႏွင့္ လုပ္သားအတိုး / အေလ်ာ့စာရင္
              */
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

              require_once '../vendor/autoload.php';
              $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [300, 400]]);
              $view = \View::make('reportpdf.report_factory_worker',compact('lastmonthopencount','lastmonthclosecount','lastmonth','thismonth','township_name','thismonthopen','thismonthclose'));
              $html_content = $view->render();
              $mpdf->WriteHTML($html_content);
              return $mpdf->Output();
        }elseif($type==4){
            /**
             * အချိန်ပိုခွင့်ပြုခြင်း ၊ အချိန်ပိုလုပ်ကိုင်ခြင်း လချူပ် 
             */
            /**
             * အခ်ိန္ပိုခြင့္ျပဳျခင္း ၊ အခ်ိန္ပိုလုပ္ကိုင္ျခင္း လခ်ဴပ္
             */
            
            $ot = DB::table('permission_ot_factories')
            ->join('o_t_reports', 'permission_ot_factories.id', '=', 'o_t_reports.ot_id')
            ->where('permission_ot_factories.township',$township_id)->whereBetween('permission_ot_factories.created_at', [$from, $to])
            ->where('o_t_reports.status','=',1)
            ->select('permission_ot_factories.*', 'o_t_reports.status')
            ->get();
            // dd($ot);
            $ot_count = $ot->count();
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [300, 400]]);
            $view = \View::make('reportpdf.report_ot_permission',compact('ot','ot_count','township_name'));
            $html_content = $view->render();
            $mpdf->WriteHTML($html_content);
            return $mpdf->Output();
        }elseif($type==5){
            /**
             * တော်တဆထိခိုက်မှု စစ်ဆေးခြင်းလချူပ်
             */
            /**
             * ေတာ္တဆထိခိုက္မႈ စစ္ေဆးျခင္းလခ်ဴပ္
             */
            $report= FactoryInspectionImpact::where('township_id',$township_id)->whereBetween('created_at', [$from, $to])->get();
            // dd($report);
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [300, 400]]);
            $view = \View::make('reportpdf.report_impact_inspection',compact('report','township_name'));
            $html_content = $view->render();
            $mpdf->WriteHTML($html_content);
            return $mpdf->Output();
        }elseif($type==6){
            /**
             * မတော်တဆထိခိုက်မှု ရရှိခြင်းလချူပ်
             */
            /**
             * မေတာ္တဆထိခိုက္မႈ ရရွိျခင္းလခ်ဴပ္
             * 
             */
            $report=AffectedInformation::where('township_id',$township_id)->whereBetween('created_at',[$from, $to])->get();
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [300, 400]]);
            $view = \View::make('reportpdf.report_impact',compact('report','township_name'));
            $html_content = $view->render();
            $mpdf->WriteHTML($html_content);
            return $mpdf->Output();
        }elseif($type==7){
            /**
             *  စစ်ဆေးရေးလချူပ် (GLI) 
             */
            /**
             *  စစ္ေဆးေရးလခ်ဴပ္ (GLI) 
             */
            $reportfactory = FactoryLabourInspectionLaw::where('township_id',$township_id)->whereBetween('created_at',[$from, $to])->get();
            // dd($reportfactory);

            $reportshop = ShopLabourInspectionLaw::where('township_id',$township_id)->whereBetween('created_at',[$from, $to])->get();
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [300, 400]]);
            $view = \View::make('reportpdf.report_inspection_gli',compact('reportfactory','reportshop','township_name'));
            $html_content = $view->render();
            $mpdf->WriteHTML($html_content);
            return $mpdf->Output();        
        }elseif($type==8){
            /**
             * စစ်ဆေးရေးလချူပ် (IF)  
             * */ 
            $reportfactory = FactoryInspectionSafety::where('township_id',$township_id)->whereBetween('created_at',[$from, $to])->get();
            $reportshop = ShopInspectionSafety::where('township_id',$township_id)->whereBetween('created_at',[$from, $to])->get();
            // dd($reportshop);
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [300, 400]]);
            $view = \View::make('reportpdf.report_inspection_if',compact('reportfactory','reportshop','township_name'));
            $html_content = $view->render();
            $mpdf->WriteHTML($html_content);
            return $mpdf->Output();   
        }elseif($type==9){
            // ညွှန်ကြားချက်များ (အလုပ်ရုံစစ်ဆေးရေး) 
           
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
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [300, 400]]);
            $view = \View::make('reportpdf.report_instruction_if',compact('factory_instruction','shop_instruction','township_name'));
            $html_content = $view->render();
            $mpdf->WriteHTML($html_content);
            return $mpdf->Output();   

        } if($type==10){
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
            require_once '../vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [300, 400]]);
            $view = \View::make('reportpdf.report_instruction_gif',compact('factory_instruction','shop_instruction','township_name'));
            $html_content = $view->render();
            $mpdf->WriteHTML($html_content);
            return $mpdf->Output(); 
        }

    }
}
