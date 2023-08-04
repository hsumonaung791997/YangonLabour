<?php

namespace App\Http\Controllers;

use App\FactoryProsecuted;
use App\Factory;
use App\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class FactoryProsecutedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $accessibletownship =(Auth::user()->accessibletwonship);
        $accessibletownships = explode(',', $accessibletownship);

        $factoryProsecuted = FactoryProsecuted::whereIn('Township',$accessibletownships)->latest()->paginate(10);
        return view('Factoryprosecuted.index',compact('factoryProsecuted'))
               ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Factoryprosecuted.FactoryProsecuted');
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
        if($request->chooseType=='1'){
            $name = $request->factory_name;
            $address = $request->factory_address;
            $township = $request->factory_township_id;
            $zone = $request->factory_zone;
            $idno = $request->factory_IDno;
        }else{
            $name = $request->shop_name;
            $address = $request->shop_address;
            $township = $request->shop_township_id;
            $zone = $request->shop_zone;
            $idno = $request->shop_IDno;
            
        }     
        
        $request->request->add(['Name'=>$name,'Address'=>$address,'Township'=>$township,'Zone'=>$zone,'IDno'=>$idno]);
        // dd($request->all());
        $request->validate([
            'chooseType'=>'required',
            'OwnerName' => 'required',
            'OwnerAddress' => 'required',
            'ManagerName' => 'required',
            'ManagerAddress' => 'required',
            'PlaintiffName' => 'required',
            'PlaintiffLvl' => 'required',
            'PlaintiffTownship' => 'required',
            'PlaintiffZone' => 'required',
            'ProsecutedAbout' => 'required',
            'ProsecutedLaw' => 'required',
            'ProsecutedDay' => 'required',
            'CourtName' => 'required',
        ],[
            'OwnerName.required' => 'ပိုင်ရှင်အမည် ထည့်သွင်းပေးပါရန်။',
            'OwnerAddress.required' => 'ပိုင်ရှင်လိပ်စာ ထည့်သွင်းပေးပါရန်။',
            'ManagerName.required' => 'မန်နေဂျာ အမည်ရိုက်ထည့်ပေးပါ။',
            'ManagerAddress.required' => 'မန်နေဂျာ လိပ်စာ ထည့်သွင်းပေးပါရန်။',
            'PlaintiffName.required' => 'တရားလို အမည် ထည့်သွင်းပေးပါရန်။',
            'PlaintiffLvl.required' => 'တရားလိုရာထူး ထည့်သွင်းပေးပါရန်။',
            'PlaintiffTownship.required' => 'တရားလို၏ မြို့နယ်ထည့်သွင်းပေးပါရန်။',
            'PlaintiffZone.required' => 'တရားလို၏ ဇုန်ကိုထည့်သွင်းပေးပါရန်။',
            'ProsecutedAbout.required' => 'တရားစွဲရသည့် အကြောင်းအရင်းကိြ ထည့်သွင်းပေးပါရန်။',
            'ProsecutedLaw.required' => 'တရားစွဲဆိုသည့် ပုဒ်မ ထည့်သွင်းပေးပါရန်။',
            'ProsecutedDay.required' => 'ရုံးတင်တရားစွဲဆိုသည့်နေ့ ထည့်သွင်းပေးပါရန်။',
            'CourtName.required' => 'တရားရုံး အမည် ထည့်သွင်းပေးပါရန်။'
           
        ]);
        $factoryProsecuted=FactoryProsecuted::create($request->all());
        if($factoryProsecuted){
            /**userlogs
             * 
             */
            activity()->useLog(Auth::user()->name)
            ->causedBy(Auth::user()->id)
            ->performedOn($factoryProsecuted)
            ->withProperties($factoryProsecuted)
            ->log('တရားစွဲဆိုမှု ထည့်သွင်းခြင်း');
            /**
             * 
             */
        }
        return redirect('/Factoryprosecuted')->with('success', 'အမှုတွဲအသစ်စာရင်းသွင်းပြီးပါပြီ။');
 
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\FactoryProsecuted  $factoryProsecuted
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factoryProsecuted= FactoryProsecuted::where('id',$id)->first();
        return view('Factoryprosecuted.show',compact('factoryProsecuted'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FactoryProsecuted  $factoryProsecuted
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factoryProsecuted= FactoryProsecuted::where('id',$id)->first();
        // dd($factoryProsecuted);
        return view('Factoryprosecuted.edit',compact('factoryProsecuted'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactoryProsecuted  $factoryProsecuted
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $factoryProsecuted= FactoryProsecuted::where('id',$id)->first();
        $factoryProsecuted->update($request->all());
        if($factoryProsecuted){
             /**userlogs
             * 
             */
            activity()->useLog(Auth::user()->name)
            ->causedBy(Auth::user()->id)
            ->performedOn($factoryProsecuted)
            ->withProperties($factoryProsecuted)
            ->log('တရားစွဲဆိုမှု ပြင်ခြင်း');
            /**
             * 
             */
        }
        return redirect()->route('Factoryprosecuted.index')
                        ->with('success','အသစ်ပြင်ဆင်ပြီးပါပြီ။');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactoryProsecuted  $factoryProsecuted
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($factoryProsecuted);
        $factoryProsecuted= FactoryProsecuted::where('id',$id)->first();
        $logs = FactoryProsecuted::where('id',$id)->first();
        $factoryProsecuted->delete();
        /**userlogs
             * 
             */
            activity()->useLog(Auth::user()->name)
            ->causedBy(Auth::user()->id)
            ->performedOn($logs)
            ->withProperties($logs)
            ->log('တရားစွဲဆိုမှု ဖျက်ခြင်း');
            /**
             * 
             */

        return redirect('/Factoryprosecuted')->with('success', 'အောင်မြင်စွာဖျက်ပြီးပါပြီ။'); 
    }
}
