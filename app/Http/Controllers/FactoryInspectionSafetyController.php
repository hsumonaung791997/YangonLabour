<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FactoryInspectionSafety;
use App\TempFactoryInspectionSafety;
use App\TempFactoryInspectionInform;
use App\Factory;
use App\Document;
use App\Township;
use App\District;
use App\Region;
use App\User;
use Session;
use Auth;
use mPDF;
use Carbon\carbon;
use App\EconomicClass;
class FactoryInspectionSafetyController extends Controller
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
        // dd($request->all());

        $request->validate([
            'factoryname' => 'required'
        ],[
            'factoryname.required' => 'စက်ရုံ / အလုပ်ရုံ ရွေးချယ်ပေးပါရန်'
        ]);

        if($request->tempoary=="tempoary"){
            $user_id = Auth::user()->id;
            $factoryinspectioninform_id=TempFactoryInspectionInform::where('user_id', Auth::user()->id)->value('factory_inspection_inform_id');
            $request->request->add(['user_id'=> $user_id,'factoryinspectioninform_id' => $factoryinspectioninform_id]);
            $tempsafety = TempFactoryInspectionSafety::where('factoryname',$request->factoryname)->first();
            if($tempsafety){
                $tempsafety->update($request->all());
            }else{
                TempFactoryInspectionSafety::create($request->all());
            }
            return redirect('/factorysafteyinspection')->with('success', 'ယာယီသိမ်းဆည်းပြီးပါပီ');
        }else{
            // dd($request->all());
            $request->validate([
                'inspectorname' => 'required',
                'inspectorrank' => 'required'],[
                    'inspectorname.required'=>'စစ်ဆေးသူအရာရှိ အမည် ထည့်သွင်းပေးပါရန်',
                    'inspectorrank.required'=>'စစ်ဆေးသူအရာရှိ ရာထူး ထည့်သွင်းပေးပါရန်',

                ]);

            $user_id = Auth::user()->id;

            $tempsafety = TempFactoryInspectionSafety::where('user_id', Auth::user()->id)->where('factoryname',$request->factoryname)->first();
            if($tempsafety){
                $factoryinspectioninform_id=$tempsafety->factoryinspectioninform_id;  

            }else{
                $factoryinspectioninform_id=TempFactoryInspectionInform::where('user_id', Auth::user()->id)->where('factory_id',$request->factoryid)->value('factory_inspection_inform_id');  
            }

            // dd($factoryinspectioninform_id);          
            $request->request->add(['factoryinspectioninform_id' => $factoryinspectioninform_id ]);
            $factory_safety=FactoryInspectionSafety::create($request->all());
            if($factory_safety){

                activity()->useLog(Auth::user()->name)
                ->causedBy(Auth::user()->id)
                ->performedOn($factory_safety)
                ->withProperties($request->all())
                ->log('Create Factory Inspection Safety.');

              /** To generate PDF **/
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
                $document->check_id = $factory_safety->factoryinspectioninform_id;

                if($document->save()){
                //store activity log
                 activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($document)
                           ->withProperties($factoryinspectioninform_id)
                           ->log('Print pdf factory_safety.');
                }

            }
            //to delete temp 
            TempFactoryInspectionSafety::where('factoryname',$request->factoryname)->where('user_id', $user_id)->delete();

            return redirect('/factorysafteyinspection')->with('success', 'လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေးနှင့်ကျန်းမာရေးစစ်ဆေးချက်ပုံစံ ထည့်သွင်းပီးပါပီ');
        }
        
    }
    
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $factory_safety = FactoryInspectionSafety::where('id',$id)->first();
        require_once '../vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();
        $view = \View::make('pdftemplate.inspectionSafety',compact('factory_safety'));
        $html_content = $view->render();
        $mpdf->WriteHTML($html_content);
        return $mpdf->Output();
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        // dd($id);
        $factory_safety=FactoryInspectionSafety::where('id',$id)->first();
        $factory= Factory::where('FactoryName',$factory_safety->factoryname)->first();
        // dd($factory);
        return view('inspection.Edit_FactorySafteyInspection',compact('factory_safety','factory'));
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
        // dd($id);
        $factory_safety  = FactoryInspectionSafety::where('id',$id)->first();
        if ($factory_safety) {
           $factory_safety->update($request->all());
        }
        return redirect('FactoryInspectionLists')->with('success',' အလုပ်ရုံစစ်ဆေးရေး ပြင်ဆင်ခြင်း အောင်မြင်ပါသည်');  
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
