<?php

namespace App\Http\Controllers;

use App\Seminar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Factory;
use App\Shop;
use Auth;
use App\Township;
use App\District;


class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $district=District::all();
        return view('seminar.seminarform',compact('district'));
    }
    public function serachfactoryname(Request $request)
    {
        $accessibletownship =(Auth::user()->accessibletwonship);
        $accessibletownships = explode(',', $accessibletownship);

        if($request->get('query'))
        {
              $query = $request->get('query');
              $factortype=$request->get('factorytype');
              if($factortype==1){
                $data=Factory::whereIn('township_id',$accessibletownships)->where('FactoryName','LIKE','%'.$query.'%')->get();
                 if(!$data->isEmpty()){
                    $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                    foreach($data as $row)
                    {
                    $output .= '
                    <li><a href="#">'.$row->FactoryName.'</a></li>
                    ';
                    }
                    $output .= '</ul>';
                 }else{
                    $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                    $output .= '
                    <li><a href="#">'.'ရှာနေသော စက်ရုံမရှိပါ ... '.'</a></li>
                    ';
                   $output .= '</ul>';
                 }
                 
             
              }else{
                $data=Shop::whereIn('township_id',$accessibletownships)->where('shopname','LIKE','%'.$query.'%')->get();
                if(!$data->isEmpty()){
                    $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                    foreach($data as $row)
                    {
                    $output .= '
                    <li><a href="#">'.$row->shopname.'</a></li>
                    ';
                    }
                    $output .= '</ul>';
                }else{
                    $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                    $output .= '
                    <li><a href="#">'.'ရှာနေသော ဆိုင် / အလုပ်ဌာန မရှိပါ ... '.'</a></li>
                    ';
                   $output .= '</ul>';
                }
 
              }

           echo $output;   
          
       }
    }
    /** For To retrieve Data via search **/
    public function factorydata(Request $request){
         $name = $request->name;
         $factorytype=$request->factorytype;
         if($factorytype==1){
           $factory = Factory::where('FactoryName',$name)->first(); 
         }
         
         else{
            $factory=Shop::where('shopname',$name)->first();
         }
         $factory['factorytype']=$factorytype;
         return $factory;
    }

    public function create(Request $request)
    {
        //for validation
        // dd($request->all());
        $this->validate($request,['seminarleader' =>'required','seminarleaderrank' =>'required','splace'=>'required','township_id'=>'required','men'=>'required','women'=>'required','district_id'=>'required','date'=>'required'],
            ['seminarleader.required'=>'ဦးဆောင်ဆွေးနွေးသူ၏ အမည်ကိုထည့်သွင်းပေးပါရန်',
             'seminarleaderrank.required'=>'ဦးဆောင်ဆွေးနွေးသူ၏ ရာထူးကိုထည့်သွင်းပေးပါရန်',
              'splace.required'=>'ကျင်းပသည့်နေရာကိုထည့်သွင်းပေးပါရန်',
              'township_id.required'=>'ကျင်းပသည့်မြို့နယ်ကို ထည့်သွင်းပေးပါရန်',
              'district_id.required'=>'ကျင်းပသည့်ခရိုင်ကို ထည့်သွင်းပေးပါရန်',
              'men.required'=>'ဆွေးနွေးပွဲတက်ရောက်သူ ကျားဦးရေ ထည့်သွင်းပေးပါရန်',
              'women.required'=>'ဆွေးနွေးပွဲတက်ရောက်သူ မဦးရေထည့်သွင်းပေးပါရန်',
              'date.requird'=>'ကျင်းပသည့်ရက်စွဲကိုထည့်သွင်းပေးပါရန်',
             ]);
             $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
             $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
             $emen=str_replace($standard_manysets,$standard_numsets,$request->get('men'));
             $ewomen=str_replace($standard_manysets,$standard_numsets,$request->get('women'));
             
            $seminar=Seminar::create([
                'ftype'=>$request->get('factorytype') ,
                's_leader'=>$request->get('seminarleader')  ,
                's_leaderrank'=>$request->get('seminarleaderrank')  ,
                's_contributor1'=>$request->get('contributor1')  ,
                's_contributor1rank'=>$request->get('contributor1rank')  ,
                's_contributor2'=>$request->get('contributor2')  ,
                's_contributor2rank'=>$request->get('contributor2rank') ,
                's_contributor3'=>$request->get('contributor3')  ,
                's_contributor3rank'=>$request->get('contributor3rank')  ,
                's_place'=>$request->get('splace')  ,
                'township_id'=>$request->get('township_id')  ,
                'district_id'=>$request->get('district_id'),
                'factory_id'=>$request->get('factoryid')  ,
                'factoryname'=>$request->get('FactoryName')  ,
                'trainingclass'=> $request->get('trainingclass') ,
                'emen'=>$emen ,
                'ewomen'=>$ewomen ,
                'mmen'=>$request->get('men')  ,
                'mwomen'=>$request->get('women')  ,
                's_times'=>$request->get('stimes') ,
                'user_id'=>Auth::user()->id ,
                'helddate'=>$request->get('date'),
                

             ]);

            if($seminar){
                //store activity log
                activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($seminar)
                           ->withProperties($request->all())
                           ->log('အလုပ်သမားရေးရာ ဥပဒေများအား အသိပညာပေးဆွေးနွေးပွဲ ဆောင်ရွက်မှု ထည့်သွင်းခြင်း');
            }

            return redirect('/seminarlist');
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
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $accessibletownship =(Auth::user()->accessibletwonship);
        $accessibletownships = explode(',', $accessibletownship);
        // if($roleid==1|| $roleid==2||$roleid==3||$roleid==4){
        //     $seminar=Seminar::paginate(15);
        // }elseif($roleid==5||$roleid==6){
        //     $seminar=Seminar::where('district_id',Auth::user()->district_id)->paginate(15);
        // }elseif($roleid=7||$roleid==8){
        //     $seminar=Seminar::where('township_id',Auth::user()->township_id)->paginate(15);
        // }
        $seminar=Seminar::whereIn('township_id',$accessibletownships)->paginate(15);

        return view('seminar.seminarlist',compact('seminar'));
    }
    public function detail($id){
        $seminar=Seminar::where('id',$id)->get();
        // dd($seminar);
        return view('seminar.seminardetail',compact('seminar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
         $this->validate($request,['factoryid','seminarleader' =>'required','seminarleaderrank' =>'required','splace'=>'required','township_id'=>'required','men'=>'required','women'=>'required','district_id'=>'required','helddate'=>'required'],
            ['seminarleader.required'=>'ဦးဆောင်ဆွေးနွေးသူ၏ အမည်ကိုထည့်သွင်းပေးပါရန်',
             'seminarleaderrank.required'=>'ဦးဆောင်ဆွေးနွေးသူ၏ ရာထူးကိုထည့်သွင်းပေးပါရန်',
              'splace.required'=>'ကျင်းပသည့်နေရာကိုထည့်သွင်းပေးပါရန်',
              'township_id.required'=>'ကျင်းပသည့်မြို့နယ်ကို ထည့်သွင်းပေးပါရန်',
              'district_id.required'=>'ကျင်းပသည့်ခရိုင်ကို ထည့်သွင်းပေးပါရန်',
              'men.required'=>'ဆွေးနွေးပွဲတက်ရောက်သူ ကျားဦးရေ ထည့်သွင်းပေးပါရန်',
              'women.required'=>'ဆွေးနွေးပွဲတက်ရောက်သူ မဦးရေထည့်သွင်းပေးပါရန်',
              'helddate.requird'=>'ကျင်းပသည့်ရက်စွဲကိုထည့်သွင်းပေးပါရန်',
              'factoryid.required' => 'အလုပ်ရုံ၊ စက်ရုံ ထည့်သွင်းပေးပါရန်'
             ]);
             $standard_numsets = array("0","1","2","3","4","5","6","7","8","9");
             $standard_manysets = array('၀','၁','၂' ,'၃','၄','၅','၆','၇','၈','၉');
             $emen=str_replace($standard_manysets,$standard_numsets,$request->get('men'));
             $ewomen=str_replace($standard_manysets,$standard_numsets,$request->get('women'));
            $seminar=Seminar::find($request->get('seminarid'));
            $seminar->ftype=$request->get('factorytype') ;
            $seminar->s_leader=$request->get('seminarleader');
            $seminar->s_leaderrank=$request->get('seminarleaderrank');
            $seminar->s_contributor1rank=$request->get('contributor1rank');
            $seminar->s_contributor2=$request->get('contributor2');
            $seminar->s_contributor2rank=$request->get('contributor2rank');
            $seminar->s_contributor3=$request->get('contributor3');
            $seminar->s_contributor3rank=$request->get('contributor3rank');
            $seminar->s_place=$request->get('splace');
            $seminar->township_id=$request->get('township_id');
            $seminar->district_id=$request->get('district_id');
            $seminar->factory_id=$request->get('factoryid');
            $seminar->factoryname=$request->get('FactoryName');
            $seminar->trainingclass= $request->get('trainingclass');
            $seminar->emen=$emen;
            $seminar->ewomen=$ewomen;
            $seminar->mmen=$request->get('men');
            $seminar->mwomen=$request->get('women');
            $seminar->s_times=$request->get('stimes');
            $seminar->user_id=Auth::user()->id;
            $seminar->helddate=$request->get('helddate');
            $seminar->update();
            if($seminar){
                 //store activity log
                 activity()->useLog(Auth::user()->name)
                 ->causedBy(Auth::user()->id)
                 ->performedOn($seminar)
                 ->withProperties($request->all())
                 ->log('အလုပ်သမားရေးရာ ဥပဒေများအား အသိပညာပေးဆွေးနွေးပွဲ ဆောင်ရွက်မှု ပြင်ဆင်ခြင်း');
            }

            return redirect('/seminarlist');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seminar $seminar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $logs= Seminar::where('id',$id)->first();
        Seminar::find($id)->delete();
        //store activity log
        activity()->useLog(Auth::user()->name)
        ->causedBy(Auth::user()->id)
        ->performedOn($logs)
        ->withProperties($logs)
        ->log('အလုပ်သမားရေးရာ ဥပဒေများအား အသိပညာပေးဆွေးနွေးပွဲ ဆောင်ရွက်မှု ဖျက်ခြင်း');
        return redirect('/seminarlist');
    }
}
