<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempFactoryInspectionAct;
class TempFactoryInspectionActController extends Controller
{
    public function index($id){
        $tempfactoryInspectionAct = TempFactoryInspectionAct::where('id',$id)->first();
        // dd($factory);
        return view('temp.tempfactoryInspectionAct',compact('tempfactoryInspectionAct'));
    }
}
