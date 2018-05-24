<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use\App\User;

class ProfilController extends Controller
{
	public function viewEditProfil(){
		return view('main.editprofil');
	}

	public function updateProfil(Request $request){
		$data = $request->all();
		$user = User::find($data['ID_Mahasiswa']);

		//Validate All
		$validall = Validator::make($data, [
			'Nama_Mahasiswa' => 'required',
			'NRP_Mahasiswa' => 'required|min:14|max:14',
			'Email_Mahasiswa' => 'required',
			'No_telp_Mahasiswa' => 'required'
		]);
		if ($validall->fails()) {
			return redirect('/editprofil')
			->withErrors($validall)
			->withInput();
		}

		//Validate Foto
		$validator = Validator::make($data, [
			'Foto_Mahasiswa' => 'required'
		]);
		if ($validator->fails()) {
		}
		else{
			//Upload Image
			$image = $request->file('Foto_Mahasiswa');
			$input['imageName'] = $data['NRP_Mahasiswa'] . '.' . $image->getClientOriginalExtension();
			$destinationPath = public_path('data\Mahasiswa'.'\\'.$data['NRP_Mahasiswa']);
			$image->move($destinationPath, $input['imageName']);
			$data['Foto_Mahasiswa'] = "data/Mahasiswa/".$data['NRP_Mahasiswa']."/". $input['imageName'];
		}

		//Validate Berkas
		$validberkas = Validator::make($data, [
			'Berkas_Mahasiswa' => 'required'
		]);
		if ($validberkas->fails()) {
		}
		else{
			//Upload Document
			$berkas = $request->file('Berkas_Mahasiswa');
			$input['berkasName'] = $data['NRP_Mahasiswa'] . '.' . $berkas->getClientOriginalExtension();
			$destinationPath = public_path('data\Mahasiswa'.'\\'.$data['NRP_Mahasiswa']);
			$berkas->move($destinationPath, $input['berkasName']);
			$data['Berkas_Mahasiswa'] = "data/Mahasiswa/".$data['NRP_Mahasiswa']."/". $input['berkasName'];
		}

		//Validate Password
		$validpass = Validator::make($data, [
			'password' => 'required'
		]);
		if ($validpass->fails()) {
			$data['password'] = $user->password;
		}
		else{
			$validconf = Validator::make($data, [
				'password' => 'confirmed',
				'password_confirmation' => 'required'
			]);

			if ($validconf->fails()) {
				return redirect('/editprofil')
				->withErrors($validconf)
				->withInput();
			}

			//Encrypt password
			$data['password'] = bcrypt($data['password']);
		}

		$user->fill($data);
		$user->save();

		return redirect('/editprofil')->withErrors(array('Success' => 'Data profil berhasil diubah'));
	}
}
