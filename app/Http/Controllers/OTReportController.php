<?php

namespace App\Http\Controllers;

use App\OTReport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PermissionOtFactory;
use Auth;

class OTReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $otdetail=OTReport::where('touser',Auth::user()->id)->orderBy('id','Desc')->paginate(15);
		return view('otreport.otdetail',compact('otdetail'));
    }

    public function ApproveOtPermission($id){
        $approve = OTReport::where('id',$id)->first();
        $approve->status= 1 ;
        $approve->update();
        return back()->with('success','အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုခြင်းအောင်မြင်ပါသည်');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OTReport  $oTReport
     * @return \Illuminate\Http\Response
     */
    public function show(OTReport $oTReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OTReport  $oTReport
     * @return \Illuminate\Http\Response
     */
    public function edit(OTReport $oTReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OTReport  $oTReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OTReport $oTReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OTReport  $oTReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(OTReport $oTReport)
    {
        //
    }
}
