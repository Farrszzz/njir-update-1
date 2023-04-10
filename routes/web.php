<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

 
 //
 Route::get('/home', function(){
     return view('Home');
 });

 Route::get('/about', function(){
     return view('about');
 });

Route::get('/login', '\App\Http\Controllers\loginController@index')->name('login')->middleware('guest');
Route::post('/login', '\App\Http\Controllers\loginController@authenticate');
Route::post('/logout', '\App\Http\Controllers\loginController@logout');

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middLeware('auth');
 
Route::get('/pegawai', '\App\Http\Controllers\AdminController@index'); // Menampilkan data yang ada di database
Route::post('/pegawai/create', '\App\Http\Controllers\AdminController@create'); // Membuat data baru
Route::get('/pegawai/{id}/edit', '\App\Http\Controllers\AdminController@edit'); // Mengedit data yang sudah ada
Route::post('/pegawai/{id}/update', '\App\Http\Controllers\AdminController@update'); // Mengupdate data yang sudah diedit
Route::get('/pegawai/{id}/delete', '\App\Http\Controllers\AdminController@delete'); // Menghapus data

Route::get('/mall1', function() {
    return view('mall1.index');
});

// Petugas Masuk Mall 1
Route::get('/pmasuk1', '\App\Http\Controllers\pmasuk1Controller@index');
Route::post('/pmasuk1/add', '\App\Http\Controllers\pmasuk1Controller@add');

// Petugas Ruang Mall 1
Route::get('/pruang1', '\App\Http\Controllers\pruang1Controller@index');
Route::get('/pruang1/{id}/edit', '\App\Http\Controllers\pruang1Controller@edit');
Route::post('/pruang1/{id}/update', '\App\Http\Controllers\pruang1Controller@update');

// Petugas Keluar Mall 1
Route::get('/pkeluar1', '\App\Http\Controllers\pkeluar1Controller@index');
Route::get('/pkeluar1/{id}/edit', '\App\Http\Controllers\pkeluar1Controller@edit');
Route::post('/pkeluar1/{id}/update', '\App\Http\Controllers\pkeluar1Controller@update');

Route::get('/mall2', function() {
    return view('mall2.index');
});
Route::get('/mall3', function() {
    return view('mall3.index');
});