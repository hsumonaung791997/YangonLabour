<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempFactoryInspectionImpact;
use App\Region;
use App\District;
use App\Township;
use App\Industrialzone;
class TempFactoryInspectionImpactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $FactoryInspectionImpact = TempFactoryInspectionImpact::where('id',$id)->first();                 $region = Region::all();

        // dd($factory);
        if($FactoryInspectionImpact->district_id){
             $district = District::where('id',$FactoryInspectionImpact->district_id)->value('district_name');
        }else{
            $district='';
        }
       if($FactoryInspectionImpact->township_id){
        $township= Township::where('id',$FactoryInspectionImpact->township_id)->value('township_name');
       }else{
        $township='';
       }
        
        if($FactoryInspectionImpact->zone_id){
             $zone = Industrialzone::where('id',$FactoryInspectionImpact->zone_id)->value('industrialzone_name');

        }else{
            $zone='';
        }

        return view('temp.tempfactoryInspectionImpact',compact('FactoryInspectionImpact','district','township','zone','region'));
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
