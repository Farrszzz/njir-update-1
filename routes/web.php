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



 
 //
//  Route::get('/home', function(){
//      return view('Home');
//  });

//  Route::get('/about', function(){
//      return view('about');
//  });

// Halaman Utama
Route::get('/', function () {
    return view('homepage.index');
});

// Untuk Guest
Route::get('/parkir1', '\App\Http\Controllers\guestController@index');

// Login & Logout
Route::get('/login', '\App\Http\Controllers\loginController@index')->name('login')->middleware('guest');
Route::post('/login', '\App\Http\Controllers\loginController@authenticate');
Route::post('/logout', '\App\Http\Controllers\loginController@logout');

// ADMIN
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth', 'role:Admin');

Route::get('/keuangan', '\App\Http\Controllers\laporanController@index')->middleware(['auth', 'role:Admin']);
 
Route::get('/pegawai', '\App\Http\Controllers\AdminController@index')->middleware(['auth', 'role:Admin']); // Menampilkan data yang ada di database
Route::post('/pegawai/create', '\App\Http\Controllers\AdminController@create')->middleware(['auth', 'role:Admin']); // Membuat data baru
Route::get('/pegawai/{id}/edit', '\App\Http\Controllers\AdminController@edit')->middleware(['auth', 'role:Admin']); // Mengedit data yang sudah ada
Route::post('/pegawai/{id}/update', '\App\Http\Controllers\AdminController@update')->middleware(['auth', 'role:Admin']); // Mengupdate data yang sudah diedit
Route::get('/pegawai/{id}/delete', '\App\Http\Controllers\AdminController@delete')->middleware(['auth', 'role:Admin']); // Menghapus data

Route::get('/mall1', function() {
    return view('mall1.index');
});

// Petugas Masuk Mall 1
Route::get('/pmasuk1', '\App\Http\Controllers\pmasuk1Controller@index')->name('pmasuk1')->middleware(['auth', 'role:Petugas Masuk 1,Admin']);
Route::post('/pmasuk1/add', '\App\Http\Controllers\pmasuk1Controller@add')->middleware(['auth', 'role:Petugas Masuk 1,Admin']);

// Petugas Ruang Mall 1
Route::get('/pruang1', '\App\Http\Controllers\pruang1Controller@index')->name('pruang1')->middleware(['auth', 'role:Petugas Ruang 1,Admin']);
Route::get('/pruang1/{id}/edit', '\App\Http\Controllers\pruang1Controller@edit')->middleware(['auth', 'role:Petugas Ruang 1,Admin']);
Route::post('/pruang1/{id}/update', '\App\Http\Controllers\pruang1Controller@update')->middleware(['auth', 'role:Petugas Ruang 1,Admin']);

// Petugas Keluar Mall 1
Route::get('/pkeluar1', '\App\Http\Controllers\pkeluar1Controller@index')->name('pkeluar1')->middleware(['auth', 'role:Petugas Keluar 1,Admin']);
Route::get('/pkeluar1/{id}/edit', '\App\Http\Controllers\pkeluar1Controller@edit')->middleware(['auth', 'role:Petugas Keluar 1,Admin']);
Route::post('/pkeluar1/{id}/update', '\App\Http\Controllers\pkeluar1Controller@update')->middleware(['auth', 'role:Petugas Keluar 1,Admin']);

Route::get('/mall2', function() {
    return view('mall2.index');
});

// Petugas Masuk Mall 2
Route::get('/pmasuk2', '\App\Http\Controllers\pmasuk2Controller@index')->name('pmasuk2')->middleware(['auth', 'role:Petugas Masuk 2,Admin']);
Route::post('/pmasuk2/add', '\App\Http\Controllers\pmasuk2Controller@add')->middleware(['auth', 'role:Petugas Masuk 2,Admin']);

// Petugas Ruang Mall 2
Route::get('/pruang2', '\App\Http\Controllers\pruang2Controller@index')->name('pruang2')->middleware(['auth', 'role:Petugas Ruang 2,Admin']);
Route::get('/pruang2/{id}/edit', '\App\Http\Controllers\pruang2Controller@edit')->middleware(['auth', 'role:Petugas Ruang 2,Admin']);
Route::post('/pruang2/{id}/update', '\App\Http\Controllers\pruang2Controller@update')->middleware(['auth', 'role:Petugas Ruang 2,Admin']);

// Petugas Keluar Mall 2
Route::get('/pkeluar2', '\App\Http\Controllers\pkeluar2Controller@index')->name('pkeluar2')->middleware(['auth', 'role:Petugas Keluar 2,Admin']);
Route::get('/pkeluar2/{id}/edit', '\App\Http\Controllers\pkeluar2Controller@edit')->middleware(['auth', 'role:Petugas Keluar 2,Admin']);
Route::post('/pkeluar2/{id}/update', '\App\Http\Controllers\pkeluar2Controller@update')->middleware(['auth', 'role:Petugas Keluar 2,Admin']);

Route::get('/mall3', function() {
    return view('mall3.index');
});

// Petugas Masuk Mall 3
Route::get('/pmasuk3', '\App\Http\Controllers\pmasuk3Controller@index')->name('pmasuk3')->middleware(['auth', 'role:Petugas Masuk 3,Admin']);
Route::post('/pmasuk3/add', '\App\Http\Controllers\pmasuk3Controller@add')->middleware(['auth', 'role:Petugas Masuk 3,Admin']);

// Petugas Ruang Mall 3
Route::get('/pruang3', '\App\Http\Controllers\pruang3Controller@index')->name('pruang3')->middleware(['auth', 'role:Petugas Ruang 3,Admin']);
Route::get('/pruang3/{id}/edit', '\App\Http\Controllers\pruang3Controller@edit')->middleware(['auth', 'role:Petugas Ruang 3,Admin']);
Route::post('/pruang3/{id}/update', '\App\Http\Controllers\pruang3Controller@update')->middleware(['auth', 'role:Petugas Ruang 3,Admin']);

// Petugas Keluar Mall 3
Route::get('/pkeluar3', '\App\Http\Controllers\pkeluar3Controller@index')->name('pkeluar3')->middleware(['auth', 'role:Petugas Keluar 3,Admin']);
Route::get('/pkeluar3/{id}/edit', '\App\Http\Controllers\pkeluar3Controller@edit')->middleware(['auth', 'role:Petugas Keluar 3,Admin']);
Route::post('/pkeluar3/{id}/update', '\App\Http\Controllers\pkeluar3Controller@update')->middleware(['auth', 'role:Petugas Keluar 3,Admin']);
