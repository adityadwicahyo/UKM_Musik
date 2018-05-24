<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kegiatans;
use App\Inventaris;
use App\Informasi;
use App\Peminjamans;
use App\Pendaftarans;
use App\User;
use Validator;

class AdminController extends Controller
{
	public function adminKegiatan(){
		$kegiatans = Kegiatans::all();
		return view('admin.admin_kegiatan', ['kegiatans' => $kegiatans]);
	}

	public function adminInventaris(){
		$inventaris = Inventaris::all();
		$peminjamans = Peminjamans::all();
		return view('admin.admin_inventaris', ['inventaris' => $inventaris], ['peminjamans' => $peminjamans]);
	}

	public function adminBlog(){
		$informasi = Informasi::all();
		return view('admin.admin_blog', ['informasi' => $informasi]);
	}

	public function adminAnggota(){
		$anggotas = User::all();
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
		$anggota = User::find($id);
		return view('admin.admin_editanggota', ['anggota' => $anggota]);
	}

	public function viewTambahKegiatanRutin(){

		return view('admin.admin_tambahkegiatanrutin');
	}

	public function viewTambahKegiatanPendaftaran(){

		return view('admin.admin_tambahkegiatanpendaftaran');
	}

	public function viewTambahInventaris(){
		
		return view('admin.admin_tambahinventaris');
	}

	public function viewTambahBlog(){
		
		return view('admin.admin_tambahblog');
	}

	public function getPendaftar($id){
		$pendaftaran = Pendaftarans::all()->where('ID_Kegiatan', $id);
		$user = User::all();
		$kegiatan = Kegiatans::find($id);
		return view('admin.admin_pendaftarkegiatan', ['pendaftaran' => $pendaftaran], ['user' => $user], ['kegiatan' => $kegiatan]);
	}

	public function tolakPendaftar($id){
		$pendaftaran = Pendaftarans::find($id);
		$cek = $pendaftaran->ID_Kegiatan;
		$pendaftaran->delete();
		return redirect('/pendaftarkegiatan/'.$cek);
	}

	public function storeKegiatanRutin(Request $request){
		$data = $request->all();
 		// dd($data);
		$validator = Validator::make($data, [
			'Nama_Kegiatan' => 'required',
			'Tanggal_Kegiatan' => 'required',
			'Waktu_Kegiatan' => 'required',
			'Deskripsi_Kegiatan' => 'required'
		]);

		if ($validator->fails()) {
			return redirect('/tambahkegiatanrutin')
			->withErrors($validator)
			->withInput();
		}
		else{
			$data['Tipe_Kegiatan'] = 'Rutin';
			
			Kegiatans::create($data, [
				'except' => '_token',
			]);
		}
		return redirect('/adminkegiatan')->withErrors(array('Success' => 'Kegiatan berhasil ditambahkan'));
	}

	public function storeKegiatanPendaftaran(Request $request){
		$data = $request->all();

		$validator = Validator::make($data, [
			'Nama_Kegiatan' => 'required',
			'Foto_Kegiatan' => 'required',
			'Tanggal_Kegiatan' => 'required',
			'Waktu_Kegiatan' => 'required',
			'Batas_Tanggal_Kegiatan' => 'required',
			'Batas_Waktu_Kegiatan' => 'required',
			'Deskripsi_Kegiatan' => 'required'
		]);

		if ($validator->fails()) {
			return redirect('/tambahkegiatanpendaftaran')
			->withErrors($validator)
			->withInput();
		}
		else{
			$image = $request->file('Foto_Kegiatan');
			$input['imageName'] = $data['Nama_Kegiatan'] . '.' . $image->getClientOriginalExtension();
			$destinationPath = public_path('data\Kegiatan');
			$image->move($destinationPath, $input['imageName']);
			$data['Foto_Kegiatan'] = "data/Kegiatan/" . $input['imageName'];

			$data['Tipe_Kegiatan'] = 'Pendaftaran';

			Kegiatans::create($data, [
				'except' => '_token',
			]);
		}
		return redirect('/adminkegiatan')->withErrors(array('Success' => 'Kegiatan berhasil ditambahkan'));
	}

