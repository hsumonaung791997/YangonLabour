<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempFactoryInspectionWage;
class TempFactoryInspectionWageController extends Controller
{
    public function index($id){
        $FactoryInspectionWage = TempFactoryInspectionWage::where('id',$id)->first();
        // dd($factory);
        return view('temp.tempfactoryInspectionWage',compact('FactoryInspectionWage'));
    }   
}
