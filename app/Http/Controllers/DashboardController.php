<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
   public function index(){
     $array = explode(',', Auth::user()->accessibletwonship);   

          $cases=DB::table('cases')
             ->join('factoryinspectioninforms','factoryinspectioninforms.cid','=','cases.checkid')
             ->join('users','users.id','=','cases.FromUserId')
             ->join('factories','factories.FactoryId','=','factoryinspectioninforms.factory_id')
             ->select('cases.*', 'users.*', 'factoryinspectioninforms.*', 'factories.*')
             ->whereIN('cases.FromTownshipid',$array) 
			->where('cases.Status',3)
            ->paginate(20);

        // $path ='backups';
        // $files = Storage::allFiles($path);
        // dd($files);
   		return view('adminpanel.index',compact('cases'));
		
   }

	public function showChangePasswordForm(){
	    return view('auth.changepassword');
	}
    public function changePassword(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        if($user->save()){
             /**
             * user log
             */
            activity()->useLog(Auth::user()->name)
            ->causedBy(Auth::user()->id)
            ->performedOn($user)
            ->withProperties($user)
            ->log('Change Password');
            /**
             * 
             */
        }

        return redirect()->back()->with("success","Password changed successfully !");
    }

}
