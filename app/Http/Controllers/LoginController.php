<?php

namespace App\Http\Controllers;

use Auth;

// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postLogin(Request $request){
    	// dd($request);
    	if(Auth::attempt(['NRP_User' => $request->NRP_User,'Password_User' => $request->NRP_User])){
    		return redirect('/');
    	}
    	else{
    		return redirect('/');
    	}
    }
}
