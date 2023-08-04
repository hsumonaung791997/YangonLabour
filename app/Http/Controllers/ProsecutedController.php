<?php

namespace App\Http\Controllers;

use App\Prosecuted;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProsecutedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('prosecuted.prosecuted');
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
     * @param  \App\Prosecuted  $prosecuted
     * @return \Illuminate\Http\Response
     */
    public function show(Prosecuted $prosecuted)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prosecuted  $prosecuted
     * @return \Illuminate\Http\Response
     */
    public function edit(Prosecuted $prosecuted)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prosecuted  $prosecuted
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prosecuted $prosecuted)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prosecuted  $prosecuted
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prosecuted $prosecuted)
    {
        //
    }
}
