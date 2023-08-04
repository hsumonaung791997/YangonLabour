<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\ShopDocumentAttachs;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use File;
use Auth;
use Session;
use App\Region;
use App\District;
use App\Township;
use App\TempShopRegister;
use App\EconomicSection;
use App\EconomicDivision;
use App\EconomicGroup;
use App\EconomicClass;
use App\ShopClose;
use Spatie\Activitylog\Traits\LogsActivity;

class ShopController extends Controller
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
                $shop = Shop::where('shopname', 'LIKE', '%'. $data. '%')->whereIn('township_id',$accessibletownships)
                ->orWhere('ownername', 'LIKE', '%'. $data. '%')
                ->orWhere('ShopId', 'LIKE', '%'. $data. '%')->paginate(15);

                return view('shop.index',compact('shop'))
                ->with('i', (request()->input('page', 1) - 1) * 5);                   
            }
            elseif($data==null){
                return redirect('/shops');
            }else{
                $shop = Shop::latest()->get();
                     return view('shop.index',compact('shop'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
            }
    }

    public function index()
    {   
        $role=Auth::user()->roles;
        foreach($role as $r){
             $roleid=$r->id;
        }
       $accessibletownship =(Auth::user()->accessibletwonship);
       $accessibletownships = explode(',', $accessibletownship);

        $shop = Shop::where('status',0)->whereIn('township_id',$accessibletownships)->latest()->paginate(15);
         return view('shop.index',compact('shop'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function CloseShopList(){
        $role=Auth::user()->roles;
        foreach($role as $r){
             $roleid=$r->id;
        }
       $accessibletownship =(Auth::user()->accessibletwonship);
       $accessibletownships = explode(',', $accessibletownship);

         $shop = Shop::where('status',1)->whereIn('township_id',$accessibletownships)->latest()->paginate(15);
         return view('shop.closelist',compact('shop'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
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
        return view('adminpanel.shopregister',compact('region','section'));
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
        if($request->tempoary=="tempoary"){
            $user_id = Auth::user()->id;
            $request->request->add(['user_id'=> $user_id]);
            $tempshop = TempShopRegister::where('shopname',$request->shopname)->first();
            if($tempshop){
                $tempshop->update($request->all());
                Session::put('TempShopRegister', $request->shopname);
            }else{
                TempShopRegister::create($request->all());
                // Session::put('TempShopRegister', $request->shopname);
            }
            return redirect()->route('shops.index')->with('success', 'ယာယီသိမ်းဆည်းပြီးပါပီ');
        }else{
            // dd($request->all());
            $request->validate([
                'shopname' => 'required',
                'shopphone' => 'required',
                'ownername' => 'required',
                'ownernrc' => 'required',
                'owneraddress' => 'required',
                'ownerphone' => 'required',
                'mangername' => 'required',
                'managernrc' => 'required',
                'manageraddress' => 'required',
                'managerphone' => 'required',
                'OverTime'=>'required',
                'OTPermit' => 'required',
                'SSB' => 'required',
                'SafteySide' => 'required',
                'ManagementExpert' => 'required',
                'RegDate' => 'required',
                'shoptype' => 'required',
                'loacationaddress'=> 'required',
                'StartDate' => 'required',
                'MinimumSalary' => 'required',
                'MaximumSalary'=>'required',
                'SalaryDate'=> 'required',
                'region_id'=>'required',
                'SignatureName'=>'required',
                'SignatureRank'=>'required',
                'district_id' => 'required',
                'township_id' => 'required',
            ],[
                'shopname.required' =>'ဆိုင် (သို့မဟုတ်) အလုပ်ဌာန အမည် ထည့်သွင်းပေးပါရန်',
                'shopphone.required' =>'ဆိုင် (သို့မဟုတ်) အလုပ်ဌာန ဖုန်းနံပါတ် ထည့်သွင်းပေးပါရန်',
                'ownername.required' =>'အလုပ်ရှင်အမည် ထည့်သွင်းပေးပါရန်',
                'ownernrc.required' =>'အလုပ်ရှင် နိုင်ငံသားစီစစ်ရေးအမှတ် ထည့်သွင်းပေးပါရန်',
                'owneraddress.required' =>'အလုပ်ရှင်နေရပ်လိပ်စာ ထည့်သွင်းပေးပါရန်',
                'ownerphone.required' =>'ပိုင်ရှင် ဆက်သွယ်ရန် ဖုန်းနံပါတ် ထည့်သွင်းပေးပါရန်',
                'mangername.required' =>'မန်နေဂျာ (သို့မဟုတ်) အလုပ်ရှင်ကိုယ်စား တာဝန်ခံအမည် ထည့်သွင်းပေးပါရန်',
                'managernrc.required' =>'တာဝန်ခံ နိုင်ငံသားစီစစ်ရေးအမှတ် ထည့်သွင်းပေးပါရန်',
                'manageraddress.required' =>'တာဝန်ခံ နေရပ်လိပ်စာ ထည့်သွင်းပေးပါရန်',
                'managerphone.required' =>'တာဝန်ခံ ဆက်သွယ်ရန်ဖုန်း ထည့်သွင်းပေးပါရန်',
                'RegDate.required' =>'ဆိုင် / အလုပ်ဌာန အလုပ်မှတ်ပုံတင်သည့်နေ့စွဲ ထည့်သွင်းပေးပါရန်',
                'shoptype.required' =>'ဆိုင်နှင့် အလုပ်ဌာနအမျိုးအစား ထည့်သွင်းပေးပါရန်',
                'loacationaddress.required' =>'ဆိုင်နှင့် အလုပ်ဌာန လိပ်စာ ထည့်သွင်းပေးပါရန်',
                'StartDate.required' =>'အလုပ်ရုံစတင်လုပ်ကိုင်သောရက်စွဲ ထည့်သွင်းပေးပါရန်','region_id.required'=>'ဆိုင်နှင့် အလုပ်ဌာန လိပ်စာ ထည့်သွင်းပေးပါရန်',
                'district_id.required'=>'ခရိုင် ထည့်သွင်းပေးပါရန်','township_id.required' => 'မြို့နယ် ထည့်သွင်းပေးပါရန်','SignatureName.required'=>'စစ်ဆေးသူ အမည် ထည့်သွင်းပေးပါရန်',
                'SignatureRank.required' => 'စစ်ဆေးသူ ရာထူး ထည့်သွင်းပေးပါရန်',
                'MinimumSalary.required' => 'အနည်းဆုံးလစာ ထည့်သွင်းပေးပါရန်',
                'MaximumSalary.required' =>'အများဆုံးလစာ 
                ထည့်သွင်းပေးပါရန်'
                ,
                'OverTime.required'=> 'အချိန်ပိုလုပ်ကိုင်မှု ထည့်သွင်းပေးပါရန်',
                'OTPermit.required' => 'အချိန်ပိုလုပ်ကိုင်မှု ခွင့်ပြုချက် ထည့်သွင်းပေးပါရန်',
                'SSB.required' => 'လူမှုဖူလုံရေးဝင်ပြီး/မပြီး ထည့်သွင်းပေးပါရန်',
                'SafteySide.required' => 'လုပ်ငန်းခွင်ဘေးအန္တရာယ်ကင်းရှင်းရေး နှင့် ကျန်းမာရေးကော်မတီ ထည့်သွင်းပေးပါရန်',
                'ManagementExpert.required' => 'ကျွမ်းကျင်ပညာရှင် ကြီးကြပ်အုပ်ချူပ်မှု ထည့်သွင်းပေးပါရန်'

            ]);
            $ShopId = rand(1,100000);
            $request->request->add(['ShopId' => $ShopId,'totalMaleWorker' => $request->CitizenMenWorker, 'totalFemaleWorker' =>$request->CitizenWomenWorker]);
            $shop=Shop::create($request->all());
        if($shop)
        {    
           
                $user_id = Auth::user()->id;
                TempShopRegister::where('shopname',$request->shopname)->where('user_id', $user_id)->delete();
                //get activity log
                activity()->useLog(Auth::user()->name)
                                   ->causedBy(Auth::user()->id)
                                   ->performedOn($shop)
                                   ->withProperties($request->all())
                                   ->log('Create Shop.');

            $attach = new ShopDocumentAttachs;
                $attach->ShopId = $ShopId;
               //$destinationPath = 'C:/uploads';
                if ($request->hasFile('ownersentnotice')) {
                    $file = Input::file('ownersentnotice');
                    $filename = 'OwnerSentNotice'.'-'.date("m.d.y").'.'.Input::file('ownersentnotice')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->OwnerSentNotice= $filename;
                }if($request->hasFile('WorkingTimeNotice')){
                    $file = Input::file('WorkingTimeNotice');
                    $filename = 'WorkingTimeNotice'.'-'.date("m.d.y").'.'.Input::file('WorkingTimeNotice')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->WorkingTimeNotice= $filename;
                }
                if($request->hasFile('WorkStartInform')){
                    $file = Input::file('WorkStartInform');
                    $filename = 'WorkStartInform'.'-'.date("m.d.y").'.'.Input::file('WorkStartInform')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->WorkStartInform= $filename;
                }
                if($request->hasFile('ec_contract')){
                    $file = Input::file('ec_contract');
                    $filename = 'ec_contract'.'-'.date("m.d.y").'.'.Input::file('ec_contract')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->ec_contract= $filename;
                }
                if($request->hasFile('MICLicense')){
                    $file = Input::file('MICLicense');
                    $filename = 'MICLicense'.'-'.date("m.d.y").'.'.Input::file('MICLicense')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->MICLicense= $filename;
                }
                if($request->hasFile('CompanyNrc')){
                    $file = Input::file('CompanyNrc');
                    $filename = 'CompanyNrc'.'-'.date("m.d.y").'.'.Input::file('CompanyNrc')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->CompanyNrc= $filename;
                }
                if($request->hasFile('IndustryLicense')){
                    $file = Input::file('IndustryLicense');
                    $filename = 'IndustryLicense'.'-'.date("m.d.y").'.'.Input::file('IndustryLicense')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->IndustryLicense= $filename;
                }
                if($request->hasFile('Import_Export_License')){
                    $file = Input::file('Import_Export_License');
                    $filename = 'Import_Export_License'.'-'.date("m.d.y").'.'.Input::file('Import_Export_License')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->Import_Export_License= $filename;
                }
                if($request->hasFile('Municipal_License')){
                    $file = Input::file('Municipal_License');
                    $filename = 'Municipal_License'.'-'.date("m.d.y").'.'.Input::file('Municipal_License')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->Municipal_License= $filename;
                }
                if($request->hasFile('other_license1')){
                    $file = Input::file('other_license1');
                    $filename = 'other_license1'.'-'.date("m.d.y").'.'.Input::file('other_license1')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->other_license1= $filename;
                }
                if($request->hasFile('other_license2')){
                    $file = Input::file('other_license2');
                    $filename = 'other_license2'.'-'.date("m.d.y").'.'.Input::file('other_license2')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->other_license2= $filename;
                }
                if($request->hasFile('other_license3')){
                    $file = Input::file('other_license3');
                    $filename = 'other_license3'.'-'.date("m.d.y").'.'.Input::file('other_license3')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->other_license3= $filename;
                }
                if($request->hasFile('other_license4')){
                    $file = Input::file('other_license4');
                    $filename = 'other_license4'.'-'.date("m.d.y").'.'.Input::file('other_license4')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->other_license4= $filename;
                }
                if($request->hasFile('other_license5')){
                    $file = Input::file('other_license5');
                    $filename ='other_license5'.'-'.date("m.d.y").'.'.Input::file('other_license5')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->other_license5= $filename;
                }
                if($request->hasFile('other_license6')){
                    $file = Input::file('other_license6');
                    $filename ='other_license6'.'-'.date("m.d.y").'.'.Input::file('other_license6')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->other_license6= $filename;
                }
            $attach->save();
        }
        }
       
        
        return redirect('/shops')->with('success', 'ဆိုင် / အလုပ်ဌာန အသစ်ထည့်သွင်းပြီးပါပီ ...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        return view('shop.show',compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
         $section= EconomicSection::all();
         $division =EconomicDivision::where('id',$shop->division_id)->first();
         $group = EconomicGroup::where('id',$shop->group_id)->first();
         $class = EconomicClass::where('class_code',$shop->class_name)->first();
         $region = Region::all();
         $district= District::where('id',$shop->district_id)->value('district_name');
         $township= Township::where('id',$shop->township_id)->value('township_name');
         return view('shop.edit',compact('shop','region','district','township','section','division','group','class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Shop $shop)
    {
        $request->validate([
            'shopname' => 'required',
            'shopphone' => 'required',
        ]);
        
        // $shop->update($request->all());
        if($shop->update($request->all())){
// Activity log
            activity()->useLog(Auth::user()->name)
                                   ->causedBy(Auth::user()->id)
                                   ->performedOn($shop)
                                   ->withProperties($shop)
                                   ->log('Update Shop.');

            $attachs =ShopDocumentAttachs::where('ShopId',$shop->ShopId)->first();
               //$destinationPath = 'C:/uploads';
            if(!$attachs){
                $attach= new ShopDocumentAttachs;
                $attach->ShopId = $shop->ShopId;
                if ($request->hasFile('ownersentnotice')) {
                    $file = Input::file('ownersentnotice');
                    $filename = 'OwnerSentNotice'.'-'.date("m.d.y").'.'.Input::file('ownersentnotice')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->OwnerSentNotice= $filename;
                }if($request->hasFile('WorkingTimeNotice')){
                    $file = Input::file('WorkingTimeNotice');
                    $filename = 'WorkingTimeNotice'.'-'.date("m.d.y").'.'.Input::file('WorkingTimeNotice')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->WorkingTimeNotice= $filename;
                }
                if($request->hasFile('WorkStartInform')){
                    $file = Input::file('WorkStartInform');
                    $filename = 'WorkStartInform'.'-'.date("m.d.y").'.'.Input::file('WorkStartInform')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->WorkStartInform= $filename;
                }
                if($request->hasFile('ec_contract')){
                    $file = Input::file('ec_contract');
                    $filename = 'ec_contract'.'-'.date("m.d.y").'.'.Input::file('ec_contract')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->ec_contract= $filename;
                }
                if($request->hasFile('MICLicense')){
                    $file = Input::file('MICLicense');
                    $filename = 'MICLicense'.'-'.date("m.d.y").'.'.Input::file('MICLicense')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->MICLicense= $filename;
                }
                if($request->hasFile('CompanyNrc')){
                    $file = Input::file('CompanyNrc');
                    $filename = 'CompanyNrc'.'-'.date("m.d.y").'.'.Input::file('CompanyNrc')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->CompanyNrc= $filename;
                }
                if($request->hasFile('IndustryLicense')){
                    $file = Input::file('IndustryLicense');
                    $filename = 'IndustryLicense'.'-'.date("m.d.y").'.'.Input::file('IndustryLicense')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->IndustryLicense= $filename;
                }
                if($request->hasFile('Import_Export_License')){
                    $file = Input::file('Import_Export_License');
                    $filename = 'Import_Export_License'.'-'.date("m.d.y").'.'.Input::file('Import_Export_License')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->Import_Export_License= $filename;
                }
                if($request->hasFile('Municipal_License')){
                    $file = Input::file('Municipal_License');
                    $filename = 'Municipal_License'.'-'.date("m.d.y").'.'.Input::file('Municipal_License')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->Municipal_License= $filename;
                }
                if($request->hasFile('other_license1')){
                    $file = Input::file('other_license1');
                    $filename = 'other_license1'.'-'.date("m.d.y").'.'.Input::file('other_license1')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->other_license1= $filename;
                }
                if($request->hasFile('other_license2')){
                    $file = Input::file('other_license2');
                    $filename = 'other_license2'.'-'.date("m.d.y").'.'.Input::file('other_license2')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->other_license2= $filename;
                }
                if($request->hasFile('other_license3')){
                    $file = Input::file('other_license3');
                    $filename = 'other_license3'.'-'.date("m.d.y").'.'.Input::file('other_license3')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->other_license3= $filename;
                }
                if($request->hasFile('other_license4')){
                    $file = Input::file('other_license4');
                    $filename = 'other_license4'.'-'.date("m.d.y").'.'.Input::file('other_license4')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->other_license4= $filename;
                }
                if($request->hasFile('other_license5')){
                    $file = Input::file('other_license5');
                    $filename ='other_license5'.'-'.date("m.d.y").'.'.Input::file('other_license5')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->other_license5= $filename;
                }
                if($request->hasFile('other_license6')){
                    $file = Input::file('other_license6');
                    $filename ='other_license6'.'-'.date("m.d.y").'.'.Input::file('other_license6')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attach->other_license6= $filename;
                }
            $attach->save();
            }else{
                if ($request->hasFile('ownersentnotice')) {
                    $file = Input::file('ownersentnotice');
                    $filename = 'OwnerSentNotice'.'-'.date("m.d.y").'.'.Input::file('ownersentnotice')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->OwnerSentNotice= $filename;
                }if($request->hasFile('WorkingTimeNotice')){
                    $file = Input::file('WorkingTimeNotice');
                    $filename = 'WorkingTimeNotice'.'-'.date("m.d.y").'.'.Input::file('WorkingTimeNotice')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->WorkingTimeNotice= $filename;
                }
                if($request->hasFile('WorkStartInform')){
                    $file = Input::file('WorkStartInform');
                    $filename = 'WorkStartInform'.'-'.date("m.d.y").'.'.Input::file('WorkStartInform')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->WorkStartInform= $filename;
                }
                if($request->hasFile('ec_contract')){
                    $file = Input::file('ec_contract');
                    $filename = 'ec_contract'.'-'.date("m.d.y").'.'.Input::file('ec_contract')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->ec_contract= $filename;
                }
                if($request->hasFile('MICLicense')){
                    $file = Input::file('MICLicense');
                    $filename = 'MICLicense'.'-'.date("m.d.y").'.'.Input::file('MICLicense')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->MICLicense= $filename;
                }
                if($request->hasFile('CompanyNrc')){
                    $file = Input::file('CompanyNrc');
                    $filename = 'CompanyNrc'.'-'.date("m.d.y").'.'.Input::file('CompanyNrc')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->CompanyNrc= $filename;
                }
                if($request->hasFile('IndustryLicense')){
                    $file = Input::file('IndustryLicense');
                    $filename = 'IndustryLicense'.'-'.date("m.d.y").'.'.Input::file('IndustryLicense')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->IndustryLicense= $filename;
                }
                if($request->hasFile('Import_Export_License')){
                    $file = Input::file('Import_Export_License');
                    $filename = 'Import_Export_License'.'-'.date("m.d.y").'.'.Input::file('Import_Export_License')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->Import_Export_License= $filename;
                }
                if($request->hasFile('Municipal_License')){
                    $file = Input::file('Municipal_License');
                    $filename = 'Municipal_License'.'-'.date("m.d.y").'.'.Input::file('Municipal_License')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->Municipal_License= $filename;
                }
                if($request->hasFile('other_license1')){
                    $file = Input::file('other_license1');
                    $filename = 'other_license1'.'-'.date("m.d.y").'.'.Input::file('other_license1')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->other_license1= $filename;
                }
                if($request->hasFile('other_license2')){
                    $file = Input::file('other_license2');
                    $filename = 'other_license2'.'-'.date("m.d.y").'.'.Input::file('other_license2')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->other_license2= $filename;
                }
                if($request->hasFile('other_license3')){
                    $file = Input::file('other_license3');
                    $filename = 'other_license3'.'-'.date("m.d.y").'.'.Input::file('other_license3')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->other_license3= $filename;
                }
                if($request->hasFile('other_license4')){
                    $file = Input::file('other_license4');
                    $filename = 'other_license4'.'-'.date("m.d.y").'.'.Input::file('other_license4')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->other_license4= $filename;
                }
                if($request->hasFile('other_license5')){
                    $file = Input::file('other_license5');
                    $filename ='other_license5'.'-'.date("m.d.y").'.'.Input::file('other_license5')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->other_license5= $filename;
                }
                if($request->hasFile('other_license6')){
                    $file = Input::file('other_license6');
                    $filename ='other_license6'.'-'.date("m.d.y").'.'.Input::file('other_license6')->getClientOriginalExtension();
                    // Storage::disk('public')->put($filename, File::get($file));
                    Storage::disk('public')->putFileAs('Shop/'.$request->shopname, $file, $filename);
                    $attachs->other_license6= $filename;
                }
            $attachs->update();
                
        }
        return redirect()->route('shops.index')
                        ->with('success','ဆိုင် / အလုပ်ဌာန ပြင်ဆင်ခြင်း အောင်မြင်ပါသည် ...');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
       if($shop->delete()){
             // Activity log
            activity()->useLog(Auth::user()->name)
                                   ->causedBy(Auth::user()->id)
                                   ->performedOn($shop)
                                   ->withProperties($shop)
                                   ->log('Delete Shop.');
       }

       
        return redirect('/shops')->with('success', ' delete Shop succefully');
    }


    public function CloseShop($id){
        $shop = Shop::where('ShopId',$id)->first();
        $township = Township::where('id',$shop->township_id)->value('township_name');
        $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
        $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
        $totalmen=str_replace($standard_manysets,$standard_numsets,$shop->totalMaleWorker);
        $totalwomen=str_replace($standard_manysets,$standard_numsets,$shop->totalFemaleWorker);
        $total_eng= $totalmen+$totalwomen;
        $total = str_replace($standard_numsets,$standard_manysets,$total_eng);
        // dd($total); 
       // $total=$factory->MenWorker + $factory->WomenWorker + $factory->DailyMenWorker + $factory->DailyWomenWorker + $factory->PieceMenWorker + $factory->PieceWomenWorker; 
        return view('shop.close',compact('shop','total','township'));
    }

    public function CloseShopSave(Request $request){
        // dd($request->ShopAddress);
        $request->validate([
            'NoticeDate' => 'required',
            'CloseDate' => 'required',
        ],[
            'NoticeDate.required' => 'အကြောင်းကြားပေးပို့သည့် ရက်စွဲ  ထည့်သွင်းပေးပါရန်',
            'CloseDate.required' => 'ပိတ်သိမ်းမည့် ရက်စွဲ ထည့်သွင်းပေးပါရန်'
        ]);

        $shop=Shop::where('ShopId',$request->shop_id)->first();
        $shop->status = 1;
        $shop->update();
        $shopclose=ShopClose::create($request->all());
        if($shopclose){
            activity()->useLog(Auth::user()->name)
                                   ->causedBy(Auth::user()->id)
                                   ->performedOn($shopclose)
                                   ->withProperties($request->all())
                                   ->log('Close Shop.');
        }
        return redirect()->route('shops.index')->with('success', 'ဆိုင် / အလုပ်ဌာန ပိတ်သိမ်းခြင်း လုပ်ဆောင်မှု အောင်မြင်ပါသည်...');
    }

    public function download($id){
        // dd($id);
        $shop = Shop::where('id',$id)->first();

        require_once '../vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();
        $view = \View::make('shop.download',compact('shop'));
        $pdfname=$shop->shopname.'-'.$shop->create_date.mt_rand().'.pdf';
        $html_content = $view->render();
        $mpdf->WriteHTML($html_content);
        return $mpdf->Output();
        // dd($shop);
    }

}
