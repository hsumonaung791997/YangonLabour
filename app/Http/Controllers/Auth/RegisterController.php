<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Region;
use App\Township;
use App\District;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Input;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*  public function __construct()
    {
        $this->middleware('guest');
    }
*/
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role'=>'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      
        $roleid= $data['role'];     
        
         $town=array();
         $townid=array();
         $township=array();
        
//for admin, minister and region ad 
if($roleid==1 || $roleid==2 || $roleid==3){
    $township=Township::all();
  
}
//for region officer
if($roleid==4){
    $district=District::whereIn('id',$data['districtname'])->get();
   foreach($district as $d){
    $townid[]=$d->township;
   }
   foreach ($townid as $t){
    foreach ($t as $tid){
       $township[]=$tid;
    }
   }
  
}
//for District AD
if($roleid==5){
    $district=District::where('id',$data['district'])->get();
   foreach($district as $d){
    $townid[]=$d->township;
   }
   foreach ($townid as $t){
    foreach ($t as $tid){
       $township[]=$tid;
    }
   }
  
}

if($roleid==6 || $roleid==7 || $roleid==8){
    
    $township=Township::whereIn('id',$data['township'])->get();
}



//the last state
foreach ($township as $t){
   $town[]=$t->id;
}
$townshipid=implode(',', $town);
if($data['role']==7 || $data['role']==8){
    $data['district']=null;
}

       $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),            
            'phoneno'=>$data['phone'],
            'region_id'=>$data['region'],
            
            'district_id'=>$data['district'],
           
            'township_id'=>$data['userdutytownship'],
          
            'accessibletwonship'=>$townshipid,
      ]);
//dd($user);
        if($user){
            /**
             * user log
             */
            activity()->useLog(Auth::user()->name)
                           ->causedBy(Auth::user()->id)
                           ->performedOn($user)
                           ->withProperties($user)
                           ->log('create new user');
                           /**
                            * 
                            */
        }
     $user->roles()->attach($data['role']);

       return $user;
    }

    public function showRegistrationForm()
    {
        $roles=Role::orderBy('name')->pluck('name','id');
        $region=Region::all();
        $district=District::all();
        $township=Township::all();
        return view('auth.register',compact('roles','region','district','township'));
    }
}
