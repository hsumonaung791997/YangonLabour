<?php

namespace App\Http\Controllers;

use App\Township;
use App\District;
use Illuminate\Http\Request;
use Auth;

class TownshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['dname']=District::all();
        return view('other.township',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
     $this->validate($request,['townshipname' =>'required'],
            ['townshipname.required'=>'Please Fill the name of Township',]);

        $township=Township::create(
            ['district_id'=>$request->district,
              'township_name'=>$request->townshipname]);
         /**
          * user logs
          */
          activity()->useLog(Auth::user()->name)
          ->causedBy(Auth::user()->id)
          ->performedOn($township)
          ->withProperties($township)
          ->log('Create Township');
          /**
           * 
           */
        return redirect('/townshiplist');
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
    public function show()
    {
        $township=Township::paginate(10);
        return view('other.townshiplist',compact('township'));
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
    public function searchname(Request $request){

        if($request->get('id'))
        {
              $query = $request->get('id');

              $data=Township::where('district_id',$query)->get();
          return $data;
       }

    }
}
