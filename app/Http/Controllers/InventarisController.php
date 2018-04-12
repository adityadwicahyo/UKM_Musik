<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventaris;

class InventarisController extends Controller
{
    public function getIndex(){
    	$inventaris = Inventaris::all();

    	return view('main.inventaris', ['inventaris' => $inventaris]);
    }
}
