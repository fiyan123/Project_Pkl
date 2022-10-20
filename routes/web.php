<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Siswa_dataController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\UtamaguruController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/siswa', function () {
    return view('layouts.siswa');
});

Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Admin Backand
// Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () { 
//     Route::resource('guru', GuruController::class);
//     Route::resource('siswa', SiswaController::class);
//     Route::resource('kelas', KelasController::class);
// });


// Route Role Guru
Route::group(['prefix' => 'guru', 'middleware' => ['guru']], function () {
    Route::resource('utama', UtamaController::class);
    Route::resource('utama_guru', UtamaguruController::class);
    Route::resource('nilai', NilaiController::class);
});

// Route Role Siswa
Route::group(['prefix' => 'siswa', 'middleware' => ['auth']], function () {

    Route::resource('siswa_nilai', Siswa_dataController::class);

});

// Route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', [AdminController::class, 'getData']);
    Route::resource('guru', GuruController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('kelas', KelasController::class);
});

// Route::group(['prefix' => 'guru_user', 'middleware' => ['auth', 'role:guru_user']], function () {
//     Route::get('/guru', [UserguruController::class, 'getData']);
//     Route::resource('utama', UtamaController::class);
//     Route::resource('utama_guru', UtamaguruController::class);
//     Route::resource('nilai', NilaiController::class);
// });
