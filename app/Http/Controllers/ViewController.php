<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home(){
        return view('main.home');
    }
    public function inventaris(){
        return view('main.inventaris');
    }
    public function kegiatan(){
        return view('main.kegiatan');
    }
    public function anggota(){
        return view('main.anggota');
    }
    public function login(){
        return view('main.login');
    }
    public function signup(){
        return view('main.signup');
    }
}
