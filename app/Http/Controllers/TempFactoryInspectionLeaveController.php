<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempFactoryLeave;
class TempFactoryInspectionLeaveController extends Controller
{
    public function index($id){
        $FactoryInspectionLeave = TempFactoryLeave::where('id',$id)->first();
        // dd($factory);
        return view('temp.tempfactoryInspectionLeave',compact('FactoryInspectionLeave'));
    }
}
