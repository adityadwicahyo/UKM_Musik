<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/tes', function () {
//     return view('user.signup2');
// });

Route::get('/', 'HomeController@getIndex');

Route::get('/editprofil', 'ProfilController@viewEditProfil');
Route::post('/editprofil', 'ProfilController@updateProfil');

Route::get('/blog/{id}', 'BlogController@getIndex');
Route::get('/blog', 'BlogController@getFirstBlog');

Route::get('/inventaris', 'InventarisController@getIndex');
Route::get('/inventaris/pinjam/{id}', 'InventarisController@pinjam');
Route::post('/inventaris/pinjam', 'InventarisController@pinjamStore');

Route::get('/kegiatan', 'KegiatansController@getIndex');
Route::get('/kegiatan/{id}', 'KegiatansController@detailKegiatan');
Route::get('/kegiatan/{id}/pendaftaran', 'KegiatansController@pendaftaranKegiatan');
Route::post('/kegiatan/pendaftaran', 'KegiatansController@pendaftaranStore');
Route::get('/kegiatanrutin', 'KegiatansController@getIndexRutin');
Route::get('/kegiatanpendaftaran', 'KegiatansController@getIndexPendaftaran');

Route::get('/pendaftaran', 'ViewController@anggota');

Route::get('/signup', 'ViewController@signup');
Route::post('/signup', 'SignupController@store');

Route::get('/oprec', 'ViewController@oprec');
Route::post('/oprec', 'AnggotasController@store');

Route::get('/organisasi', 'AnggotasController@organisasi');

Route::get('/login', 'ViewController@login');
Route::post('/login', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@logout');

Route::get('/adminkegiatan', 'AdminController@adminKegiatan');
Route::get('/editkegiatan/{id}', 'AdminController@viewEditKegiatan');
Route::post('/editkegiatan', 'AdminController@updateKegiatan');
Route::get('/deletekegiatan/{id}', 'AdminController@deleteKegiatan');
Route::get('/tambahkegiatanrutin', 'AdminController@viewTambahKegiatanRutin');
Route::get('/tambahkegiatanpendaftaran', 'AdminController@viewTambahKegiatanPendaftaran');
Route::post('/tambahkegiatanrutin', 'AdminController@storeKegiatanRutin');
Route::post('/tambahkegiatanpendaftaran', 'AdminController@storeKegiatanPendaftaran');
Route::get('/pendaftarkegiatan/{id}', 'AdminController@getPendaftar');
Route::get('/tolakpendaftar/{id}', 'AdminController@tolakPendaftar');

Route::get('/admininventaris', 'AdminController@adminInventaris');
Route::get('/tambahinventaris', 'AdminController@viewTambahInventaris');
Route::post('/tambahinventaris', 'AdminController@storeInventaris');
Route::get('/editinventaris/{id}', 'AdminController@viewEditInventaris');
Route::post('/editinventaris', 'AdminController@updateInventaris');
Route::get('/deleteinventaris/{id}', 'AdminController@deleteInventaris');
Route::get('/tolakpeminjaman/{id}', 'AdminController@tolakPeminjaman');
Route::get('/setujupeminjaman/{id}', 'AdminController@setujuPeminjaman');
Route::get('/ambilpeminjaman/{id}', 'AdminController@ambilPeminjaman');
Route::get('/kembalipeminjaman/{id}', 'AdminController@kembaliPeminjaman');

Route::get('/adminblog', 'AdminController@adminBlog');
Route::get('/tambahblog', 'AdminController@viewTambahBlog');
Route::post('/tambahblog', 'AdminController@storeBlog');
Route::get('/editblog/{id}', 'AdminController@viewEditBlog');
Route::post('/editblog', 'AdminController@updateBlog');
Route::get('/deleteblog/{id}', 'AdminController@deleteBlog');

Route::get('/adminanggota', 'AdminController@adminAnggota');
Route::get('/anggotaterima/{id}', 'AdminController@terimaAnggota');
Route::get('/anggotatolak/{id}', 'AdminController@tolakAnggota');
Route::get('/anggotahapus/{id}', 'AdminController@hapusAnggota');
Route::get('/anggotaedit/{id}', 'AdminController@viewEditAnggota');
Route::post('/anggotaedit', 'AdminController@updateAnggota');
Route::get('/akunsetujui/{id}', 'AdminController@setujuAkun');
