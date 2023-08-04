<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FactoryInspectionAct;
use App\TempFactoryInspectionInform;
use Session;
use Auth;
use App\TempFactoryInspectionAct;
class FactoryInspectionActController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inspection.1951factoryact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if($request->tempoary=="tempoary"){
            $user_id = Auth::user()->id;
            // $factoryinspectioninform_id  =Session::get('FactoryInspection');
            $factoryinspectioninform_id=TempFactoryInspectionInform::where('user_id', $user_id)->value('factory_inspection_inform_id');
            // dd($factoryinspectioninform_id);
            $request->request->add(['user_id'=> $user_id,'factoryinspectioninform_id' => $factoryinspectioninform_id]);
            $tempact= TempFactoryInspectionAct::where('factoryinspectioninform_id',$factoryinspectioninform_id)->first();
            if($tempact){
                $tempact->update($request->all());
            }else{
                TempFactoryInspectionAct::create($request->all());
            }
            return redirect('/1951factoryact')->with('success', 'ယာယီသိမ်းဆည်းပြီးပါပီ');
        }
        else{
            // $factoryinspectioninform_id  =Session::get('FactoryInspection');
            $factoryinspectioninform_id=TempFactoryInspectionInform::where('user_id', Auth::user()->id)->value('factory_inspection_inform_id');
            $inspection_id = Auth::user()->id;
            $request->request->add(['factoryinspectioninform_id' => $factoryinspectioninform_id,'inspection_id'=>$inspection_id ]);
            // dd($request->all());
            // FactoryInspectionAct::create($request->all());
            if(FactoryInspectionAct::create($request->all())){
                $user_id = Auth::user()->id;
                TempFactoryInspectionAct::where('factoryinspectioninform_id',$factoryinspectioninform_id)->where('user_id', $user_id)->delete();
            }
            // dd(Session::get('FactoryInspection'));
            return redirect()->route('FactoryInspectionAct.create')->with('success', '၁၉၅၁ အလုပ်ရုံများ အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ ထည့်သွင်းပီးပါပီ');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
