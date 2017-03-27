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

// Route::get('/', function () {
//     return view('dashboard.index');
// });

Auth::routes();
Route::get('/', 'DashboardController@index');
Route::get('logout', 'Auth\LoginController@logout');
//Pelayanan Kesehatan
Route::resource('kesehatan', 'KesehatanController');
Route::get('kesehatan/delete/{id}', 'KesehatanController@destroy');
Route::get('kesehatan/pengobatan/{id}', 'PengobatanController@index');
Route::get('kesehatan/pengobatan/create/{id}', 'PengobatanController@create');
Route::post('kesehatan/pengobatan', 'PengobatanController@store');
Route::get('kesehatan/pengobatan/edit/{id}', 'PengobatanController@edit');
Route::post('kesehatan/pengobatan/edit/{id}', 'PengobatanController@update');
Route::get('kesehatan/pengobatan/delete/{id}', 'PengobatanController@destroy');
//Pelayanan Pendidikan
Route::resource('pendidikan', 'PendidikanController');
Route::get('pendidikan/delete/{id}', 'PendidikanController@destroy');
Route::get('pendidikan/penerima/{id}', 'PenerimaController@index');
Route::get('pendidikan/penerima/create/{id}', 'PenerimaController@create');
Route::post('pendidikan/penerima', 'PenerimaController@store');
Route::get('pendidikan/penerima/edit/{id}', 'PenerimaController@edit');
Route::post('pendidikan/penerima/edit/{id}', 'PenerimaController@update');
Route::get('pendidikan/penerima/delete/{id}', 'PenerimaController@destroy');
Route::get('pendidikan/penerima/view/{id}', 'PenerimaController@show');
//Pelayanan Bencana Alam
Route::resource('bencana', 'BencanaController');
Route::get('bencana/delete/{id}', 'BencanaController@destroy');
Route::get('bencana/pemberian/{id}', 'PemberianController@index');
Route::get('bencana/pemberian/create/{id}', 'PemberianController@create');
Route::post('bencana/pemberian', 'PemberianController@store');
Route::get('bencana/pemberian/edit/{id}', 'PemberianController@edit');
Route::post('bencana/pemberian/edit/{id}', 'PemberianController@update');
Route::get('bencana/pemberian/delete/{id}', 'PemberianController@destroy');
//Komunikasi Sosial
Route::resource('komunikasi', 'KomunikasiController');
Route::get('komunikasi/delete/{id}', 'KomunikasiController@destroy');
//Partisipasi Hari Besar
Route::resource('hari-besar', 'HariBesarController');
Route::get('hari-besar/delete/{id}', 'HariBesarController@destroy');
//Partisipasi Kegiatan Masyarakat
Route::resource('kegiatan-masyarakat', 'KegiatanController');
Route::get('kegiatan-masyarakat/delete/{id}', 'KegiatanController@destroy');
