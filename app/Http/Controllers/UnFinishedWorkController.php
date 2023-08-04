<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempFactoryRegister;
use App\TempShopRegister;
use App\TempFactoryInspectionImpact;
use App\TempFactoryInspectionInform;
use App\TempFactoryInspectionSafety;
use App\TempFactoryInspectionWage;
use App\TempFactoryInspectionAct;
use App\TempFactoryLeave;
use App\FactoryInspectionInforms;
use App\Factory;
use App\TempShopInspectionInform;
use App\TempShopInspectionLeave;
use App\TempFactoryLabourInspectionLaw;
use App\TempShopLabourInspectionLaw;
use App\TempShopInspectionSafety;
use Auth;
use DB;
class UnFinishedWorkController extends Controller
{
    public function index(){
        $factory=TempFactoryRegister::where('user_id',Auth::user()->id)->get();
        $shop=TempShopRegister::where('user_id',Auth::user()->id)->get();
        $tempFactoryInspectionImpact = TempFactoryInspectionImpact::where('user_id',Auth::user()->id)->get();
        // $tempFactoryInspectionInform = TempFactoryInspectionInform::where('user_id',Auth::user()->id)->get();
        // $tempFactoryInspectionSafety = TempFactoryInspectionSafety::where('user_id',Auth::user()->id)->get();        
        // $tempFactoryInspectionWage= TempFactoryInspectionWage::where('user_id',Auth::user()->id)->get();  
        // $tempFactoryInspectionLeave= TempFactoryLeave::where('user_id',Auth::user()->id)->get(); 
        // $tempFactoryInspectionAct= TempFactoryInspectionAct::where('user_id',Auth::user()->id)->get();   
        // dd(isset($tempFactoryInspectionWage[0]));     
        // dd($tempFactoryInspectionInform);
        //factory Inspection Informs to get Factory Name join factories table
        $tempFactoryInspectionInform = DB::table('temp_factory_inspection_informs')
            ->join('factories', 'temp_factory_inspection_informs.factory_id', '=', 'factories.FactoryId')
            ->where('temp_factory_inspection_informs.user_id','=',Auth::user()->id)
            ->select('temp_factory_inspection_informs.*', 'factories.FactoryName')
            ->get();

        // $tempFactoryInspectionAct = DB::table('temp_factory_inspection_acts')
        //     ->join('temp_factory_inspection_informs', 'temp_factory_inspection_informs.factory_inspection_inform_id', '=', 'temp_factory_inspection_acts.factoryinspectioninform_id')
        //     ->join('factories', 'temp_factory_inspection_informs.factory_id', '=', 'factories.FactoryId')
        //     ->where('temp_factory_inspection_acts.user_id','=',Auth::user()->id)
        //     ->select('temp_factory_inspection_informs.factory_id', 'factories.FactoryName','temp_factory_inspection_acts.*')
        //     ->get();

        $tempFactoryInspectionSafety = DB::table('temp_factory_inspection_safeties')
            ->join('temp_factory_inspection_informs', 'temp_factory_inspection_informs.factory_inspection_inform_id', '=', 'temp_factory_inspection_safeties.factoryinspectioninform_id')
            ->join('factories', 'temp_factory_inspection_informs.factory_id', '=', 'factories.FactoryId')
            ->where('temp_factory_inspection_safeties.user_id','=',Auth::user()->id)
            ->select('temp_factory_inspection_informs.factory_id', 'factories.FactoryName','temp_factory_inspection_safeties.*')
            ->get();
        // dd($tempFactoryInspectionSafety);
        // $tempFactoryInspectionWage = DB::table('temp_factory_inspection_wages')
        //     ->join('temp_factory_inspection_informs', 'temp_factory_inspection_informs.factory_inspection_inform_id', '=', 'temp_factory_inspection_wages.factoryinspectioninform_id')
        //     ->join('factories', 'temp_factory_inspection_informs.factory_id', '=', 'factories.FactoryId')
        //     ->where('temp_factory_inspection_wages.user_id','=',Auth::user()->id)
        //     ->select('temp_factory_inspection_informs.factory_id', 'factories.FactoryName','temp_factory_inspection_wages.*')
        //     ->get();

            // $tempFactoryInspectionLeave = DB::table('temp_factory_leaves')
            // ->join('temp_factory_inspection_informs', 'temp_factory_inspection_informs.factory_inspection_inform_id', '=', 'temp_factory_leaves.factoryinspectioninform_id')
            // ->join('factories', 'temp_factory_inspection_informs.factory_id', '=', 'factories.FactoryId')
            // ->where('temp_factory_leaves.user_id','=',Auth::user()->id)
            // ->select('temp_factory_inspection_informs.factory_id', 'factories.FactoryName','temp_factory_leaves.*')
            // ->get();
            // dd($tempFactoryInspectionSafety);

            //for temp factory inspection labour law
            $tempfactorylabourlaw = TempFactoryLabourInspectionLaw::all();
            // dd($tempfactorylabourlaw);
            //for temp shop information
            $tempshopinform = TempShopInspectionInform::all();
            //for temp shop Leave Law
            $tempshopleave = TempShopInspectionLeave::all();
            // dd($tempshopleave);
            $tempshoplabourinspection = TempShopLabourInspectionLaw::all();
            $tempshopsafety = TempShopInspectionSafety::all();
            $tempshopleave = DB::table('temp_shop_inspection_leaves')
            ->join('temp_shop_inspection_informs', 'temp_shop_inspection_informs.shop_inspection_inform_id', '=', 'temp_shop_inspection_leaves.check_id')
            ->where('temp_shop_inspection_leaves.user_id','=',Auth::user()->id)
            ->select('temp_shop_inspection_informs.shopname','temp_shop_inspection_leaves.*')
            ->get();
            // dd($tempshopleave);
        return view('temp.temp',compact('factory','shop','tempFactoryInspectionImpact','tempFactoryInspectionInform','tempFactoryInspectionSafety','tempshopinform','tempshopleave','tempfactorylabourlaw','tempshoplabourinspection','tempshopsafety'));
    }
}
