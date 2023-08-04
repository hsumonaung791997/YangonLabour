<?php

namespace App\Http\Controllers;

use App\TempShopInspectionLeave;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TempShopInspectionLeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $templeave= TempShopInspectionLeave::where('id',$id)->first();
        return view('temp.tempshopleave',compact('templeave'));
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
     * @param  \App\TempShopInspectionLeave  $tempShopInspectionLeave
     * @return \Illuminate\Http\Response
     */
    public function show(TempShopInspectionLeave $tempShopInspectionLeave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TempShopInspectionLeave  $tempShopInspectionLeave
     * @return \Illuminate\Http\Response
     */
    public function edit(TempShopInspectionLeave $tempShopInspectionLeave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TempShopInspectionLeave  $tempShopInspectionLeave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TempShopInspectionLeave $tempShopInspectionLeave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TempShopInspectionLeave  $tempShopInspectionLeave
     * @return \Illuminate\Http\Response
     */
    public function destroy(TempShopInspectionLeave $tempShopInspectionLeave)
    {
        //
    }
}
