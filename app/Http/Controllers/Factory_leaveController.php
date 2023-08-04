<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\FactoryInspectionInforms;
use App\TempFactoryLeave;
use App\Factory_leave;
use App\TempFactoryInspectionInform;
use Session;
use Auth;
class Factory_leaveController extends Controller
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
        return view('inspection.1951labourholiday');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if($request->tempoary=="tempoary"){
            $user_id = Auth::user()->id;
            $factoryinspectioninform_id=TempFactoryInspectionInform::where('user_id', Auth::user()->id)->value('factory_inspection_inform_id');           
            $request->request->add(['user_id'=> $user_id,'factoryinspectioninform_id' => $factoryinspectioninform_id]);
            $templeave= TempFactoryLeave::where('factoryinspectioninform_id',$factoryinspectioninform_id)->first();
            if($templeave){
                $templeave->update($request->all());
            }else{
                TempFactoryLeave::create($request->all());
            }
            return redirect('/1951Labaourandholiday')->with('success', 'ယာယီသိမ်းဆည်းပြီးပါပီ');
        }else{
                $factoryinspectioninform_id=TempFactoryInspectionInform::where('user_id', Auth::user()->id)->value('factory_inspection_inform_id');           
                $inspection_id = Auth::user()->id;
                $request->request->add(['factoryinspectioninform_id' => $factoryinspectioninform_id,'inspection_id'=>$inspection_id ]);
                // dd($request->all());
                // Factory_leave::create($request->all());
                if( Factory_leave::create($request->all())){
                    $user_id = Auth::user()->id;
                    TempFactoryLeave::where('factoryinspectioninform_id',$factoryinspectioninform_id)->where('user_id', $user_id)->delete();
                }
                return redirect()->route('FactoryLeave.create')->with('success', '၁၉၅၁ ခွင့်ရက်နှင့် အလုပ်ပိတ်ရက်အက်ဥပဒေအရ စစ်ဆေးချက်ပုံစံ ထည့်သွင်းပီးပါပီ');
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
