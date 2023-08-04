<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Activity;
class UserLogController extends Controller
{
    public function lists(){
        // dd('hi');
        $log=Activity::orderBy('id','DESC')->paginate(10);
        // dd($log);
        return view('user.activity_log',compact('log'));

    }
}
