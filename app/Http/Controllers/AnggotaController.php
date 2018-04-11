<?php

namespace App\Http\Controllers;

use App\Anggota;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


// use App\Http\Request;

class AnggotaController extends Controller
{
    public function getSignup(){
    	return view('user.signup');
    }

    public function postSignup(Request $request){
    	$validator = Validator::make($request->all(), [
            'nrp_anggota' => 'required|unique:anggota',
            'email_anggota' => 'required|unique:anggota',
            'password_anggota' => 'required|min:4',
            'nama_anggota' =>'required',
            'notelp_anggota' =>'required',
            'biodata_anggota' =>'required',
            'foto_anggota' =>'required',
            'status_anggota' =>'required',
            'berkas_anggota' =>'required',
        ]);

        if ($validator->fails()) {
            return redirect('/signup')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$anggota = new Anggota([
    		'nrp_anggota' =>$request->input('nrp_anggota'),
    		'nama_anggota' =>$request->input('nama_anggota'),
    		'email_anggota' =>$request->input('email_anggota'),
    		'password_anggota' => bcrypt($request->input('password_anggota')),
    		'notelp_anggota' =>$request->input('notelp_anggota'),
    		'biodata_anggota' =>$request->input('biodata_anggota'),
    		'foto_anggota' =>$request->input('foto_anggota'),
    		'status_anggota' =>$request->input('status_anggota'),
    		'berkas_anggota' =>$request->input('berkas_anggota'),
    	]);
    	$anggota->save();

    	return view('main.home');
    }
}
