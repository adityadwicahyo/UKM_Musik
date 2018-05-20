<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatans;
use App\Inventaris;
use App\Informasi;
use App\Anggotas;
use Validator;

class AdminController extends Controller
{
	public function adminKegiatan(){
		$kegiatans = Kegiatans::all();
		return view('admin.admin_kegiatan', ['kegiatans' => $kegiatans]);
	}

	public function adminInventaris(){
		$inventaris = Inventaris::all();
		return view('admin.admin_inventaris', ['inventaris' => $inventaris]);
	}

	public function adminBlog(){
		$informasi = Informasi::all();
		return view('admin.admin_blog', ['informasi' => $informasi]);
	}

	public function adminAnggota(){
		$anggotas = Anggotas::all();
		return view('admin.admin_anggota', ['anggotas' => $anggotas]);
	}

	public function viewEditKegiatan($id){
		$kegiatans = Kegiatans::find($id);
		return view('admin.admin_editkegiatan', ['kegiatans' => $kegiatans]);
	}

	public function viewEditInventaris($id){
		$inventaris = Inventaris::find($id);
		return view('admin.admin_editinventaris', ['inventaris' => $inventaris]);
	}

	public function viewEditBlog($id){
		$informasi = Informasi::find($id);
		return view('admin.admin_editblog', ['informasi' => $informasi]);
	}

	public function viewEditAnggota($id){
		$anggota = Anggotas::find($id);
		return view('admin.admin_editanggota', ['anggota' => $anggota]);
	}

	public function viewTambahKegiatan(){

		return view('admin.admin_tambahkegiatan');
	}

	public function viewTambahInventaris(){
		
		return view('admin.admin_tambahinventaris');
	}

	public function viewTambahBlog(){
		
		return view('admin.admin_tambahblog');
	}

	public function storeKegiatan(Request $request){
		$data = $request->all();

		if($data['Tipe_Kegiatan'] == 'Rutin'){
			$validator = Validator::make($data, [
				'Nama_Kegiatan' => 'required',
				'Tanggal_Kegiatan' => 'required',
				'Waktu_Kegiatan' => 'required',
				'Deskripsi_Kegiatan' => 'required',
				'Tipe_Kegiatan' => 'required'
			]);
		}
		elseif($data['Tipe_Kegiatan'] == 'Pendaftaran'){
			$validator = Validator::make($data, [
				'Nama_Kegiatan' => 'required',
				'Foto_Kegiatan' => 'required',
				'Tanggal_Kegiatan' => 'required',
				'Waktu_Kegiatan' => 'required',
				'Batas_Tanggal_Kegiatan' => 'required',
				'Batas_Waktu_Kegiatan' => 'required',
				'Deskripsi_Kegiatan' => 'required',
				'Tipe_Kegiatan' => 'required'
			]);
		}
		else{
			$validator = Validator::make($data, [
				'Nama_Kegiatan' => 'required',
				'Foto_Kegiatan' => 'required',
				'Tanggal_Kegiatan' => 'required',
				'Waktu_Kegiatan' => 'required',
				'Batas_Tanggal_Kegiatan' => 'required',
				'Batas_Waktu_Kegiatan' => 'required',
				'Deskripsi_Kegiatan' => 'required',
				'Tipe_Kegiatan' => 'required'
			]);
		}

		if ($validator->fails()) {
			return redirect('/tambahkegiatan')
			->withErrors($validator)
			->withInput();
		}
		else{
			if($data['Tipe_Kegiatan'] == 'Pendaftaran'){
				$image = $request->file('Foto_Kegiatan');
				$input['imageName'] = $data['Nama_Kegiatan'] . '.' . $image->getClientOriginalExtension();
				$destinationPath = public_path('data\Kegiatan');
				$image->move($destinationPath, $input['imageName']);
				$data['Foto_Kegiatan'] = "data/Kegiatan/" . $input['imageName'];
			}
			Kegiatans::create($data, [
				'except' => '_token',
			]);
		}
		return redirect('/adminkegiatan')->withErrors(array('Success' => 'Kegiatan berhasil ditambahkan'));
	}

	public function storeInventaris(Request $request){
		$data = $request->all();

		$validator = Validator::make($data, [
			'nama_inv' => 'required',
			'foto_inv' => 'required',
			'deskripsi_inv' => 'required',
			'jumlah_inv' => 'required'
		]);

		if ($validator->fails()) {
			return redirect('/tambahinventaris')
			->withErrors($validator)
			->withInput();
		}
		$image = $request->file('foto_inv');
		$input['imageName'] = $data['nama_inv'] . '.' . $image->getClientOriginalExtension();
		$destinationPath = public_path('data\Inventaris');
		$image->move($destinationPath, $input['imageName']);
		$data['foto_inv'] = "data/Inventaris/" . $input['imageName'];

		Inventaris::create($data, [
			'except' => '_token',
		]);
		return redirect('/admininventaris')->withErrors(array('Success' => 'Inventaris berhasil ditambahkan'));
	}

