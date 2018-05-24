<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use App\Inventaris;
use App\User;
use App\Peminjamans;
use App\Transaksi_peminjaman;

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
		$inventaris = Inventaris::find($data['ID_Inventaris']);

		$validator = Validator::make($data, [
			'Jumlah_Barang' => 'required|integer|min:1',
			'Tanggal_Kembali' => 'required'
		]);

		if ($validator->fails()) {
			return redirect('/inventaris/pinjam/'.$data['ID_Inventaris'])
			->withErrors($validator)
			->withInput();
		}
		elseif($data['Tanggal_Kembali'] < now()){
			return redirect('/inventaris/pinjam/'.$data['ID_Inventaris'])
			->withErrors(array('Tanggal_Kembali' => 'Date must greater than now'))
			->withInput();;
		}
		else{
			if($inventaris->Jumlah_Inventaris < $data['Jumlah_Barang']){
				return redirect()->back()->withErrors(array('Jumlah_Barang' => 'Jumlah melebihi jumlah barang saat ini'));
			}
			else{
				$inventaris->Jumlah_Inventaris = ($inventaris->Jumlah_Inventaris - $data['Jumlah_Barang']);
				$inventaris->save();
				$data['Tanggal_Peminjaman'] = now()->format('Y-m-d');

				$data['Status_Peminjaman'] = 'Tunggu';

				Peminjamans::create($data, [
					'except' => '_token',
				]);

				$peminjam = Peminjamans::all()->last();
				$data['ID_Peminjaman'] = $peminjam->ID_Peminjaman;
				Transaksi_peminjaman::create($data, [
					'except' => '_token'
				]);
			}
		}

		return redirect('/inventaris')->withErrors(array('Success' => 'Peminjaman inventaris berhasil'));
	}
}
