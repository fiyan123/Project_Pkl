<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Siswa_dataController;
use Illuminate\Support\Facades\Route;


// Route Siswa
Route::get('/', [Siswa_dataController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();
Auth::routes(['register' => false]);

// Route Role Guru
Route::group(['prefix' => 'guru', 'middleware' => ['auth']], function () {
    Route::resource('nilai', NilaiController::class);
});

// Route Admin
Route::group(['prefix'=>'admin','middleware'=>['admin']], function(){
    Route::resource('guru', GuruController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('kelas', KelasController::class);
});
