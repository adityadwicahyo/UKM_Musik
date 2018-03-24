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

Route::get('/test', function () {
    return view('main.inventaris');
});

Route::get('/', 'ViewController@home');
Route::get('/about', 'ViewController@about');
Route::get('/inventaris', 'ViewController@inventaris');
Route::get('/kegiatan', 'ViewController@kegiatan');
Route::get('/contact', 'ViewController@contact');
Route::get('/pendaftaran', 'ViewController@pendaftaran');