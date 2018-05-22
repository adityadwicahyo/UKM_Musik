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
		$user = User::find($data['id']);

		$validator = Validator::make($data, [
			'Foto_User' => 'required'
		]);

		if ($validator->fails()) {
		}
		else{
			$image = $request->file('Foto_User');
			$input['imageName'] = $data['NRP_User'] . '.' . $image->getClientOriginalExtension();
			$destinationPath = public_path('data\Foto_User');
			$image->move($destinationPath, $input['imageName']);
			$data['Foto_User'] = "data/Foto_User/" . $input['imageName'];
		}

		$validktm = Validator::make($data, [
			'KTM_User' => 'required'
		]);

		if ($validktm->fails()) {
		}
		else{
			$ktm = $request->file('KTM_User');
			$input['ktmName'] = $data['NRP_User'] . '.' . $ktm->getClientOriginalExtension();
			$destinationPath = public_path('data\KTM_User');
			$ktm->move($destinationPath, $input['ktmName']);
			$data['KTM_User'] = $destinationPath . "\\" . $input['ktmName'];
		}

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
