<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home(){
        return view('main.home');
    }
    public function about(){
        return view('main.about');
    }
    public function inventaris(){
        return view('main.inventaris');
    }
    public function kegiatan(){
        return view('main.kegiatan');
    }
    public function formkegiatan(){
        return view('main.formkegiatan');
    }
    public function contact(){
        return view('main.contact');
    }
    public function pendaftaran(){
        return view('main.pendaftaran');
    }
    public function login(){
        return view('main.login');
    }
    public function signup(){
        return view('main.signup');
    }
}
