<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AffectedInformation;
use App\Factory;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use File;
use App\AffectedType;
use App\AffectedBody;
use App\ImpactType;
use App\AffectedBodyPiece;
use App\ImpactTypeDes;
use Auth;
class AffectedInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return view('affectedInformation.AffectedIndex');
        $accessibletownship =(Auth::user()->accessibletwonship);
        $accessibletownships = explode(',', $accessibletownship);

        $affected = AffectedInformation::whereIn('township_id',$accessibletownships)->latest()->paginate(10);
        return view('affectedInformation.AffectedIndex',compact('affected'))
                ->with('i', (request()->input('page', 1) - 1) * 100);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $affected_type = AffectedType::all();
        $affected_body = AffectedBody::all();
        $impact_type = ImpactType::all();
        // dd($affected_type);
        return view('affectedInformation.AffectedInformation',compact('affected_type','affected_body','impact_type'));
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
        if($request->Type=='1'){
            $ID = $request->Factory_IDno;
            $Name = $request->Factory_Name;
            $Address = $request->Factory_Address;
            $OwnerName = $request->OwnerName;
            $Type = $request->Factory_Type;
            $Phno = $request->Factory_Phno;
        }else{
            $ID=$request->Shop_IDno;
            $Name = $request->Shop_Name;
            $Address = $request->Shop_Address;
            $OwnerName = $request->ShopOwnerName;
            $Type = $request->Shop_Type;
            $Phno = $request->Shop_Phno;
            
        }     
        
        $request->request->add(['FactoryID'=>$ID,'FactoryName'=>$Name,'FactoryAddress'=>$Address,'OwnerName'=>$OwnerName,'FactoryPhno'=>$Phno,'FactoryType'=>$Type]);
        // dd($request->all());
        $request->validate([
            'Type'=>'required',
            'FactoryName' => 'required',
            'empName' => 'required',
            'empAge' => 'required',
            'empGender' => 'required',
            'empLvl' => 'required',
            'empLama' => 'required',
            'empPhno' => 'required',
            'accDay' => 'required',
            'accTime' => 'required',
            'accPlace' => 'required',
            'accType' => 'required',
            'accDetail' => 'required',
            'accLeave' => 'required',
            'painType' => 'required',
            'painPart' => 'required',
        ],[
            'FactoryName.required' => 'စက်ရုံ၊ အလုပ်ရုံ (သို့) ဆိုင်အလုပ်ဌာနအမည် ပြန်ရိုက်ရှာပေးပါရန်။',
            'empName.required' => 'ထိခိုက်သူ အမည် ထည့်သွင်းပေးပါရန်',
            'empAge.required' => 'ထိခိုက်သူ အသက် နှင့် လုပ်သက် ထည့်သွင်းပေးပါရန်',
            'empGender.required' => 'ထိခိုက်သူ Gender ထည့်သွင်းပေးပါရန်',
            'empLvl.required' => 'ထိခိုက်သူ ရာထူး နှင့် တာ၀န် ထည့်သွင်းပေးပါရန်',
            'empLama.required' => 'လမဖ အကျုံး၀င်မှု ရှိ/မရှိ ထည့်သွင်းပေးပါရန်',
            'empPhno.required' => 'ထိခိုက်သူ ဖုန်းနံပါတ် ထည့်သွင်းပေးပါရန်',
            'accDay.required' => 'ထိခိုက်မှုဖြစ်ပွားသည့်နေ့ရက် ထည့်သွင်းပေးပါရန်',
            'accTime.required' => 'ထိခိုက်မှုဖြစ်ပွားသည့် အချိန် ထည့်သွင်းပေးပါရန်',
            'accPlace.required' => 'ထိခိုက်မှုဖြစ်ပွားသည့် နေရာ ထည့်သွင်းပေးပါရန်',
            'accType.required' => 'ထိခိုက်မှု အမျိုးအစား ထည့်သွင်းပေးပါရန်',
            'accDetail.required' => 'ထိခိုက်မှု ဖြစ်စဉ်အကျဉ်း ထည့်သွင်းပေးပါရန်',
            'accLeave.required' => 'ထိခိုက်သူ ခန့်မှန်းအလုပ်ပျက်ရက် ထည့်သွင်းပေးပါရန်',
            'painType.required' => 'ထိခိုက်ဒဏ်ရာ အမျိုးအစား ထည့်သွင်းပေးပါရန်',
            'painPart.required' => 'ထိခိုက်ဒဏ်ရာ ရရှိသည့်အစိတ်အပိုင်း ထည့်သွင်းပေးပါရန်'

        ]);
                
         if(AffectedInformation::create($request->all())){
            // dd($request->all());
           

                    $affected = AffectedInformation::where('FactoryName',$request->FactoryName)->latest()->first();
//user logs 
                    activity()->useLog(Auth::user()->name)
                    ->causedBy(Auth::user()->id)
                    ->performedOn($affected)
                    ->withProperties($request->all())
                    ->log('လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ ထည့်သွင်းခြင်း');
/**  */
                         if ($request->hasFile('affectedInform1')) {
                             $file = Input::file('affectedInform1');
                             $filename = 'affectedInform1'.'-'.date("m.d.y").'.'.Input::file('affectedInform1')->getClientOriginalExtension();
                              // Storage::disk('local')->put($filename, File::get($file));
                             Storage::disk('public')->putFileAs('AffectedInformation/'.$request->FactoryName,$file, $filename);
                             $request->request->add(['affectedInform1' => $filename]);
                          }
                         if($request->hasFile('affectedInform2')){
                             $file = Input::file('affectedInform2');
                             $filename = 'affectedInform2'.'-'.date("m.d.y").'.'.Input::file('affectedInform2')->getClientOriginalExtension();
                             // Storage::disk('local')->put($filename, File::get($file));
                             Storage::disk('public')->putFileAs('AffectedInformation/'.$request->FactoryName,$file, $filename);
                             $request->request->add(['affectedInform2' => $filename]);
                         }
                         if($request->hasFile('affectedInform3')){
                             $file = Input::file('affectedInform3');
                             $filename = 'affectedInform3'.'-'.date("m.d.y").'.'.Input::file('affectedInform3')->getClientOriginalExtension();
                             // Storage::disk('local')->put($filename, File::get($file));
                             Storage::disk('public')->putFileAs('AffectedInformation/'.$request->FactoryName, $file, $filename);
                             $request->request->add(['affectedInform3' => $filename]);
                         }
                         if($request->hasFile('affectedInform4')){
                             $file = Input::file('affectedInform4');
                             $filename = 'affectedInform4'.'-'.date("m.d.y").'.'.Input::file('affectedInform4')->getClientOriginalExtension();
                             // Storage::disk('public')->put($filename, File::get($file));
                             Storage::disk('public')->putFileAs('AffectedInformation/'.$request->FactoryName, $file, $filename);
                             $request->request->add(['affectedInform4' => $filename]);
                         }
                        if($request->hasFile('affectedInform5')){
                             $file = Input::file('affectedInform5');
                             $filename = 'affectedInform5'.'-'.date("m.d.y").'.'.Input::file('affectedInform5')->getClientOriginalExtension();
                             // Storage::disk('public')->put($filename, File::get($file));
                             Storage::disk('public')->putFileAs('AffectedInformation/'.$request->FactoryName, $file, $filename);
                             $request->request->add(['affectedInform5' => $filename]);
                         }
                         $affected->save();
                        
                     }
                    
                      // AffectedInformation::create($request->all());
                        return redirect()->route('AffectedIndex.index')->with('success', 'လုပ်ငန်းခွင် ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ စာရင်းသွင်းပီးပါပီ။');
        }

    /**
     * Display the specified resource.
     *use affected information
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        //dd($id);
        $affected= AffectedInformation::where('id',$id)->first();
        if($affected){
            $affected_type = AffectedType::where('affected_code',$affected->painType)->value('affected_name');
            $affected_body = AffectedBody::where('body_code',$affected->painPart)->value('body_name');
            $impact_type = ImpactType::where('impact_no',$affected->painCase)->value('impact_name');
            $painpiece =AffectedBodyPiece::where('peice_no',$affected->painPiece)->value('peice_name');
            $impact_type_des = ImpactTypeDes::where('case_des_no',$affected->painCaseDes)->value('case_des_name');
        }
        return view('affectedInformation.show',compact('affected','affected_type','affected_body','painpiece','impact_type','impact_type_des'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $affected= AffectedInformation::where('id',$id)->first();

        $affected_type = AffectedType::all();
        $affected_body = AffectedBody::all();
        $impact_type = ImpactType::all();
        $painpiece =AffectedBodyPiece::where('peice_no',$affected->painPiece)->first();
        $impact_type_des = ImpactTypeDes::where('case_des_no',$affected->painCaseDes)->first();
     //dd($affected);
        return view('affectedInformation.edit',compact('affected','affected_type','affected_body','impact_type','painpiece','impact_type_des'));
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
        // dd($request->all());
        $affected= AffectedInformation::where('id',$id)->first();
        if($request->Type=='1'){
           // dd('hi');
            $ID = $request->Factory_IDno;
            $Name = $request->Factory_Name;
            $Address = $request->Factory_Address;
            $OwnerName = $request->OwnerName;
            $Type = $request->Factory_Type;
            $Phno = $request->Factory_Phno;
        }else{
            $ID = $request->Shop_IDno;
            $Name = $request->Shop_Name;
            $Address = $request->Shop_Address;
            $OwnerName = $request->ShopOwnerName;
            $Type = $request->Shop_Type;
            $Phno = $request->Shop_Phno;
            
        } 
         $request->request->add(['FactoryID'=>$ID,'FactoryName'=>$Name,'FactoryAddress'=>$Address,'OwnerName'=>$OwnerName,'FactoryPhno'=>$Phno,'FactoryType'=>$Type,]);    
         //$affected= AffectedInformation::where('id',$id)->first();
         if($affected->update($request->all())){

            //user logs 
            activity()->useLog(Auth::user()->name)
            ->causedBy(Auth::user()->id)
            ->performedOn($affected)
            ->withProperties($request->all())
            ->log('လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ ပြင်ဆင်ခြင်း');
/**  */

             if ($request->hasFile('affectedInform1')) {
                 $file = Input::file('affectedInform1');
                 $filename = 'affectedInform1'.'-'.date("m.d.y").'.'.Input::file('affectedInform1')->getClientOriginalExtension();
                 //Storage::disk('public')->put($filename, File::get($file));
                 Storage::disk('public')->putFileAs('AffectedInformation/'.$request->FactoryName,$file, $filename);
                $affected->affectedInform1 = $filename;
             }
             if($request->hasFile('affectedInform2')){
                 $file = Input::file('affectedInform2');
                 $filename = 'affectedInform2'.'-'.date("m.d.y").'.'.Input::file('affectedInform2')->getClientOriginalExtension();
                 // Storage::disk('public')->put($filename, File::get($file));
                 Storage::disk('public')->putFileAs('AffectedInformation/'.$request->FactoryName,$file, $filename);
                 $affected->affectedInform2 = $filename;
            }
             if($request->hasFile('affectedInform3')){
                 $file = Input::file('affectedInform3');
                 $filename = 'affectedInform3'.'-'.date("m.d.y").'.'.Input::file('affectedInform3')->getClientOriginalExtension();
                 // Storage::disk('public')->put($filename, File::get($file));
                 Storage::disk('public')->putFileAs('AffectedInformation/'.$request->FactoryName, $file, $filename);
                 $affected->affectedInform3 = $filename;
             }
            if($request->hasFile('affectedInform4')){
                 $file = Input::file('affectedInform4');
                 $filename = 'affectedInform4'.'-'.date("m.d.y").'.'.Input::file('affectedInform4')->getClientOriginalExtension();
                 // Storage::disk('public')->put($filename, File::get($file));
                 Storage::disk('public')->putFileAs('AffectedInformation/'.$request->FactoryName, $file, $filename);
                 $affected->affectedInform4 = $filename;
             }
             if($request->hasFile('affectedInform5')){
                 $file = Input::file('affectedInform5');
                 $filename = 'affectedInform5'.'-'.date("m.d.y").'.'.Input::file('affectedInform5')->getClientOriginalExtension();
                 // Storage::disk('public')->put($filename, File::get($file));
                 Storage::disk('public')->putFileAs('AffectedInformation/'.$request->FactoryName, $file, $filename);
                 $affected->affectedInform5 = $filename;
             } 
           
         }
       // $affected->update();
        $affected->update($request->all());
        return redirect()->route('AffectedIndex.index')
                        ->with('success','လုပ်ငန်းခွင် ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ ပြင်ဆင်၍စာရင်းသွင်းပီးပါပီ။');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $affected= AffectedInformation::where('id',$id)->first();
        $logs = $affected;
        $affected->delete();

        //user logs 
        activity()->useLog(Auth::user()->name)
        ->causedBy(Auth::user()->id)
        ->performedOn($logs)
        ->withProperties($logs)
        ->log('လုပ်ငန်းခွင်ထိခိုက်မှုအကြောင်းကြားခြင်းပုံစံ ဖျက်ခြင်းခြင်း');
/**  */

        return redirect('/AffectedIndex')->with('success', ' အောင်မြင်စွာဖျက်ပြီးပါပြီ။'); 
    }
}
