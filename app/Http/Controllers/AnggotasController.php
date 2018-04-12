<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggotas;

class AnggotasController extends Controller
{
    public function store(Request $request){
    	Anggotas::create([
            'nrp_anggota' => $request->nrp_anggota,
            'password_anggota' => $request->password_anggota,
            'nama_anggota' => $request->nama_anggota,
            'email_anggota' => $request->email_anggota,
            'notelp_anggota' => $request->notelp_anggota,
            'biodata_anggota' => $request->biodata_anggota,
            'status_anggota' => $request->status_anggota,
            'berkas_anggota' => $request->berkas_anggota,
            'foto_anggota' => $request->foto_anggota
    	]);
    	// $data['success'] = "Login Success";
    	return redirect('/login');
    }
}

