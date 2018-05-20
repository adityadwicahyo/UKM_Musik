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

// Route::get('/about', function () {
//     return view('main.about');
// });
Route::get('/', 'HomeController@getIndex');

Route::get('/blog/{id}', 'BlogController@getIndex');
Route::get('/blog', 'BlogController@getFirstBlog');

Route::get('/inventaris', 'InventarisController@getIndex');
Route::get('/inventaris/pinjam/{id}', 'InventarisController@pinjam');
Route::post('/inventaris/pinjam', 'InventarisController@pinjamStore');

Route::get('/kegiatan', 'KegiatansController@getIndex');
Route::get('/kegiatan/{id}', 'KegiatansController@detailKegiatan');
Route::get('/kegiatan/{id}/pendaftaran', 'KegiatansController@pendaftaranKegiatan');
Route::post('/kegiatan/pendaftaran', 'KegiatansController@pendaftaranStore');

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
Route::get('/tambahkegiatan', 'AdminController@viewTambahKegiatan');
Route::post('/tambahkegiatan', 'AdminController@storeKegiatan');

Route::get('/admininventaris', 'AdminController@adminInventaris');
Route::get('/tambahinventaris', 'AdminController@viewTambahInventaris');
Route::post('/tambahinventaris', 'AdminController@storeInventaris');
Route::get('/editinventaris/{id}', 'AdminController@viewEditInventaris');
Route::post('/editinventaris', 'AdminController@updateInventaris');
Route::get('/deleteinventaris/{id}', 'AdminController@deleteInventaris');

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
