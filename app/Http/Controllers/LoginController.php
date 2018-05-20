<?php

namespace App\Http\Controllers;

use Auth;
use Validator;

// use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function postLogin(Request $request){
    	$data = $request->all();
    	$credentials = $request->only('NRP_User', 'password');

        $validator = Validator::make($data, [
            'NRP_User' => 'required|min:14|max:14',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/login')
            ->withErrors($validator)
            ->withInput();
        }
        else{
            if (Auth::attempt($credentials)) {
                return redirect('/');
            }
            else{
                return redirect('/login')->withErrors(array('Success' => 'NRP atau Password salah'));
            }
        }
    }

    public function logout(){
        // Auth::logout();
        return redirect('/login');
    }
}
