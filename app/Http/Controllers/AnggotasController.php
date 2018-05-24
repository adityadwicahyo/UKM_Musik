<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use App\User;

class AnggotasController extends Controller
{
    public function store(Request $request){
        $data = $request->all();

        $validator = Validator::make($data, [
            'NRP_Mahasiswa' => 'required|min:14|max:14|unique:users',
            'Nama_Mahasiswa' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'Foto_Mahasiswa' => 'required',
            'Email_Mahasiswa' => 'required|unique:users',
            'No_telp_Mahasiswa' => 'required',
            'Berkas_Mahasiswa' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/oprec')
            ->withErrors($validator)
            ->withInput();
        }
        else{
            //Encrypt password
            $data['password'] = bcrypt($data['password']);

            //Upload Image
            $image = $request->file('Foto_Mahasiswa');
            $input['imageName'] = $data['NRP_Mahasiswa'] . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('data\Mahasiswa'.'\\'.$data['NRP_Mahasiswa']);
            $image->move($destinationPath, $input['imageName']);
            $data['Foto_Mahasiswa'] = "data/Mahasiswa/".$data['NRP_Mahasiswa']."/". $input['imageName'];

            //Upload Document
            $berkas = $request->file('Berkas_Mahasiswa');
            $input['berkasName'] = $data['NRP_Mahasiswa'] . '.' . $berkas->getClientOriginalExtension();
            $destinationPath = public_path('data\Mahasiswa'.'\\'.$data['NRP_Mahasiswa']);
            $berkas->move($destinationPath, $input['berkasName']);
            $data['Berkas_Mahasiswa'] = "data/Mahasiswa/".$data['NRP_Mahasiswa']."/". $input['berkasName'];

            //Status
            $data['Status_Mahasiswa'] = 'Pendaftar';

            User::create($data, [
                'except' => '_token',
                'except' => 'confirm'
            ]);
        }
        return redirect('/oprec')->withErrors(array('Success' => 'Pendaftaran berhasil'));
    }

    public function organisasi(){
        $anggotas = User::all();

        return view('main.organisasi', ['anggotas' => $anggotas]);
    }
}

