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
Route::get('/logout', function () {
    Auth::logout();
    return "Sukses logout";
});

// Route::get('/calendar', 'KegiatansController@getIndex');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
