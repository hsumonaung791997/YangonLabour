<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\FactoryInspectionInforms;
use App\TempFactoryInspectionInform;
use App\Factory;
use Auth;
use App\User;
use Spatie\Activitylog\Traits\LogsActivity;
class FactoryInspectionInformsController extends Controller
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
        $request->validate([
            'factory_id' => 'required'
        ],[
            'factory_id.required' => 'စက်ရုံ / အလုပ်ရုံ ရွေးချယ်ပေးပါရန်'
        ]);
        if($request->tempoary=="tempoary"){
            $user_id = Auth::user()->id;
            $request->request->add(['user_id'=> $user_id]);
            $tempfactoryimpact = TempFactoryInspectionInform::where('factory_id',$request->factory_id)->first();
            if($tempfactoryimpact){
                $tempfactoryimpact->update($request->all());
            }else{
                TempFactoryInspectionInform::create($request->all());
            }
            return redirect('/FactoryInspections')->with('success', 'ယာယီသိမ်းဆည်းပြီးပါပီ');
       }else{
            //  dd($request->all());
            $request->validate([
                'inspectedtimes' => 'required',
                'inspectiontype'=> 'required',
                'inspectiondate' => 'required',
                'ownername'=>'required',
                'owneraddress'=>'required',
                'manageraddress'=>'required',
                'managername' => 'required',
                'inspection_name' => 'required',
                'inspectorrank' => 'required',
                'factoryaddress'=> 'required'],[
                    'inspectedtimes.required'=>'စစ်ဆေးခြင်းအကြိမ် ထည့်သွင်းပေးပါရန်',
                    'inspectiontype.required' => 'စစ်ဆေးချက်ပုံစံ ထည့်သွင်းပေးပါရန်',
                    'inspectiondate.required' => 'စစ်ဆေးသည့်ရက်စွဲ ထည့်သွင်းပေးပါရန်',
                    'ownername.required' => 'ပိုင်ရှင်အမည် ထည့်သွင်းပေးပါရန်',
                    'owneraddress.required' => 'ပိုင်ရှင်လိပ်စာ ထည့်သွင်းပေးပါရန်',
                    'manageraddress.required' => 'မန်နေဂျာလိပ်စာ ထည့်သွင်းပေးပါရန်',
                    'managername.required' => 'မန်နေဂျာအမည် ထည့်သွင်းပေးပါရန်',
                    'inspection_name.required' => 'စစ်ဆေးရေးအရာရှိအမည် ထည့်သွင်းပေးပါရန်',
                    'inspectorrank.required' => 'စစ်ဆေးသူအရာရှိ ရာထူး  ထည့်သွင်းပေးပါရန်',
                    'factoryaddress.required' => 'စက်ရုံလိပ်စာ ထည့်သွင်းပေးပါရန်'
                ]);
            $user_id = Auth::user()->id;
            $request->request->add(['user_id'=> $user_id]);
            $factory_inspection_inform=FactoryInspectionInforms::create($request->all());
            if($factory_inspection_inform){
                //store activity log
                activity()->useLog(Auth::user()->name)
                                   ->causedBy(Auth::user()->id)
                                   ->performedOn($factory_inspection_inform)
                                   ->withProperties($request->all())
                                   ->log('Create Factory Inspection Inform .');

                TempFactoryInspectionInform::create($request->all());
                $FactoryInspectionSession =FactoryInspectionInforms::where('factory_id',$request->factory_id)->latest()->first();
                $tempfactoryimpact = TempFactoryInspectionInform::where('factory_id',$request->factory_id)->first();
                $tempfactoryimpact->factory_inspection_inform_id= $FactoryInspectionSession->cid;
                $tempfactoryimpact->update();
                Session::put('FactoryInspection', $FactoryInspectionSession->cid);

                //update factories 
                 $factory = Factory::where('FactoryId',$request->factory_id)->first();
                $factory->OwnerName = $request->workerownername;
                $factory->OwnerAddress = $request->workerowneraddress;
                $factory->MonthlyAmounts = $request->MonthlyAmounts;
                $factory->ManagerName = $request->managername;
                $factory->FactoryAddress= $request->factoryaddress;
                $factory->MenWorker= $request->Mmenworker;
                $factory->WomenWorker= $request->Mwomenworker;
                $factory->AMenWorker= $request->MAmaleworker;
                $factory->AWomenWorker= $request->MAfemaleworker;
                $factory->CMenWorker= $request->Cmenworker;
                $factory->CWomenWorker= $request->Cwomenworker;

                $factory->DailyMenWorker= $request->Dmenworker;
                $factory->DailyWomenWorker= $request->Dwomenworker;
                $factory->ADailyMenWorker= $request->DAmaleworker;
                $factory->ADailyWomenWorker= $request->DAfemaleworker;
                $factory->CDailyMenWorker= $request->DCmaleworker;
                $factory->CDailyWomenWorker= $request->DCfemaleworker;

                $factory->PieceMenWorker= $request->Pmenworker;
                $factory->PieceWomenWorker= $request->Pwomenworker;
                $factory->APieceMenWorker= $request->PAmaleworker;
                $factory->APieceWomenWorker= $request->PAfemaleworker;
                $factory->CPieceMenWorker= $request->PCmaleworker;
                $factory->CPieceWomenWorker= $request->PCfemaleworker;

                $factory->MCmaleworker= $request->MCmaleworker;
                $factory->MCfemaleworker= $request->MCfemaleworker;
                $factory->CAmaleworker= $request->CAmaleworker;
                $factory->CAfemaleworker= $request->CAfemaleworker;
                $factory->CCmaleworker= $request->CCmaleworker;
                $factory->CCfemaleworker= $request->CCfemaleworker;
                $factory->totalMaleWorker=$request->totalMaleWorker;
                $factory->totalFemaleWorker=$request->totalFemaleWorker;
                $factory->update();
                //
            }
            return redirect('/FactoryInspections')->with('success', 'လုပ်ငန်းဌာနဆိုင်ရာ အချက်အလက်များ ထည့်သွင်းပြီးပါပီ ...');
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
