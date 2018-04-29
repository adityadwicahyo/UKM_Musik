<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home(){
        return view('main.home');
    }
    public function kegiatan(){
        return view('main.kegiatan');
    }
    public function detailKegiatan($id){
        return view('main.detailkegiatan');
    }
    public function pendaftaranKegiatan($id){
        return view('main.pendaftarankegiatan');
    }
    public function anggota(){
        return view('main.anggota');
    }
    public function login(){
        return view('user.login');
    }
    public function signup(){
        return view('user.signup');
    }
    public function oprec(){
        return view('main.oprec');
    }
}