	public function storeInventaris(Request $request){
		$data = $request->all();

		$validator = Validator::make($data, [
			'Nama_Inventaris' => 'required',
			'Foto_Inventaris' => 'required',
			'Deskripsi_Inventaris' => 'required',
			'Jumlah_Inventaris' => 'required'
		]);

		if ($validator->fails()) {
			return redirect('/tambahinventaris')
			->withErrors($validator)
			->withInput();
		}
		$image = $request->file('Foto_Inventaris');
		$input['imageName'] = $data['Nama_Inventaris'] . '.' . $image->getClientOriginalExtension();
		$destinationPath = public_path('data\Inventaris');
		$image->move($destinationPath, $input['imageName']);
		$data['Foto_Inventaris'] = "data/Inventaris/" . $input['imageName'];

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
		$kegiatans = Kegiatans::find($data['ID_Kegiatan']);

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
		$inventaris = Inventaris::find($data['ID_Inventaris']);

		$validator = Validator::make($data, [
			'Foto_Inventaris' => 'required'
		]);

		if ($validator->fails()) {
		}
		else{
			$image = $request->file('Foto_Inventaris');
			$input['imageName'] = $data['Nama_Inventaris'] . '.' . $image->getClientOriginalExtension();
			$destinationPath = public_path('data\Inventaris');
			$image->move($destinationPath, $input['imageName']);
			$data['Foto_Inventaris'] = "data/Inventaris/" . $input['imageName'];
		}

		$inventaris->fill($data);
		$inventaris->save();

		return redirect('/admininventaris')->withErrors(array('Success' => 'Inventaris berhasil diubah'));
	}

	public function updateBlog(Request $request){
		$data = $request->all();
		$informasi = Informasi::find($data['ID_Informasi']);

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

		$anggota = User::find($data['ID_Mahasiswa']);

		$validator = Validator::make($data, [
			'Foto_Mahasiswa' => 'required'
		]);

		if ($validator->fails()) {
		}
		else{
			//Upload Image
			$image = $request->file('Foto_Mahasiswa');
			$input['imageName'] = $data['NRP_Mahasiswa'] . '.' . $image->getClientOriginalExtension();
			$destinationPath = public_path('data\Mahasiswa'.'\\'.$data['NRP_Mahasiswa']);
			$image->move($destinationPath, $input['imageName']);
			$data['Foto_Mahasiswa'] = "data/Mahasiswa/".$data['NRP_Mahasiswa']."/". $input['imageName'];
		}

		$anggota->fill($data);
		$anggota->save();

		return redirect('/adminanggota')->withErrors(array('Success' => 'Data anggota berhasil diubah'));
	}

	public function terimaAnggota($id){
		$anggota = User::find($id);

		$anggota->Status_Mahasiswa = 'Anggota';
		$anggota->save();

		return redirect('/adminanggota')->withErrors(array('Success' => 'Pendaftar berhasil disetujui dan resmi menjadi anggota'));
	}

	public function setujuAkun($id){
		$anggota = User::find($id);

		$anggota->Status_Mahasiswa = 'Verified';
		$anggota->save();

		return redirect('/adminanggota')->withErrors(array('Success' => 'Mahasiswa berhasil terverifikasi'));
	}

	public function tolakAnggota($id){
		$anggota = User::find($id);
		$anggota->delete();
		return redirect('/adminanggota')->withErrors(array('Tolak' => 'Pendaftar telah ditolak'));	
	}

	public function tolakPeminjaman($id){
		$peminjaman = Peminjamans::find($id);
		$inventaris = Inventaris::find($peminjaman->ID_Barang);
		$inventaris->Jumlah_Inventaris = $inventaris->Jumlah_Inventaris + $peminjaman->Jumlah_Barang;
		$inventaris->save();
		$peminjaman->delete();
		return redirect('/admininventaris')->withErrors(array('TolakPeminjaman' => 'Peminjaman telah ditolak'));	
	}

	public function setujuPeminjaman($id){
		$peminjaman = Peminjamans::find($id);
		$peminjaman->Status_Peminjaman = 'Setuju';
		$peminjaman->save();
		return redirect('/admininventaris')->withErrors(array('SetujuPeminjaman' => 'Peminjaman telah disetujui'));	
	}

	public function ambilPeminjaman($id){
		$peminjaman = Peminjamans::find($id);
		$peminjaman->Status_Peminjaman = 'Diambil';
		$peminjaman->save();
		return redirect('/admininventaris')->withErrors(array('AmbilPeminjaman' => 'Peminjaman telah diambil'));	
	}

	public function kembaliPeminjaman($id){
		$peminjaman = Peminjamans::find($id);
		$inventaris = Inventaris::find($peminjaman->ID_Inventaris);
		$inventaris->Jumlah_Inventaris = $inventaris->Jumlah_Inventaris + $peminjaman->Jumlah_Barang;
		$inventaris->save();
		$peminjaman->delete();
		return redirect('/admininventaris')->withErrors(array('KembaliPeminjaman' => 'Peminjaman telah dikembalikan'));	
	}

	public function hapusAnggota($id){
		$anggota = User::find($id);
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
