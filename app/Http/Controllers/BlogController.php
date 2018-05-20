<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi;

class BlogController extends Controller
{
    public function getIndex($id){
		$informasi = Informasi::all();
		$artikel = Informasi::find($id);
		return view('main.blog', ['informasi' => $informasi], ['artikel' => $artikel]);
	}
	public function getFirstBlog(){
		$informasi = Informasi::all();
		$artikel = Informasi::all()->last();
		return view('main.blog', ['informasi' => $informasi], ['artikel' => $artikel]);
	}
}
