<?php

namespace App\Http\Controllers;

use DateTime;
use Validator;

use Illuminate\Http\Request;
use App\Kegiatans;
use App\Pendaftarans;

class KegiatansController extends Controller
{
	public function getIndex(){
		$kegiatans = Kegiatans::all();
		return view('main.kegiatan', ['kegiatans' => $kegiatans]);
	}

	public function getIndexRutin(){
		$kegiatans = Kegiatans::all();
		return view('main.kegiatanrutin', ['kegiatans' => $kegiatans]);
	}

	public function getIndexPendaftaran(){
		$kegiatans = Kegiatans::all();
		return view('main.kegiatanpendaftaran', ['kegiatans' => $kegiatans]);
	}

	public function getPendaftar($id){
		$pendaftaran = Pendaftarans::find($id);
		return view('main.pendaftarkegiatan', ['pendaftaran' => $pendaftaran]);
	}

	public function detailKegiatan($id){
		$kegiatans = Kegiatans::find($id);
		return view('main.detailkegiatan', ['kegiatans' => $kegiatans]);
	}

	public function pendaftaranKegiatan($id){
		$kegiatans = Kegiatans::find($id);
		return view('main.pendaftaranKegiatan', ['kegiatans' => $kegiatans]);
	}

	public function pendaftaranStore(Request $request){
		$data = $request->all();

		$kegiatans = Kegiatans::find($data['id']);

		$validator = Validator::make($data, [
			'NRP_Pendaftar' => 'required|min:14|max:14',
			'Berkas_Pendaftar' => 'required'
		]);

		if ($validator->fails()) {
			return redirect('/kegiatan/'.$data['id'].'/pendaftaran')
			->withErrors($validator)
			->withInput();
		}
		else{
			$doc = $request->file('Berkas_Pendaftar');

            $input['docName'] = $data['NRP_Pendaftar'] . '.' . $doc->getClientOriginalExtension();
            $destinationPath = public_path('data\Pendaftaran' . "\\" . $kegiatans->Nama_Kegiatan);
            $doc->move($destinationPath, $input['docName']);
            
            $data['Berkas_Pendaftar'] = $destinationPath . "\\" . $input['docName'];

			$data['Id_Kegiatan'] = $kegiatans->id;
			Pendaftarans::create($data, [
				'except' => '_token',
			]);
		}
		return redirect('/kegiatan/'.$data['id'])->withErrors(array('Success' => 'Pendaftaran berhasil'));
	}
}
