<?php

namespace App\Http\Controllers;

use App\Township;
use App\Industrialzone;
use Illuminate\Http\Request;
use Auth;   

class IndustrialzoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tname']=Township::all();
        return view('other.zone',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
     $this->validate($request,['industrialzone_name' =>'required'],
            ['industrialzone_name.required'=>'Please Fill the name of Industrial Zone',]);

            $zone=Industrialzone::create(
            ['township_id'=>$request->township_id,
              'industrialzone_name'=>$request->industrialzone_name]);
              if($zone){
                  /**
                   * user log
                   */
                  activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($zone)
                           ->withProperties($zone)
                           ->log('Create Zone');
                /**
                 * 
                 */

              }
        $zone=Industrialzone::all();
        return view('other.zonelist',compact('zone'));
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
     * @param  \App\Township  $township
     * @return \Illuminate\Http\Response
     */
    public function show(Township $township)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Township  $township
     * @return \Illuminate\Http\Response
     */
    public function edit(Township $township)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Township  $township
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Township $township)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Township  $township
     * @return \Illuminate\Http\Response
     */
    public function destroy(Township $township)
    {
        //
    }
}