	public function storeBlog(Request $request){
		$data = $request->all();
		// dd($data);
		$validator = Validator::make($data, [
			'Judul_Informasi' => 'required',
			'Isi_Informasi' => 'required',
			'Singkat_Informasi' => 'required',
			'Gambar_Informasi' => 'required'
		]);

		if ($validator->fails()) {
			return redirect('/tambahblog')
			->withErrors($validator)
			->withInput();
		}
		$image = $request->file('Gambar_Informasi');
		$input['imageName'] = $data['Judul_Informasi'] . '.' . $image->getClientOriginalExtension();
		$destinationPath = public_path('data\Informasi');
		$image->move($destinationPath, $input['imageName']);
		$data['Gambar_Informasi'] = "data/Informasi/" . $input['imageName'];

		$data['Tanggal_Informasi'] = now()->format('Y-m-d');

		Informasi::create($data, [
			'except' => '_token',
		]);
		return redirect('/adminblog')->withErrors(array('Success' => 'Informasi berhasil ditambahkan'));
	}

	public function updateKegiatan(Request $request){
		$data = $request->all();
		$kegiatans = Kegiatans::find($data['id']);

		if($kegiatans->Tipe_Kegiatan == 'Pendaftaran'){
			$validator = Validator::make($data, [
				'Foto_Kegiatan' => 'required'
			]);

			if ($validator->fails()) {
			}
			else{
				$image = $request->file('Foto_Kegiatan');
				$input['imageName'] = $data['Nama_Kegiatan'] . '.' . $image->getClientOriginalExtension();
				$destinationPath = public_path('data\Kegiatan');
				$image->move($destinationPath, $input['imageName']);
				$data['Foto_Kegiatan'] = "data/Kegiatan/" . $input['imageName'];
			}
		}

		$kegiatans->fill($data);
		$kegiatans->save();

		return redirect('/adminkegiatan')->withErrors(array('Success' => 'Kegiatan berhasil diubah'));
	}

	public function updateInventaris(Request $request){
		$data = $request->all();
		$inventaris = Inventaris::find($data['id']);

		$validator = Validator::make($data, [
			'foto_inv' => 'required'
		]);

		if ($validator->fails()) {
		}
		else{
			$image = $request->file('foto_inv');
			$input['imageName'] = $data['nama_inv'] . '.' . $image->getClientOriginalExtension();
			$destinationPath = public_path('data\Inventaris');
			$image->move($destinationPath, $input['imageName']);
			$data['foto_inv'] = "data/Inventaris/" . $input['imageName'];
		}

		$inventaris->fill($data);
		$inventaris->save();

		return redirect('/admininventaris')->withErrors(array('Success' => 'Inventaris berhasil diubah'));
	}

	public function updateBlog(Request $request){
		$data = $request->all();
		$informasi = Informasi::find($data['id']);

		$validator = Validator::make($data, [
			'Gambar_Informasi' => 'required'
		]);

		if ($validator->fails()) {
		}
		else{
			$image = $request->file('Gambar_Informasi');
			$input['imageName'] = $data['Judul_Informasi'] . '.' . $image->getClientOriginalExtension();
			$destinationPath = public_path('data\Informasi');
			$image->move($destinationPath, $input['imageName']);
			$data['Gambar_Informasi'] = "data/Informasi/" . $input['imageName'];
		}

		$informasi->fill($data);
		$informasi->save();

		return redirect('/adminblog')->withErrors(array('Success' => 'Informasi berhasil diubah'));
	}

	public function updateAnggota(Request $request){
		$data = $request->all();

		$anggota = Anggotas::find($data['id']);

		$validator = Validator::make($data, [
			'foto_anggota' => 'required'
		]);

		if ($validator->fails()) {
		}
		else{
			$image = $request->file('foto_anggota');
            $input['imageName'] = $data['nrp_anggota'] . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('data\Oprec'.'\\'.$data['nrp_anggota']);
            $image->move($destinationPath, $input['imageName']);
            $data['foto_anggota'] = 'data\Oprec'.'\\'.$data['nrp_anggota'].'\\'.$input['imageName'];
		}

		$anggota->fill($data);
		$anggota->save();

		return redirect('/adminanggota')->withErrors(array('Success' => 'Data anggota berhasil diubah'));
	}

	public function terimaAnggota($id){
		$anggota = Anggotas::find($id);

		$anggota->status_anggota = 'Anggota';
		$anggota->save();

		return redirect('/adminanggota')->withErrors(array('Success' => 'Pendaftar berhasil disetujui dan resmi menjadi anggota'));
	}

	public function tolakAnggota($id){
		$anggota = Anggotas::find($id);
		$anggota->delete();
		return redirect('/adminanggota')->withErrors(array('Tolak' => 'Pendaftar telah ditolak'));	
	}

	public function hapusAnggota($id){
		$anggota = Anggotas::find($id);
		$anggota->delete();
		return redirect('/adminanggota')->withErrors(array('Hapus' => 'Anggota telah dihapus'));	
	}

	public function deleteKegiatan($id){
		$kegiatans = Kegiatans::find($id);
		$kegiatans->delete();
		return redirect('/adminkegiatan');	
	}

	public function deleteInventaris($id){
		$inventaris = Inventaris::find($id);
		$inventaris->delete();
		return redirect('/admininventaris');	
	}

	public function deleteBlog($id){
		$informasi = Informasi::find($id);
		$informasi->delete();
		return redirect('/adminblog');	
	}
}
