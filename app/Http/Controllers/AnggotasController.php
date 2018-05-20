<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use App\Anggotas;

class AnggotasController extends Controller
{
    public function store(Request $request){
        $data = $request->all();

        $validator = Validator::make($data, [
            'nrp_anggota' => 'required|min:14|max:14|unique:anggotas',
            'nama_anggota' => 'required',
            // 'password' => 'required|confirmed',
            // 'password_confirmation' => 'required',
            'email_anggota' => 'required',
            'notelp_anggota' => 'required',
            'berkas_anggota' => 'required',
            'foto_anggota' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/oprec')
            ->withErrors($validator)
            ->withInput();
        }
        else{
            //Default status
            $data['status_anggota'] = 'Pendaftar';

            //Encrypt password
            // $data['password_anggota'] = bcrypt($data['password']);

            //Upload Image
            $image = $request->file('foto_anggota');
            $input['imageName'] = $data['nrp_anggota'] . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('data\Oprec'.'\\'.$data['nrp_anggota']);
            $image->move($destinationPath, $input['imageName']);
            $data['foto_anggota'] = 'data\Oprec'.'\\'.$data['nrp_anggota'].'\\'.$input['imageName'];

            //Upload Document
            $doc = $request->file('berkas_anggota');

            $input['docName'] = $data['nrp_anggota'] . '.' . $doc->getClientOriginalExtension();
            $destinationPath = public_path('data\Oprec'.'\\'.$data['nrp_anggota']);
            $doc->move($destinationPath, $input['docName']);
            $data['berkas_anggota'] = 'data\Oprec'.'\\'.$data['nrp_anggota'].'\\'.$input['docName'];

            Anggotas::create($data, [
                'except' => '_token'
                // 'except' => 'confirm'
            ]);
        }
        return redirect('/oprec')->withErrors(array('Success' => 'Pendaftaran berhasil'));
    }

    public function organisasi(){
        $anggotas = Anggotas::all();

        return view('main.organisasi', ['anggotas' => $anggotas]);
    }
}

