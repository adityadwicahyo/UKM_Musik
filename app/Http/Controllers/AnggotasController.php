<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use App\Anggotas;

class AnggotasController extends Controller
{
    public function store(Request $request){
        $data = $request->all();
        // dd($data['password_anggota']);
        // if($data['password_anggota'] != $data['confirm']){
        //     $data['confirmpass'] = 1;
        //     return view('user.signup', $data);
        // }

        $validator = Validator::make($data, [
            'nrp_anggota' => 'required|min:14|max:14|unique:anggotas',
            'nama_anggota' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'email_anggota' => 'required',
            'notelp_anggota' => 'required',
            'berkas_anggota' => 'required',
            'foto_anggota' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/signup')
            ->withErrors($validator)
            ->withInput();
        }
        else{
            $data['status_anggota'] = 'user';
            $data['password_anggota'] = bcrypt($data['password']);
            // $data = 'user';
            Anggotas::create($data, [
                'except' => '_token',
                'except' => 'confirm'
            // 'nrp_anggota' => $request->nrp_anggota,
            // 'password_anggota' => $request->password_anggota,
            // 'nama_anggota' => $request->nama_anggota,
            // 'email_anggota' => $request->email_anggota,
            // 'notelp_anggota' => $request->notelp_anggota,
            // 'biodata_anggota' => $request->biodata_anggota,
            // 'status_anggota' => $request->status_anggota,
            // 'berkas_anggota' => $request->berkas_anggota,
            // 'foto_anggota' => $request->foto_anggota
            ]);
        }
        return redirect('/login');
    }
}

