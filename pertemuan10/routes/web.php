<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', function () {
    return view('auth.login');
})->name('welcome');

Auth::routes();
 
Route::group(['middleware' => 'auth'], function () {
     Route::resource('/karyawan', 'KaryawanController');
     Route::resource('/divisi', 'DivisiController');
     Route::resource('/jabatan', 'JabatanController');
     Route::resource('/status', 'StatusController');
});

Route::get('home', 'HomeController@index')->name('home');