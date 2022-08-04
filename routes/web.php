<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\UtamaController;
// use App\Http\Controllers\UtamaguruController;

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


// Auth::routes(['register' => false]);


Route::get('/admin',function(){
    return view('layouts.admin');
});

Route::get('/guru',function(){
    return view('layouts.guru');
});

Route::get('/siswa',function(){
    return view('layouts.siswa');
});

Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin Backand
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
Route::resource('guru', GuruController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('kelas', KelasController::class);
Route::resource('utama', UtamaController::class);

    });

// Route::group(['prefix' => 'guru', 'middleware' => ['auth']], function () {
//     Route::get('/', function () {
//         return view('guru.index');
//     });


//     });

// route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', [AdminController::class, 'getData']);
    // tambah disini
});

Route::group(['prefix' => 'guru_user', 'middleware' => ['auth', 'role:guru_user']], function () {
    Route::get('/guru', [UserguruController::class, 'getData']);
    // tambah disini
});