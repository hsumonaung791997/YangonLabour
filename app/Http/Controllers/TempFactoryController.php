<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempFactoryRegister;
use App\Region;
use App\EconomicSection;
use App\EconomicDivision;
use App\EconomicGroup;
use App\EconomicClass;
use App\District;
use App\Township;
use App\Industrialzone;
use Session;
class TempFactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $region=Region::all();
        $section= EconomicSection::all();
        $factory = TempFactoryRegister::where('id',$id)->first();
        $division =EconomicDivision::where('id',$factory->division_id)->first();
        $group = EconomicGroup::where('id',$factory->group_id)->first();
        $class = EconomicClass::where('class_code',$factory->class_name)->first();
        $district= District::where('id',$factory->district_id)->value('district_name');
        $township= Township::where('id',$factory->township_id)->value('township_name');
        $zone = Industrialzone::where('id',$factory->zone_id)->value('industrialzone_name');
        // dd($division);
        return view('temp.tempfactoryregister',compact('factory','region','section','district','township','zone','division','group','class'));
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
        // $RegDate ='2019-08-06';
        // if($request->WorkTimeType == 0){
        //     $LunchTime = $request->LunchTime;
        // }else{
        //     $LunchTime = $request->LunchTime1;
        // }
        // $request->request->add(['RegDate' =>$RegDate ,'LunchTime' => $LunchTime]);
        // $tempfactory = TempFactoryRegister::where('FactoryName',$request->FactoryName)->first();
        // if($tempfactory){
        //     $tempfactory->update($request->all());
        //      Session::put('TempFactoryRegister', $request->FactoryName);
        // }else{
        //     TempFactoryRegister::create($request->all());
        //     Session::put('TempFactoryRegister', $request->FactoryName);
        // }
        // return redirect('/factoryregister')->with('success', 'ယာယီသိမ်းဆည်းပြီးပါပီ');
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
