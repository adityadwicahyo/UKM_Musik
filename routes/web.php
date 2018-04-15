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

Route::get('/', 'ViewController@home');

Route::get('/inventaris', 'InventarisController@getIndex');
Route::get('/inventaris/pinjam/{id}', 'InventarisController@pinjam');
Route::post('/inventaris/pinjam', 'InventarisController@pinjamStore');

Route::get('/kegiatan', 'ViewController@kegiatan');
Route::get('/pendaftaran', 'ViewController@anggota');
Route::get('/login', 'ViewController@login');

Route::get('/signup', 'ViewController@signup');

Route::get('/oprec', 'ViewController@oprec');
Route::post('/oprec', 'AnggotasController@store');

Route::get('/organisasi', 'AnggotasController@organisasi');

Route::get('/calendar', function(){
	return view('partials.calendar');
});
