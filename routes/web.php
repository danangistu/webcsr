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
Route::resource('kesehatan', 'KesehatanController');
Route::resource('kesehatan/delete/{id}', 'KesehatanController@destroy');

// App::error(function(Exception $exception, $code){
//     Log::error($exception);
//     if (Config::get('app.debug') == false) {
//         return Redirect::route('errors.404');
//     }
// });
