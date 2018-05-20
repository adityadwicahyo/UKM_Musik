<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi;
use Auth;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function getIndex()
    {
        $informasi = Informasi::all();
        return view('main.home', ['informasi' => $informasi]);
    }
}
