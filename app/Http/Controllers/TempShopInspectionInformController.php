<?php

namespace App\Http\Controllers;

use App\TempShopInspectionInform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TempShopInspectionInformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tempshopinform = TempShopInspectionInform::where('id',$id)->first();
        // dd($tempshopinform);
        return view('temp.tempshopinform',compact('tempshopinform'));
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
     * @param  \App\TempShopInspectionInform  $tempShopInspectionInform
     * @return \Illuminate\Http\Response
     */
    public function show(TempShopInspectionInform $tempShopInspectionInform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TempShopInspectionInform  $tempShopInspectionInform
     * @return \Illuminate\Http\Response
     */
    public function edit(TempShopInspectionInform $tempShopInspectionInform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TempShopInspectionInform  $tempShopInspectionInform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TempShopInspectionInform $tempShopInspectionInform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TempShopInspectionInform  $tempShopInspectionInform
     * @return \Illuminate\Http\Response
     */
    public function destroy(TempShopInspectionInform $tempShopInspectionInform)
    {
        //
    }
}
