<?php

namespace App\Http\Controllers;

use App\FactoryLabourInspectionLaw;
use Illuminate\Http\Request;
use Auth;
use App\TempFactoryLabourInspectionLaw;
use App\TempFactoryInspectionInform;
use App\Http\Controllers\Controller;
use App\FactoryInspectionInforms;
use App\Factory;
use App\Document;
use App\User;


class FactoryLabourInspectionLawController extends Controller
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
        return view('inspection.factorylabourinspectionlaw');
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
            'factory_id' => 'required',
            // 'factoryinspectioninform_id' => 'required',

        ],[
            'factory_id.required' => 'အလုပ်ရုံ၊ စက်ရုံ အမည် ထည့်သွင်းပေးပါရန်',
            // 'factoryinspectioninform_id.required' =>'အလုပ်ရုံ၊ စက်ရုံ အမည် ပြန်ရှာပေးပါရန်'
        ]);
        $user_id = Auth::user()->id;
        if($request->tempoary=="tempoary"){
            $factoryinspectioninform_id=TempFactoryInspectionInform::where('factory_id',$request->factory_id)->where('user_id', Auth::user()->id)->value('factory_inspection_inform_id');
            $request->request->add(['inspection_id'=>Auth::user()->id,'factoryinspectioninform_id'=> $factoryinspectioninform_id]);
            $templabourlaw = TempFactoryLabourInspectionLaw::where('factory_id',$request->factory_id)->where('inspection_id',Auth::user()->id)->first();
            if($templabourlaw){
                $templabourlaw->update($request->all());
            }else{
                TempFactoryLabourInspectionLaw::create($request->all());
            }
            return back()->with('success', 'အလုပ်သမားဥပဒေစစ်ဆေးရေ ယာယီသိမ်းဆည်းပြီးပါပီ');
        }else{
            // $request->validate([
            //     'factoryinspectioninform_id' => 'required'
            // ],[
            //     'factoryinspectioninform_id.required' => 'စက်ရုံ/အလုပ်ရုံ အကြောင်းအရာ ထည့်သွင်းပေးပါရန်'
            // ]);

            $factoryinspectioninform_id = TempFactoryInspectionInform::where('factory_id',$request->factory_id)->where('user_id',Auth::user()->id)->value('factory_inspection_inform_id');
            // dd(Auth::user()->id);
            $request->request->add(['inspection_id'=>Auth::user()->id,'factoryinspectioninform_id'=> $factoryinspectioninform_id]);
            $factoryLabourLaw=FactoryLabourInspectionLaw::create($request->all());
            if($factoryLabourLaw){

                activity()->useLog(Auth::user()->name)
                                   ->causedBy(Auth::user()->id)
                                   ->performedOn($factoryLabourLaw)
                                   ->withProperties($request->all())
                                   ->log('Create Factory Inspection Labour Law.');

                /** to generate pdf */
                $factoryinform = FactoryInspectionInforms::where('cid',$factoryLabourLaw->factoryinspectioninform_id)->first();
                $factory = Factory::where('FactoryId',$factoryLabourLaw->factory_id)->first();
                require_once '../vendor/autoload.php';
                $mpdf = new \Mpdf\Mpdf();
                $view = \View::make('pdftemplate.inspectionlaw',compact('factoryLabourLaw','factoryinform','factory'));
                $html_content = $view->render();
                $pdfname=Factory::where('FactoryId',$factoryLabourLaw->factory_id)->value('FactoryName')."-FactoryLabourLaw-".$factoryLabourLaw->create_date.mt_rand().".pdf";
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
                $document->Factory_Type = 1;
                $document->FactoryId=FactoryInspectionInforms::where('cid',$factoryLabourLaw->factoryinspectioninform_id)->value('factory_id');
                $document->FromDepartment=$department;
                $document->create_date=$factoryLabourLaw->created_at;
                $document->entrydate=$factoryLabourLaw->created_at;
                $document->documentTitle='ဥပဒေများအရ စစ်ဆေးချက်ပုံစံ';
                $document->documenttype	='သာမန်';
                $document->creator=$user_id;
                $document->documentfileName=$pdfname;
                $document->check_id = $factoryLabourLaw->factoryinspectioninform_id;
                if($document->save()){
                //save user log 
                 activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($document)
                           ->withProperties($factoryLabourLaw->factoryinspectioninform_id)
                           ->log('Print pdf factory Labour Law.');
                }

                TempFactoryInspectionInform::where('factory_id',$request->factory_id)->where('user_id',Auth::user()->id)->delete();
                TempFactoryLabourInspectionLaw::where('factory_id',$request->factory_id)->where('inspection_id',Auth::user()->id)->delete();
            }
            return redirect('/LabourInspectionLaw/create')->with('success', 'အလုပ်သမားဥပဒေစစ်ဆေးရေ ထည့်သွင်းခြင်းအောင်မြင်ပါသည်');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FactoryLabourInspectionLaw  $factoryLabourInspectionLaw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factoryLabourLaw = FactoryLabourInspectionLaw::where('id',$id)->first();
        $factoryinform = FactoryInspectionInforms::where('cid',$factoryLabourLaw->factoryinspectioninform_id)->first();
        $factory = Factory::where('FactoryId',$factoryLabourLaw->factory_id)->first();
        require_once '../vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();
        $view = \View::make('pdftemplate.inspectionlaw',compact('factoryLabourLaw','factoryinform','factory'));
        $html_content = $view->render();
        $mpdf->WriteHTML($html_content);
        return $mpdf->Output();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FactoryLabourInspectionLaw  $factoryLabourInspectionLaw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factoryLabourInspectionLaw = TempFactoryLabourInspectionLaw::where('id',$id)->first();
        return view('temp.tempfactorylabourinspection',compact('factoryLabourInspectionLaw'));
    }

    public function editLabourLawInspection($id){
        // dd($id);
        $factoryLabourInspectionLaw = FactoryLabourInspectionLaw::where('id',$id)->first();
        return view('inspection.edit_factorylabourinspectionlaw',compact('factoryLabourInspectionLaw'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactoryLabourInspectionLaw  $factoryLabourInspectionLaw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        // dd($id);    
        $factoryLabourInspectionLaw = FactoryLabourInspectionLaw::where('id',$id)->first();
        if($factoryLabourInspectionLaw){
            $factoryLabourInspectionLaw->update($request->all());
        }
        return redirect('FactoryInspectionLists')->with('success','အလုပ်သမားဥပဒေစစ်ဆေးရေး ပြင်ဆင်ခြင်း အောင်မြင်ပါသည်');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactoryLabourInspectionLaw  $factoryLabourInspectionLaw
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactoryLabourInspectionLaw $factoryLabourInspectionLaw)
    {
        //
    }
}
