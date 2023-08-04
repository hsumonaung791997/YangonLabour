<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class FactoryInspectionListController extends Controller
{
    public function Lists(){
        $array = explode(',', Auth::user()->accessibletwonship);     
        $factory=DB::table('factoryinspectioninforms')
                    ->join('factories','factories.FactoryId','factoryinspectioninforms.factory_id')
                    ->join('users','users.id','factoryinspectioninforms.inspectionid')
                    ->leftJoin('factory_inspection_safeties','factory_inspection_safeties.factoryinspectioninform_id','factoryinspectioninforms.cid')
                    ->leftJoin('factory_labour_inspection_laws','factory_labour_inspection_laws.factoryinspectioninform_id','factoryinspectioninforms.cid')
                    ->select('factoryinspectioninforms.*','factories.*','users.*','factory_inspection_safeties.id as safety_id','factory_labour_inspection_laws.id as law_id')
                    ->whereIN('factories.township_id',$array)
                    ->orderBy('factoryinspectioninforms.cid', 'DESC')
                    ->paginate(10);
            // dd($factory);
        return view('factory.inspection_lists',compact('factory'));     

   
    }
}
