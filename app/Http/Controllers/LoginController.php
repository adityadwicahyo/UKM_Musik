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
        $user = User::where('NRP_Mahasiswa', $data['NRP_Mahasiswa'])->first();
        // dd($user);
    	$credentials = $request->only('NRP_Mahasiswa', 'password');
        
        $validator = Validator::make($data, [
            'NRP_Mahasiswa' => 'required|min:14|max:14',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/login')
            ->withErrors($validator)
            ->withInput();
        }
        else{
            if($user->Status_Mahasiswa == 'Unverified' || $user->Status_Mahasiswa == 'Pendaftar'){
                return redirect('/login')->withErrors(array('Success' => 'Permohonan SignUp Anda belum disetujui. Tunggu sms konfirmasi.'));
            }
            else if (Auth::attempt($credentials)) {
                return redirect('/');
            }
            else{
                return redirect('/login')->withErrors(array('Success' => 'NRP atau Password salah'));
            }
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
