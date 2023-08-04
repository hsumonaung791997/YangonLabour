<?php

namespace App\Http\Controllers;

use App\District;
use App\Region;
use Illuminate\Http\Request;
use Auth;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rname=Region::all();
        return view('other.district',compact('rname'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* to insert the district**/
    public function create(Request $request){
     $this->validate($request,['districtname' =>'required'],
            ['districtname.required'=>'Please Fill the name of District',]);

        $district=District::create(['region_id'=>$request->region,
            'district_name'=>$request->districtname,]);
            if($district){
                /**
                 * user log
                 */
                 activity()->useLog(Auth::user()->name)
                 ->causedBy(Auth::user()->id)
                 ->performedOn($district)
                 ->withProperties($district)
                 ->log('Create District');
                /**
                 * 
                 */
            }
        $regionname=District::all();
        return view('other.districtlist',compact('regionname'));
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
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show(District $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(District $district)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $district)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
        //
    }
}
