<?php

namespace App\Http\Controllers;

use App\ShopInspectionLeave;
use Illuminate\Http\Request;
use App\TempShopInspectionInform;
use App\Http\Controllers\Controller;
use App\TempShopInspectionLeave;
use Auth;
class ShopInspectionLeaveController extends Controller
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
        if($request->tempoary=="tempoary"){
            $user_id = Auth::user()->id;
            $shop_inform_id=TempShopInspectionInform::where('user_id', $user_id)->value('shop_inspection_inform_id');
            // dd($shop_inform_id);
            $request->request->add(['user_id'=> $user_id,'check_id' => $shop_inform_id]);
            $templeave= TempShopInspectionLeave::where('check_id',$shop_inform_id)->first();
            if($templeave){
                $templeave->update($request->all());
            }else{
                TempShopInspectionLeave::create($request->all());
            }
            return redirect('/shop1951LeaveLaw')->with('success', 'ယာယီသိမ်းဆည်းပြီးပါပီ');
        }else{
            $shop_inform_id=TempShopInspectionInform::where('user_id', Auth::user()->id)->value('shop_inspection_inform_id');
            $request->request->add(['check_id' => $shop_inform_id ]);
            // ShopInspectionLeave::create($request->all());
            if( ShopInspectionLeave::create($request->all())){
                $user_id = Auth::user()->id;
                TempShopInspectionLeave::where('check_id',$shop_inform_id)->where('user_id', $user_id)->delete();
            }
            TempShopInspectionInform::where('shop_inspection_inform_id',$shop_inform_id)->where('user_id', $user_id)->delete();
            return redirect('/shop1951LeaveLaw')->with('success', '၁၉၅၁ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက် ဥပဒေစစ်ဆေးခြင်း ထည့်သွင်းပြီးပါပီ ...');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShopInspectionLeave  $shopInspectionLeave
     * @return \Illuminate\Http\Response
     */
    public function show(ShopInspectionLeave $shopInspectionLeave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShopInspectionLeave  $shopInspectionLeave
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopInspectionLeave $shopInspectionLeave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShopInspectionLeave  $shopInspectionLeave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShopInspectionLeave $shopInspectionLeave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShopInspectionLeave  $shopInspectionLeave
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopInspectionLeave $shopInspectionLeave)
    {
        //
    }
}
