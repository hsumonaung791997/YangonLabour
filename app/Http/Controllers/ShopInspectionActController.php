<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\TempShopInspectionInform;
use App\ShopInspectionAct;
class ShopInspectionActController extends Controller
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
        $user_id = Auth::user()->id;
         $tempshopinform = TempShopInspectionInform::where('ShopId',$request->shop_id)->where('user_id',$user_id)->first();
         // dd($tempshopinform);
        $request->request->add(['user_id'=> $user_id,'check_id'=>$tempshopinform->shop_inspection_inform_id]);
        ShopInspectionAct::create($request->all());
        return redirect('/shop2016Law')->with('success', '၂၀၁၆ ခုနှစ် ဆိုင်များနှင့်အလုပ်ဌာနများ အက်ဥပေဒေ ထည့်သွင်းပြီးပါပီ ...');
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
