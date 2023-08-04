<?php

namespace App\Http\Controllers;

use App\Factory;
use App\FactoryHistory;
use App\FactoryDocumentAttachs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\TempFactoryRegister;
use App\Region;
use App\District;
use App\Township;
use App\EconomicSection;
use App\EconomicDivision;
use App\EconomicGroup;
use App\EconomicClass;
use App\Industrialzone;
use App\FactoryClose;
use File;
use Session;
use Auth;
use App\User;
use App\AffectedBodyPiece;
use App\ImpactTypeDes;
use Spatie\Activitylog\Traits\LogsActivity;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function searchdata(Request $request){
          $data= $request->get('searchdata');
          $role=Auth::user()->roles;
          foreach($role as $r){
              $roleid=$r->id;
          }
        $accessibletownship =(Auth::user()->accessibletwonship);
        $accessibletownships = explode(',', $accessibletownship);

            if($data){                
                $factory = Factory::where('FactoryName', 'LIKE', '%'. $data. '%')->whereIn('township_id',$accessibletownships)
                ->orWhere('OwnerName', 'LIKE', '%'. $data. '%')
                ->orWhere('FactoryId', 'LIKE', '%'. $data. '%')->paginate(10);

        //   dd($factory);

                return view('factory.index',compact('factory'))
                ->with('i', (request()->input('page', 1) - 1) * 5);                   
            }elseif($data==null){
                return redirect('/factories');
            }else{
                $factory = Factory::latest()->get();
                     return view('factory.index',compact('factory'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
            }
    }
    public function index(Request $request)
    {           
        $role=Auth::user()->roles;
          foreach($role as $r){
               $roleid=$r->id;
          }
         $accessibletownship =(Auth::user()->accessibletwonship);
         $accessibletownships = explode(',', $accessibletownship);
        //   dd($accessibletownships);
         $factory = Factory::where('status',0)->whereIn('township_id',$accessibletownships )->latest()->paginate(10);
         return view('factory.index',compact('factory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $section= EconomicSection::all();
        $region = Region::all();
        return view('adminpanel.factoryregister',compact('region','section'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    dd($request->all());
        if($request->WorkTimeType==0){
                    $LunchStartTime = $request->LunchStartTimeLaw1;
                    $LunchEndTime = $request->LunchEndTimeLaw1;
                }elseif ($request->WorkTimeType==1) {
                    $LunchStartTime = $request->LunchStartTimeLaw2;
                    $LunchEndTime = $request->LunchEndTimeLaw2;
                }else{
                    $LunchStartTime = $request->LunchStartTimeLaw3;
                    $LunchEndTime = $request->LunchEndTimeLaw3;
        }

       if($request->tempoary=="tempoary"){
            $user_id = Auth::user()->id;
            $request->request->add(['user_id'=> $user_id,'LunchStartTime'=>$LunchStartTime,'LunchEndTime'=>$LunchEndTime]);
            $tempfactory = TempFactoryRegister::where('FactoryName',$request->FactoryName)->first();
            if($tempfactory){
                $tempfactory->update($request->all());
                Session::put('TempFactoryRegister', $request->FactoryName);
            }else{
                
                TempFactoryRegister::create($request->all());
                Session::put('TempFactoryRegister', $request->FactoryName);
            }
            return redirect('/factories')->with('success', 'ယာယီသိမ်းဆည်းပြီးပါပီ');
       }else{
        //    dd($request->all());
        
                $request->validate([
                    'FactoryName' => 'required',
                    'OwnerName' => 'required',
                    'OwnerNrc' => 'required',
                    'region_id' =>'required',
                    'township_id'=> 'required',
                    'district_id'=> 'required',
                    'ContactPhone'=>'required',
                    'RegDate'=> 'required',
                    'FactoryAddress'=> 'required',
                    'StartDate' => 'required',
                    'ManagerName' => 'required',
                    'OwnerAddress' => 'required',
                    'OwnerPhno' => 'required',
                    'SignatureName' => 'required',
                    'SignatureRank' => 'required',
                    'NoticeAddress' => 'required',
                    'SalaryDate' => 'required',
                    'MinimumSalary' => 'required',
                    'MaximumSalary' => 'required'
                ],[
                    'FactoryName.required'=>'အလုပ်ရုံအမည် ထည့်သွင်းပေးပါရန်',
                    'OwnerName.required' => 'လုပ်ငန်းပိုင်ရှင်အမည် ထည့်သွင်းပေးပါရန်',
                    'region_id.required' => 'တိုင်းဒေသကြီး ထည့်သွင်းပေးပါရန်',
                    'township_id.required' => 'မြို့နယ် ထည့်သွင်းပေးပါရန်',
                    'district_id.required' => 'ခရိုင် ထည့်သွင်းပေးပါရန်',
                    'ContactPhone.required' => 'ဆက်သွယ်ရန် ဖုန်းနံပါတ် ထည့်သွင်းပေးပါရန်',
                    'RegDate.required' => 'စက်ရုံ အလုပ်မှတ်ပုံတင်သည့်နေ့စွဲ ထည့်သွင်းပေးပါရန်',
                    'FactoryAddress.required' => 'အလုပ်ရုံလိပ်စာ ထည့်သွင်းပေးပါရန်',
                    'StartDate.required' => 'အလုပ်ရုံစတင် လုပ်ကိုင်သောရက်စွဲ ထည့်သွင်းပေးပါရန်',
                    'ManagerName.required' => 'မန်နေဂျာအမည် ထည့်သွင်းပေးပါရန်',
                    'OwnerAddress.required' => 'လုပ်ငန်းပိုင်ရှင် လိပ်စာ ထည့်သွင်းပေးပါရန်',
                    'SignatureName.required' => 'စစ်ဆေးသူ အမည် ထည့်သွင်းပေးပါရန်',
                    'SignatureRank.required' => 'စစ်ဆေးသူ ရာထူး ထည့်သွင်းပေးပါရန်',
                    'OwnerPhno.required' => 'လုပ်ငန်းပိုင်ရှင် ဖုန်းနံပါတ် ထည့်သွင်းပေးပါရန်',
                    'NoticeAddress.required' => 'အကြောင်းကြားစာပေးပို့မည့်လိပ်စာ ထည့်သွင်းပေးပါရန်',
                    'SalaryDate.required' => 'လစာပေးရက် ထည့်သွင်းပေးပါရန်',
                    'MinimumSalary.required' => 'အနည်းဆုံးလစာ ထည့်သွင်းပေးပါရန်',
                    'MaximumSalary.required' => 'အများဆုံးလစာ ထည့်သွင်းပေးပါရန်',
                    'OwnerNrc.required' => 'လုပ်ငန်းပိုင်ရှင် မှတ်ပုံတင်နံပါတ် ထည့်သွင်းပေးပါရန်'
                    
                ]);
                $FactoryId = rand(1,100000);
                
                $request->request->add(['FactoryId' => $FactoryId,'LunchStartTime'=>$LunchStartTime,'LunchEndTime'=>$LunchEndTime]);
                $factory=Factory::create($request->all());
                if($factory)
                    {  
                         activity()->useLog(Auth::user()->name)
                                   ->causedBy(Auth::user()->id)
                                   ->performedOn($factory)
                                   ->withProperties($request->all())
                                   ->log('Create Factory.');
                        //for history facory table save
                        FactoryHistory::create($request->all());
                        //end
                        $user_id = Auth::user()->id;
                        TempFactoryRegister::where('FactoryName',$request->FactoryName)->where('user_id', $user_id)->delete();
                        Session::forget('TempFactoryRegister');
                        $attach = new FactoryDocumentAttachs;
                        $attach->FactoryId = $FactoryId;
                    //$destinationPath = 'C:/uploads';
                        if ($request->hasFile('ownersentnotice')) {
                            $file = Input::file('ownersentnotice');
                            $filename = 'OwnerSentNotice'.'-'.date("m.d.y").'.'.Input::file('ownersentnotice')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->OwnerSentNotice= $filename;
                        }
                        if($request->hasFile('WorkingTimeNotice')){
                            $file = Input::file('WorkingTimeNotice');
                            $filename = 'WorkingTimeNotice'.'-'.date("m.d.y").'.'.Input::file('WorkingTimeNotice')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->WorkingTimeNotice= $filename;
                        }
                        if($request->hasFile('WorkStartInform')){
                            $file = Input::file('WorkStartInform');
                            $filename = 'WorkStartInform'.'-'.date("m.d.y").'.'.Input::file('WorkStartInform')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->WorkStartInform= $filename;
                        }
                        if($request->hasFile('ec_contract')){
                            $file = Input::file('ec_contract');
                            $filename = 'ec_contract'.'-'.date("m.d.y").'.'.Input::file('ec_contract')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->ec_contract= $filename;
                        }
                        if($request->hasFile('MICLicense')){
                            $file = Input::file('MICLicense');
                            $filename = 'MICLicense'.'-'.date("m.d.y").'.'.Input::file('MICLicense')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->MICLicense= $filename;
                        }
                        if($request->hasFile('CompanyNrc')){
                            $file = Input::file('CompanyNrc');
                            $filename = 'CompanyNrc'.'-'.date("m.d.y").'.'.Input::file('CompanyNrc')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->CompanyNrc= $filename;
                        }
                        if($request->hasFile('IndustryLicense')){
                            $file = Input::file('IndustryLicense');
                            $filename = 'IndustryLicense'.'-'.date("m.d.y").'.'.Input::file('IndustryLicense')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->IndustryLicense= $filename;
                        }
                        if($request->hasFile('Import_Export_License')){
                            $file = Input::file('Import_Export_License');
                            $filename = 'Import_Export_License'.'-'.date("m.d.y").'.'.Input::file('Import_Export_License')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->Import_Export_License= $filename;
                        }
                        if($request->hasFile('Municipal_License')){
                            $file = Input::file('Municipal_License');
                            $filename = 'Municipal_License'.'-'.date("m.d.y").'.'.Input::file('Municipal_License')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->Municipal_License= $filename;
                        }
                        if($request->hasFile('other_license1')){
                            $file = Input::file('other_license1');
                            $filename = 'other_license1'.'-'.date("m.d.y").'.'.Input::file('other_license1')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->other_license1= $filename;
                        }
                        if($request->hasFile('other_license2')){
                            $file = Input::file('other_license2');
                            $filename = 'other_license2'.'-'.date("m.d.y").'.'.Input::file('other_license2')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->other_license2= $filename;
                        }
                        if($request->hasFile('other_license3')){
                            $file = Input::file('other_license3');
                            $filename = 'other_license3'.'-'.date("m.d.y").'.'.Input::file('other_license3')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->other_license3= $filename;
                        }
                        if($request->hasFile('other_license4')){
                            $file = Input::file('other_license4');
                            $filename = 'other_license4'.'-'.date("m.d.y").'.'.Input::file('other_license4')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->other_license4= $filename;
                        }
                        if($request->hasFile('other_license5')){
                            $file = Input::file('other_license5');
                            $filename ='other_license5'.'-'.date("m.d.y").'.'.Input::file('other_license5')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->other_license5= $filename;
                        }
                        if($request->hasFile('other_license6')){
                            $file = Input::file('other_license6');
                            $filename ='other_license6'.'-'.date("m.d.y").'.'.Input::file('other_license6')->getClientOriginalExtension();
                            // Storage::disk('public')->put($filename, File::get($file));
                            Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                            $attach->other_license6= $filename;
                        }
                    $attach->save();

                }
            return redirect('/factories')->with('success', 'စက်ရုံအသစ်ထည့်သွင်းပြီးပါပီ ...');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function show(Factory $factory)
    {
        // dd($factory);
        return view('factory.show',compact('factory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function edit(Factory $factory)
    {
        // dd($factory);
        $section= EconomicSection::all();
        $division =EconomicDivision::where('id',$factory->division_id)->first();
        $group = EconomicGroup::where('id',$factory->group_id)->first();
        $class = EconomicClass::where('class_code',$factory->class_name)->first();
        // dd($section);
        $region = Region::all();
        $district= District::where('id',$factory->district_id)->value('district_name');
        $township= Township::where('id',$factory->township_id)->value('township_name');
        $zone = Industrialzone::where('id',$factory->zone_id)->value('industrialzone_name');
        return view('factory.edit',compact('factory','region','district','township','zone','section','division','group','class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factory $factory)
    {
        // dd($request->input('LunchEndTimeLaw1'));
        $request->validate([
            'FactoryName' => 'required',
            'OwnerName' => 'required',
        ]);
        // dd($request->all());
        if($request->WorkTimeType==0){
                    $LunchStartTime = $request->LunchStartTimeLaw1;
                    $LunchEndTime = $request->LunchEndTimeLaw1;
                }elseif ($request->WorkTimeType==1) {
                    $LunchStartTime = $request->LunchStartTimeLaw2;
                    $LunchEndTime = $request->LunchEndTimeLaw2;
                }else{
                    $LunchStartTime = $request->LunchStartTimeLaw3;
                    $LunchEndTime = $request->LunchEndTimeLaw3;
                 }

         $request->request->add(['LunchStartTime'=>$LunchStartTime,'LunchEndTime'=>$LunchEndTime]);
        // $factory->update($request->all());
        if($factory->update($request->all())){
                         activity()->useLog(Auth::user()->name)
                                   ->causedBy(Auth::user()->id)
                                   ->performedOn($factory)
                                   ->withProperties($request->all())
                                   ->log('Update Factory.');

            $attach =FactoryDocumentAttachs::where('FactoryId',$factory->FactoryId)->first();
            // dd($attach);
            if($attach){
                 //$destinationPath = 'C:/uploads';
                if ($request->hasFile('ownersentnotice')) {
                    $file = Input::file('ownersentnotice');
                    $filename = 'OwnerSentNotice'.'-'.date("m.d.y").'.'.Input::file('ownersentnotice')->getClientOriginalExtension();
                    // dd($filename);
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->OwnerSentNotice= $filename;
                }
                if($request->hasFile('WorkingTimeNotice')){
                    $file = Input::file('WorkingTimeNotice');
                    $filename = 'WorkingTimeNotice'.'-'.date("m.d.y").'.'.Input::file('WorkingTimeNotice')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->WorkingTimeNotice= $filename;
                }
                if($request->hasFile('WorkStartInform')){
                    $file = Input::file('WorkStartInform');
                    $filename = 'WorkStartInform'.'-'.date("m.d.y").'.'.Input::file('WorkStartInform')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->WorkStartInform= $filename;
                }
                if($request->hasFile('ec_contract')){
                    $file = Input::file('ec_contract');
                    $filename = 'ec_contract'.'-'.date("m.d.y").'.'.Input::file('ec_contract')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->ec_contract= $filename;
                }
                if($request->hasFile('MICLicense')){
                    $file = Input::file('MICLicense');
                    $filename = 'MICLicense'.'-'.date("m.d.y").'.'.Input::file('MICLicense')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->MICLicense= $filename;
                }
                if($request->hasFile('CompanyNrc')){
                    $file = Input::file('CompanyNrc');
                    $filename = 'CompanyNrc'.'-'.date("m.d.y").'.'.Input::file('CompanyNrc')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->CompanyNrc= $filename;
                }
                if($request->hasFile('IndustryLicense')){
                    $file = Input::file('IndustryLicense');
                    $filename = 'IndustryLicense'.'-'.date("m.d.y").'.'.Input::file('IndustryLicense')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->IndustryLicense= $filename;
                }
                if($request->hasFile('Import_Export_License')){
                    $file = Input::file('Import_Export_License');
                    $filename = 'Import_Export_License'.'-'.date("m.d.y").'.'.Input::file('Import_Export_License')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->Import_Export_License= $filename;
                }
                if($request->hasFile('Municipal_License')){
                    $file = Input::file('Municipal_License');
                    $filename = 'Municipal_License'.'-'.date("m.d.y").'.'.Input::file('Municipal_License')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->Municipal_License= $filename;
                }
                if($request->hasFile('other_license1')){
                    $file = Input::file('other_license1');
                    $filename = 'other_license1'.'-'.date("m.d.y").'.'.Input::file('other_license1')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->other_license1= $filename;
                }
                if($request->hasFile('other_license2')){
                    $file = Input::file('other_license2');
                    $filename = 'other_license2'.'-'.date("m.d.y").'.'.Input::file('other_license2')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->other_license2= $filename;
                }
                if($request->hasFile('other_license3')){
                    $file = Input::file('other_license3');
                    $filename = 'other_license3'.'-'.date("m.d.y").'.'.Input::file('other_license3')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->other_license3= $filename;
                }
                if($request->hasFile('other_license4')){
                    $file = Input::file('other_license4');
                    $filename = 'other_license4'.'-'.date("m.d.y").'.'.Input::file('other_license4')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->other_license4= $filename;
                }
                if($request->hasFile('other_license5')){
                    $file = Input::file('other_license5');
                    $filename ='other_license5'.'-'.date("m.d.y").'.'.Input::file('other_license5')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->other_license5= $filename;
                }
                if($request->hasFile('other_license6')){
                    $file = Input::file('other_license6');
                    $filename ='other_license6'.'-'.date("m.d.y").'.'.Input::file('other_license6')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attach->other_license6= $filename;
                }
            $attach->update();

        }else{
            $attachcreate = new FactoryDocumentAttachs;
            $attachcreate->FactoryId = $factory->FactoryId;
             //$destinationPath = 'C:/uploads';
                if ($request->hasFile('ownersentnotice')) {
                    $file = Input::file('ownersentnotice');
                    $filename = 'OwnerSentNotice'.'-'.date("m.d.y").'.'.Input::file('ownersentnotice')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->OwnerSentNotice= $filename;
                }
                if($request->hasFile('WorkingTimeNotice')){
                    $file = Input::file('WorkingTimeNotice');
                    $filename = 'WorkingTimeNotice'.'-'.date("m.d.y").'.'.Input::file('WorkingTimeNotice')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->WorkingTimeNotice= $filename;
                }
                if($request->hasFile('WorkStartInform')){
                    $file = Input::file('WorkStartInform');
                    $filename = 'WorkStartInform'.'-'.date("m.d.y").'.'.Input::file('WorkStartInform')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->WorkStartInform= $filename;
                }
                if($request->hasFile('ec_contract')){
                    $file = Input::file('ec_contract');
                    $filename = 'ec_contract'.'-'.date("m.d.y").'.'.Input::file('ec_contract')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->ec_contract= $filename;
                }
                if($request->hasFile('MICLicense')){
                    $file = Input::file('MICLicense');
                    $filename = 'MICLicense'.'-'.date("m.d.y").'.'.Input::file('MICLicense')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->MICLicense= $filename;
                }
                if($request->hasFile('CompanyNrc')){
                    $file = Input::file('CompanyNrc');
                    $filename = 'CompanyNrc'.'-'.date("m.d.y").'.'.Input::file('CompanyNrc')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->CompanyNrc= $filename;
                }
                if($request->hasFile('IndustryLicense')){
                    $file = Input::file('IndustryLicense');
                    $filename = 'IndustryLicense'.'-'.date("m.d.y").'.'.Input::file('IndustryLicense')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->IndustryLicense= $filename;
                }
                if($request->hasFile('Import_Export_License')){
                    $file = Input::file('Import_Export_License');
                    $filename = 'Import_Export_License'.'-'.date("m.d.y").'.'.Input::file('Import_Export_License')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->Import_Export_License= $filename;
                }
                if($request->hasFile('Municipal_License')){
                    $file = Input::file('Municipal_License');
                    $filename = 'Municipal_License'.'-'.date("m.d.y").'.'.Input::file('Municipal_License')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->Municipal_License= $filename;
                }
                if($request->hasFile('other_license1')){
                    $file = Input::file('other_license1');
                    $filename = 'other_license1'.'-'.date("m.d.y").'.'.Input::file('other_license1')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->other_license1= $filename;
                }
                if($request->hasFile('other_license2')){
                    $file = Input::file('other_license2');
                    $filename = 'other_license2'.'-'.date("m.d.y").'.'.Input::file('other_license2')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->other_license2= $filename;
                }
                if($request->hasFile('other_license3')){
                    $file = Input::file('other_license3');
                    $filename = 'other_license3'.'-'.date("m.d.y").'.'.Input::file('other_license3')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->other_license3= $filename;
                }
                if($request->hasFile('other_license4')){
                    $file = Input::file('other_license4');
                    $filename = 'other_license4'.'-'.date("m.d.y").'.'.Input::file('other_license4')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->other_license4= $filename;
                }
                if($request->hasFile('other_license5')){
                    $file = Input::file('other_license5');
                    $filename ='other_license5'.'-'.date("m.d.y").'.'.Input::file('other_license5')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->other_license5= $filename;
                }
                if($request->hasFile('other_license6')){
                    $file = Input::file('other_license6');
                    $filename ='other_license6'.'-'.date("m.d.y").'.'.Input::file('other_license6')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Factory/'.$request->FactoryName, $file, $filename);
                    $attachcreate->other_license6= $filename;
                }
            $attachcreate->save();
        }
              

        }
        return redirect()->route('factories.index')
                        ->with('success','စက်ရုံ အလုပ်ရုံ ပြင်ဆင်ခြင်း အောင်မြင်ပါသည် ...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Factory  $factory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factory $factory)
    {
        if($factory->delete()){
            activity()->useLog(Auth::user()->name)
                      ->causedBy(Auth::user()->id)
                      ->performedOn($factory)
                      ->withProperties($factory)
                      ->log('Delete Factory.');
}
        return redirect('/factories')->with('success', ' Delete Factory succefully!'); 
    }

    public function locationRegion(Request $request){
        $data= $request->get('id');
        $district = District::where('region_id',$data)->get();
        return $district;
    }
    public function locationTownship(Request $request){
        $data= $request->get('id');
        $township = Township::where('district_id',$data)->get();
        return $township;
    }

    public function locationZone(Request $request){
        $data= $request->get('id');
        $Industrialzone = Industrialzone::where('township_id',$data)->get();
        return $Industrialzone;
    }

    public function WorkTypeSection(Request $request){
        $data= $request->get('id');
        $division = EconomicDivision::where('section_id',$data)->get();
        return $division;
    }
    public function WorkTypeGroup(Request $request){
        $data= $request->get('id');
        $group = EconomicGroup::where('division_id',$data)->get();
        return $group;
    }
    public function WorkTypeClass(Request $request){
        $data= $request->get('id');
        $class = EconomicClass::where('group_id',$data)->get();
        return $class;
    }

    public function PainPartSection(Request $request){
        $data = $request->get('id');
        $painpiece = AffectedBodyPiece::where('affected_body_code',$data)->get();
        return $painpiece;
    }

    public function PainCaseSection(Request $request){
        $data = $request->get('id');
        $impact_type_des = ImpactTypeDes::where('impact_type_no',$data)->get();
        return $impact_type_des;
    }

    public function CloseFactory($id){
        $factory = Factory::where('FactoryId',$id)->first();
        $zone = Industrialzone::where('id',$factory->zone_id)->value('industrialzone_name');
        // $total='225';
        $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
        $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
        $totalmen=str_replace($standard_manysets,$standard_numsets,$factory->totalMaleWorker);
        $totalwomen=str_replace($standard_manysets,$standard_numsets,$factory->totalFemaleWorker);
        $total_eng= $totalmen+$totalwomen;
        $total = str_replace($standard_numsets,$standard_manysets,$total_eng);
        // dd($total); 
       // $total=$factory->MenWorker + $factory->WomenWorker + $factory->DailyMenWorker + $factory->DailyWomenWorker + $factory->PieceMenWorker + $factory->PieceWomenWorker; 
        return view('factory.close',compact('factory','zone','total'));
    }
    public function CloseFactorySave (Request $request){
        $request->validate([
            'NoticeDate' => 'required',
            'CloseDate' => 'required',
        ],[
            'NoticeDate.required' => 'အကြောင်းကြားပေးပို့သည့် ရက်စွဲ  ထည့်သွင်းပေးပါရန်',
            'CloseDate.required' => 'ပိတ်သိမ်းမည့် ရက်စွဲ ထည့်သွင်းပေးပါရန်'
        ]);

        $factory=Factory::where('FactoryId',$request->factory_id)->first();
        $factory->status = 1;
        $factory->update();
        $factoryclose=FactoryClose::create($request->all());
        if($factoryclose){
            activity()->useLog(Auth::user()->name)
                      ->causedBy(Auth::user()->id)
                      ->performedOn($factoryclose)
                      ->withProperties($request->all())
                      ->log('Close Factory.');
            }
        return redirect()->route('factories.index')->with('success', 'စက်ရုံပိတ်သိမ်းခြင်း လုပ်ဆောင်မှု အောင်မြင်ပါသည်...');
    }

    public function CloseFactoryList(){
        $role=Auth::user()->roles;
          foreach($role as $r){
               $roleid=$r->id;
          }
         $accessibletownship =(Auth::user()->accessibletwonship);
         $accessibletownships = explode(',', $accessibletownship);

        $factory = Factory::where('status',1)->whereIn('township_id',$accessibletownships)->latest()->paginate(10);
        return view('factory.closelist',compact('factory'))
               ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function download($id){
        $factory = Factory::where('id',$id)->first();
        require_once '../vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();
        $view = \View::make('factory.download',compact('factory'));
        $pdfname=$factory->FactoryName.'-'.$factory->create_date.mt_rand().'.pdf';
        $html_content = $view->render();
        $mpdf->WriteHTML($html_content);
        return $mpdf->Output();
    }
}
