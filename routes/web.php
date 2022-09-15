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

Route::get('/admin', function () {
    return view('layouts.admin');
});

Route::get('/guru', function () {
    return view('layouts.guru');
});

Route::get('/siswa', function () {
    return view('layouts.siswa');
});

Route::get('/tambah_data', function () {
    return view('data_nilai.create');
});

Route::get('/data_nilai', function () {
    return view('data_nilai.index');
});

Route::get('/siswa_nilai', function () {
    return view('siswa_nilai.index');
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

});

// Route Role Guru
Route::group(['prefix' => 'data_nilai', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('data_nilai.index');
    });

    Route::resource('utama', UtamaController::class);
    Route::resource('utama_guru', UtamaguruController::class);
    Route::resource('data_nilai', NilaiController::class);

});

// Route Role Siswa
Route::group(['prefix' => 'siswa', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('siswa_nilai.index');
    });

    Route::resource('siswa_nilai', Siswa_dataController::class);

});

// route admin
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/', [AdminController::class, 'getData']);
//     // tambah disini
// });

// Route::group(['prefix' => 'guru_user', 'middleware' => ['auth', 'role:guru_user']], function () {
//     Route::get('/guru', [UserguruController::class, 'getData']);
//     // tambah disini
// });
