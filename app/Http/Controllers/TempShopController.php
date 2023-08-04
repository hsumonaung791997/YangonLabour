<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\TempShopRegister;
use App\Region;
use App\District;
use App\Township;
use App\EconomicSection;
use App\EconomicDivision;
use App\EconomicGroup;
use App\EconomicClass;
class TempShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $section= EconomicSection::all();
        $region=Region::all();
        $shop = TempShopRegister::where('id',$id)->first();
        //for work type selected
        $division =EconomicDivision::where('id',$shop->division_id)->first();
        $group = EconomicGroup::where('id',$shop->group_id)->first();
        $class = EconomicClass::where('class_code',$shop->class_name)->first();
        $district= District::where('id',$shop->district_id)->value('district_name');
        $township= Township::where('id',$shop->township_id)->value('township_name');
        
        return view('temp.tempshopregister',compact('shop','region','section','division','group','class','district','township'));
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
