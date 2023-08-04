<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\FactoryInspectionImpact;
use App\CheckOutPeople;
use App\InterviewPeople;
use App\TempFactoryInspectionImpact;
use App\TempFactoryInspectionInform;
use App\FactoryInspectionInform;
use App\Region;
use App\Factory;
use App\District;
use App\Township;
use App\Industrialzone;
use App\EconomicClass;
use App\AffectedInformation;
use App\Document;
use App\User;
use App\Shop;
use App\EconomicSection;    
class FactoryInspectionImpactController extends Controller
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
    public function create($id,$factoryid,$type)
    {
        // dd($factoryid);
         $region = Region::all();
         $affected_information = AffectedInformation::where('id',$id)->first();
        //  if type = 1 factory , if type=2 Shop
         if($type==1){
             //for factory get data
            $factory = Factory::where('FactoryId',$factoryid)->first();
            $zone = Industrialzone::where('id',$factory->zone_id)->value('industrialzone_name');
            //  dd($factory);
         }else{
             //for shop get data
            $factory = Shop::where('ShopId',$factoryid)->first();
            //  dd($factory);
            // $worktype = EconomicClass::where('class_code',$factory->class_name)->value('class_name');
            // $district = District::where('id',$factory->district_id)->value('district_name');
            // $township= Township::where('id',$factory->township_id)->value('township_name');
         }

         //get data for section to select

        $section = EconomicSection::where('id',$factory->section_id)->value('Section');

        $worktype = EconomicClass::where('class_code',$factory->class_name)->value('class_name');
        $district = District::where('id',$factory->district_id)->value('district_name');
        $township= Township::where('id',$factory->township_id)->value('township_name');
         
         if($type==1){
            return view('adminpanel.impactworkplace',compact('region','id','factory','worktype','district','township','zone','type','section','affected_information'));
         }else{
            return view('adminpanel.impactworkplace',compact('region','id','factory','worktype','district','township','type','section','affected_information'));
         }
         

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
            ;
            $request->request->add(['user_id'=> $user_id]);
            $tempimpact = TempFactoryInspectionImpact::where('workname',$request->workname)->first();
            if($tempimpact){
                $tempimpact->update($request->all());
                /**
                 * user logs
                 */
                activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($tempimpact)
                           ->withProperties($tempimpact)
                           ->log('လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ ယာယီသိမ်းဆည်းခြင်း');
                /** 
                 * 
                */
                // Session::put('TempFactoryInspectionImpact', $request->workname);
            }else{
                $temp=TempFactoryInspectionImpact::create($request->all());

                /**
                 * user logs
                 */
                activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($temp)
                           ->withProperties($temp)
                           ->log('လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ ယာယီသိမ်းဆည်းခြင်း');
                /** 
                 * 
                */

                // Session::put('TempFactoryInspectionImpact', $request->workname);
            }
            return redirect('/impactworkerinform')->with('success', 'ယာယီသိမ်းဆည်းပြီးပါပီ');
        }else{

            $request->validate([
                'workname' => 'required',
                'typeofwork' => 'required',
                'ownername' => 'required',
                'managername' => 'required',
                'contactphone' => 'required',
                'inspector' => 'required',
                'region_id' => 'required',
                'district_id'=> 'required',
                'township_id' => 'required',
                'checkoutpeople.*.name' => 'required',
                'addmore.*.name' => 'required',
                'addmore.*.position' => 'required',
                'addmore.*.contactphone' => 'required',
            ],[
                'workname.required' => 'လုပ်ငန်းအမည် ထည့်သွင်းပေးပါရန်',
                'typeofwork.required' => 'လုပ်ငန်းအမျိုးအစား ထည့်သွင်းပေးပါရန်',
                'ownername.required' => 'ပိုင်ရှင်အမည် ထည့်သွင်းပေးပါရန်',
                'managername.required' => 'မန်နေဂျာအမည် ထည့်သွင်းပေးပါရန်',
                'contactphone.required' => 'ဆက်သွယ်ရမည့် ဖုန်းနံပါတ် ထည့်သွင်းပေးပါရန်',
                'region_id.required' => 'တိုင်းဒေသကြီးအမည် ထည့်သွင်းပေးပါရန်',
                'district_id.required' => 'ခရိုင်အမည် ထည့်သွင်းပေးပါရန်',
                'inspector.required' => 'စစ်ဆေးရေးအရာရှိအမည် ထည့်သွင်းပေးပါရန်',
                'township_id.required' => 'မြို့နယ်အမည် ထည့်သွင်းပေးပါရန်',
                'checkoutpeople.*.name.required' => 'စစ်ဆေးစဉ် လိုက်ပါခဲ့သူများ ထည့်သွင်းပေးပါရန်',
                'addmore.*.name.required' => 'တွေ့ဆုံမေးမြန်းခဲ့သူများ အမည် ထည့်သွင်းပေးပါရန်',
                'addmore.*.position.required' => 'တွေ့ဆုံမေးမြန်းခဲ့သူများ ရာထူး ထည့်သွင်းပေးပါရန်',
                'addmore.*.contactphone.required' => 'တွေ့ဆုံမေးမြန်းခဲ့သူများ ဖုန်းနံပါတ်	ထည့်သွင်းပေးပါရန်',
            ]);
            // $request->request->add(['district_id'=>1,'township_id'=>2]);    
            $factory_impact=FactoryInspectionImpact::create($request->all()); 
            if($factory_impact){

                /**
                 * user logs
                 */
                activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($factory_impact)
                           ->withProperties($factory_impact)
                           ->log('လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ ထည့်သွင်းခြင်း');
                /** 
                 * 
                */

                $factoryinspectionimpact_id=FactoryInspectionImpact::where('affected_inform_id',$request->affected_inform_id)->where('workname',$request->workname)->value('id');
                // dd($factoryinspectionimpact_id);
                //for စစ္ေဆးစဥ္ လုိက္ပါခဲ့သူမ်ား
                foreach ($request->checkoutpeople as $key => $value) {
                    $checkoutpeople=array_add($value, 'factoryinspectionimpact_id', $factoryinspectionimpact_id);
                    // dd($checkoutpeople);
                    CheckOutPeople::create($checkoutpeople);
                }
                //for တွေ့ဆုံမေးမြန်းခဲ့သူများ အမည်၊ရာထူးနှင့် ဖုန်းနံပါတ်
                foreach ($request->addmore as $key => $value) {
                    $interviewpeople=array_add($value, 'factoryinspectionimpact_id', $factoryinspectionimpact_id);
                    // dd($interviewpeople);
                    InterviewPeople::create($interviewpeople);
                }

                $user_id = Auth::user()->id;
                TempFactoryInspectionImpact::where('workname',$request->workname)->where('user_id', $user_id)->where('affected_inform_id',$request->affected_inform_id)->delete();

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
                
                 $factory_impact=FactoryInspectionImpact::where('affected_inform_id',$request->affected_inform_id)->first();
                //  dd($factory_impact);
                if($factory_impact){
                    $checkoutpeople = CheckOutPeople::where('factoryinspectionimpact_id',$factory_impact->id)->get();
                    $interviewpeople = InterviewPeople::where('factoryinspectionimpact_id',$factory_impact->id)->get();
                    require_once '../vendor/autoload.php';
                    $mpdf = new \Mpdf\Mpdf();
                    $view = \View::make('pdftemplate.inspectionImpact',compact('factory_impact','checkoutpeople','interviewpeople'));
                    $html_content = $view->render();
                    $pdfname="Impact".$factory_impact->create_date.mt_rand().".pdf";
                    $mpdf->WriteHTML($html_content);
                    $mpdf->Output(storage_path('app/public/inspection/'.$pdfname),'F');
                    $document=new Document();
                    $document->Factory_Type = 1;
                    $document->FactoryId=AffectedInformation::where('id',$request->affected_inform_id)->value('FactoryID');
                    $document->FromDepartment=$department;
                    $document->create_date=$factory_impact->created_at;
                    $document->entrydate=$factory_impact->created_at;
                    $document->documentTitle='လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ';
                    $document->documenttype	='သာမန်';
                    $document->creator=$user_id;
                    $document->documentfileName=$pdfname;
                    $document->check_id = $request->affected_inform_id;
                    $document->save();
                }        
            }      
            
            return redirect('/AffectedIndex')->with('success', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ ထည့်သွင်းပီးပါပီ');
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
        $impact=FactoryInspectionImpact::where('affected_inform_id',$id)->first();

        $region = Region::all();
        $affected_information = AffectedInformation::where('id',$id)->first();
        // dd($affected_information->FactoryID);
       //  if type = 1 factory , if type=2 Shop
        if($affected_information->Type==1){
            //for factory get data
           $factory = Factory::where('FactoryId',$affected_information->FactoryID)->first();
           $zone = Industrialzone::where('id',$factory->zone_id)->value('industrialzone_name');
           $type=1;
           //  dd($factory);
        }else{
            //for shop get data
           $factory = Shop::where('ShopId',$affected_information->FactoryID)->first();
           $zone='';
           $type=2;
        }

        //get data for section to select

       $section = EconomicSection::where('id',$factory->section_id)->value('Section');
       $worktype = EconomicClass::where('class_code',$factory->class_name)->value('class_name');
       $district = District::where('id',$factory->district_id)->value('district_name');
       $township= Township::where('id',$factory->township_id)->value('township_name');

       return view('adminpanel.edit_impactworkplace',compact('type','region','id','factory','worktype','district','township','zone','section','affected_information','impact'));

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
        $factory_impact = FactoryInspectionImpact::where('affected_inform_id',$id)->first();
        $factory_impact->update($request->all());

        /**
                 * user logs
                 */
                activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($factory_impact)
                           ->withProperties($factory_impact)
                           ->log('လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ ပြင်ဆင်ခြင်း');
                /** 
                 * 
                */

        // dd($factory_impact);
         $file_name=Document::where('Factory_Type',1)->where('check_id',$id)->value('documentfileName');
                     $checkoutpeople = CheckOutPeople::where('factoryinspectionimpact_id',$factory_impact->id)->get();
                     $interviewpeople = InterviewPeople::where('factoryinspectionimpact_id',$factory_impact->id)->get();
                    require_once '../vendor/autoload.php';
                    $mpdf = new \Mpdf\Mpdf();
                    $view = \View::make('pdftemplate.inspectionImpact',compact('factory_impact','checkoutpeople','interviewpeople'));
                    $html_content = $view->render();
                    $mpdf->WriteHTML($html_content);
                    $mpdf->Output(storage_path('app/public/inspection/'.$file_name),'F');
        return redirect('/AffectedIndex')->with('success', 'လုပ်ငန်းခွင်ထိခိုက်မှု စုံစမ်းစစ်ဆေးချက်ပုံစံ ပြင်ဆင်ခြင်း အောင်မြင်ပါသည် ');
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
