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
// Route::get('/', [
// 	'uses' => 'ViewContrller@home',
// 	'as' => 'view.home'
// ]);

Route::get('/inventaris', 'ViewController@inventaris');
Route::get('/kegiatan', 'ViewController@kegiatan');
Route::get('/pendaftaran', 'ViewController@anggota');
Route::get('/login', 'ViewController@login');
// Route::get('/signup', 'ViewController@login');

Route::get('/signup', [
	'uses' => 'AnggotaController@getSignup',
	'as' => 'user.signup'
]);

Route::post('/signup', [
	'uses' => 'AnggotaController@postSignup',
	'as' => 'user.signup'
]);