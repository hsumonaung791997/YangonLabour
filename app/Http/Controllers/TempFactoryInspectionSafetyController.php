<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempFactoryInspectionSafety;
class TempFactoryInspectionSafetyController extends Controller
{
    public function index($id){
        $FactoryInspectionSafety = TempFactoryInspectionSafety::where('id',$id)->first();
        // dd($FactoryInspectionSafety);
        return view('temp.tempfactoryInspectionSafety',compact('FactoryInspectionSafety'));
    }
}
