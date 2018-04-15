<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use App\Inventaris;
use App\Anggotas;
use App\Peminjamans;

class InventarisController extends Controller
{
	public function getIndex(){
		$inventaris = Inventaris::all();

		return view('main.inventaris', ['inventaris' => $inventaris]);
	}

	public function pinjam($id){
		$inventaris = Inventaris::find($id);

		return view('main.pinjam', ['inventaris' => $inventaris]);
	}

	public function pinjamStore(Request $request){
		$data = $request->all();

		$inventaris = Inventaris::find($data['id']);

		$validator = Validator::make($data, [
			'Jumlah_Barang' => 'required|min:1',
			'Tanggal_Kembali' => 'required',
		]);

		if ($validator->fails()) {
			return redirect('/inventaris/pinjam/'.$data['id'])
			->withErrors($validator)
			->withInput();
		}
		else{
			if($inventaris->jumlah_inv < $data['Jumlah_Barang']){
				return redirect()->back()->withErrors(array('Jumlah_Barang' => 'Jumlah melebihi jumlah barang saat ini'));
			}
			else{
				$inventaris->jumlah_inv = ($inventaris->jumlah_inv - $data['Jumlah_Barang']);
				$inventaris->save();
				$data['Tanggal_Peminjaman'] = now()->format('Y-m-d');
				$data['Nama_Barang'] = $inventaris->nama_inv;
            // $data['NRP_Peminjam'] = 
            // dd($data);
				Peminjamans::create($data, [
					'except' => '_token',
				]);
			}
		}
		return redirect('/inventaris');
	}
}
