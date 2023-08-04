<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PermissionOtFactory;
use App\Role;
use App\User;
use Auth;
use App\OTReport;
class PermissionOtFactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accessibletownship =(Auth::user()->accessibletwonship);
        $accessibletownships = explode(',', $accessibletownship);

        $otpermission = PermissionOtFactory::whereIn('township',$accessibletownships)->latest()->paginate(10);
        return view('factory.otpermissionfactory',compact('otpermission'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::whereIn('id', [3, 5, 7])->get();
        // dd($roles);
        return view('factory.otpermissionfactorycreate',compact('roles'));
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
        $request->validate([
                    'factory_id' => 'required',
                    'FromDay' => 'required',
                    'ToDay'=> 'required'
                ]);
        $roleid=$request->get('role');
        //for region ad
        if($roleid==3){
          $userid=User::whereHas('roles', function($query) {
                    $query->where('id',3);
            })->value('id');

        }
        else if($roleid==5){
             $userid=User::whereHas('roles', function($query) {
                    $query->where('id',5);
            })->where('district_id',$request->get('district'))->value('id');
        }
        else{
            $userid=User::whereHas('roles', function($query) {
                    $query->where('id',7);
            })->where('township_id',$request->get('township'))->value('id');  
        }

    //  echo $userid;
    //  dd($userid);
     $request->request->add(['touser_id'=>$userid,'user_id'=>Auth::user()->id]);
  $ot_permission=PermissionOtFactory::create($request->all());
  if($ot_permission){
      //save user log 
      /**
       * 
       */
      activity()->useLog(Auth::user()->name)
      ->causedBy(Auth::user()->id)
      ->performedOn($ot_permission)
      ->withProperties($ot_permission)
      ->log('အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ထည့်သွင်းခြင်း');
      /**
       * 
       */
  }

 $otid= PermissionOtFactory::where('factory_id',$request->factory_id)->latest()->value('id');
      
OTReport::create(['fromuser'=>Auth::user()->id,
  'touser'=>$userid,'ot_id'=>$otid]);
 return redirect('/PermissionOtFactory')->with('success', 'အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ထည့်သွင်းခြင်းအောင်မြင်ပါသည်...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $otpermission = PermissionOtFactory::where('id',$id)->first();
        return view('factory.edit_otpermissionfactory',compact('otpermission'));
        
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
        // dd($request->all());
        $otpermission = PermissionOtFactory::where('id',$id)->first();
        $otpermission->update($request->all());
        //save user log 
      /**
       * 
       */
      activity()->useLog(Auth::user()->name)
      ->causedBy(Auth::user()->id)
      ->performedOn($otpermission)
      ->withProperties($otpermission)
      ->log('အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ပြင်ခြင်း');
      /**
       * 
       */
        return redirect('/PermissionOtFactory')->with('success', 'အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ပြင်ဆင်ခြင်းအောင်မြင်ပါသည်...');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $ot_permission = PermissionOtFactory::where('id',$id)->first();
        PermissionOtFactory::where('id',$id)->delete();

        /**
       * 
       */
      activity()->useLog(Auth::user()->name)
      ->causedBy(Auth::user()->id)
      ->performedOn($ot_permission)
      ->withProperties($ot_permission)
      ->log('အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ဖျက်ခြင်း');
      /**
       * 
       */

        return redirect('/PermissionOtFactory')->with('success', 'အချိန်ပိုလုပ်ကိုင်ခွင့်ပြုချက် ဖျက်ခြင်းအောင်မြင်ပါသည်...');
        
    }
}
