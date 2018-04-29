<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use App\User;

class SignupController extends Controller
{
    public function store(Request $request){
        $data = $request->all();

        $validator = Validator::make($data, [
            'NRP_User' => 'required|min:14|max:14|unique:users',
            'Nama_User' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'KTM_User' => 'required',
            'Foto_User' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/signup')
            ->withErrors($validator)
            ->withInput();
        }
        else{

            //Encrypt password
            $data['Password_User'] = bcrypt($data['password']);

            //Upload Image
            $image = $request->file('Foto_User');
            $input['imageName'] = $data['NRP_User'] . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('data\Foto_User');
            $image->move($destinationPath, $input['imageName']);
            $data['Foto_User'] = "data/Foto_User/" . $input['imageName'];

            //Upload Document
            $ktm = $request->file('KTM_User');

            $input['ktmName'] = $data['NRP_User'] . '.' . $ktm->getClientOriginalExtension();
            $destinationPath = public_path('data\KTM_User');
            $ktm->move($destinationPath, $input['ktmName']);
            $data['KTM_User'] = $destinationPath . "\\" . $input['ktmName'];

            User::create($data, [
                'except' => '_token',
                'except' => 'confirm'
            ]);
        }
        return redirect('/login')->withErrors(array('Success' => 'Signup berhasil silahkan login'));
    }
}
