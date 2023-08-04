<?php

namespace App\Http\Controllers;
use App\FactoryLeaveInspection;
use App\Factory;
use App\Shop;
use Illuminate\Http\Request;
use App\Township;
use App\Industrialzone;
use App\EconomicClass;
use App\FactoryInspectionInforms;
use Auth;
class FactoryLeaveInspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function factoryInspection(){
        return view('inspection.factoryInspection');
    }

    public function search(Request $request){
        
        if($request->get('query'))
        {
              $query = $request->get('query');
              $accessibletownship =(Auth::user()->accessibletwonship);
              $accessibletownships = explode(',', $accessibletownship);

              $data =  Factory::whereIn('township_id',$accessibletownships)->where('FactoryName', 'LIKE', '%'. $query. '%')->get();
              if(!$data->isEmpty()){
                $output = '<ul class="dropdown-menu" style="display:block; position:absolute">';
                foreach($data as $row)
                {
                 $output .= '
                 <li><a href="#">'.$row->FactoryName.'</a></li>
                 ';
                }
                $output .= '</ul>';
                echo $output;
              }else{
                $output = '<ul class="dropdown-menu" style="display:block; position:absolute">';
                 $output .= '
                 <li><a href="#">'.'ရှာနေသော စက်ရုံမရှိပါ ... '.'</a></li>
                 ';
                $output .= '</ul>';
                echo $output;
              }
             
         }
    }

    public function data(Request $request){
         $name = $request->name;
         $factory = Factory::where('FactoryName',$name)->latest()->first();
         $lastinspectiondate = FactoryInspectionInforms::where('factory_id',$factory->FactoryId)->latest()->first();
         if($lastinspectiondate){
             $factory['lastinspectiondate']=$lastinspectiondate->inspectiondate;
         }
         $township =  Township::where('id',$factory->township_id)->value('township_name');
         $worktype= EconomicClass::where('class_code',$factory->class_name)->value('class_name');
         if($worktype){
             $factory['worktype']=$worktype;
         }
         if($township){
             $factory['township'] = $township;
         }
         $zone =  Industrialzone::where('id',$factory->zone_id)->value('industrialzone_name');
         if($zone){
            $factory['zone'] = $zone;
         }
         // return Response::json(array('success'=>true,'result'=>$result));
         return $factory;
    }

    // public function FactoryAct1951(){
    //     return view('inspection.1951factoryact');
    // }
    // public function LabourAholiday1951(){
    //     return view('inspection.1951labourholiday');
    // }
    public function index()
    {
        return view ('inspection.FactoryLeave');
    }

    // public function Wage2016(){
    //     return view('inspection.2016wage');
    // }
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
     * @param  \App\FactoryLeaveInspection  $factoryLeaveInspection
     * @return \Illuminate\Http\Response
     */
    public function show(FactoryLeaveInspection $factoryLeaveInspection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FactoryLeaveInspection  $factoryLeaveInspection
     * @return \Illuminate\Http\Response
     */
    public function edit(FactoryLeaveInspection $factoryLeaveInspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FactoryLeaveInspection  $factoryLeaveInspection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FactoryLeaveInspection $factoryLeaveInspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FactoryLeaveInspection  $factoryLeaveInspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(FactoryLeaveInspection $factoryLeaveInspection)
    {
        //
    }


    /***********
     * factory Prosecuted  search
     */
    public function Prosecutedsearch(Request $request){
        
        // dd($request->all());
        $accessibletownship =(Auth::user()->accessibletwonship);
        $accessibletownships = explode(',', $accessibletownship);
        if($request->get('type') == '1')
        {
              $query = $request->get('query');

              $data =  Factory::whereIN('township_id',$accessibletownships)->where('FactoryName', 'LIKE', '%'. $query. '%')->get();
              if(!$data->isEmpty()){
                $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                foreach($data as $row)
                {
                $output .= '
                <li><a href="#">'.$row->FactoryName.'</a></li>
                ';
                }
                $output .= '</ul>';
                echo $output;
            }else{
                $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
               
                $output .= '
                <li><a href="#">'.'ရှာဖွေသောစက်ရုံမရှိပါ။'.'</a></li>
                ';
                $output .= '</ul>';
                echo $output;
            }
              
         }
         else{
            $query = $request->get('query');

            $data =  Shop::whereIn('township_id',$accessibletownships)->where('shopname', 'LIKE', '%'. $query. '%')->get();
            if(!$data->isEmpty()){
                $output = '<ul class="dropdown-menu" style="display:block; position:absolute">';
                foreach($data as $row)
                {
                 $output .= '
                 <li><a href="#">'.$row->shopname.'</a></li>
                 ';
                }
                $output .= '</ul>';
                echo $output;
    
            }else{
                $output = '<ul class="dropdown-menu" style="display:block; position:absolute">';
               
                $output .= '
                <li><a href="#">'.'ရှာဖွေသောဆိုင်မရှိပါ။'.'</a></li>
                ';
                $output .= '</ul>';
                echo $output;
            }
            //dd($data);
           
         }
    }

    /********
     * prosecuted data 
     */
    public function Prosecuteddata(Request $request){
        if($request->get('type') == '1'){
            $name = $request->name;
            $factory = Factory::where('FactoryName',$name)->latest()->first();
            $township = Township::where('id',$factory->township_id)->value('township_name');
            $zone = Industrialzone::where('id',$factory->zone_id)->value('industrialzone_name');
            // return Response::json(array('success'=>true,'result'=>$result));
            $factory['type'] = '1';
            $factory['township'] = $township;
            $factory['zone'] = $zone;
            $factory['worktype']=EconomicClass::where('class_code',$factory->class_name)->value('class_name');
            return $factory;
        }
        else{
            // return $request->all();
            $name = $request->name;
            $shop = Shop::where('shopname',$name)->latest()->first();
            $township = Township::where('id',$shop->township_id)->value('township_name');
            $zone = Industrialzone::where('id',$shop->zone_id)->value('industrialzone_name');
            // return Response::json(array('success'=>true,'result'=>$result));
            //dd($request->all());
            $shop['shoptype'] = $request->get('type');
            $shop['township'] = $township;
            $shop['zone'] = $zone;
            $shop['worktype']=EconomicClass::where('class_code',$shop->class_name)->value('class_name');
            return $shop;
           
        }
   }
}
