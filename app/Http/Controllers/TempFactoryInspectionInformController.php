<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempFactoryInspectionInform;
use App\Factory;
class TempFactoryInspectionInformController extends Controller
{
    public function index($id){
        $FactoryInspectionInform = TempFactoryInspectionInform::where('id',$id)->first();
        // dd($factory);
        $factory = Factory::where('FactoryId',$FactoryInspectionInform->factory_id)->first();
        return view('temp.tempfactoryInspectionInform',compact('FactoryInspectionInform','factory'));
    }
}
