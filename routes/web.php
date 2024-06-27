<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/welcome', function () {
    return view('welcome');
});

// User Route
Route::controller(MainController::class)->group(function() {
    Route::get('/', 'index')->name('beranda');
    Route::get('/informasi', 'informasi')->name('informasi');
    Route::get('/layanan', 'layanan')->name('layanan');
    Route::get('/profil/visi-misi', 'visi_misi')->name('visi-misi');
    Route::get('/profil/gambaran-umum', 'gambaran_umum')->name('gambaran-umum');
    Route::get('/berita', 'berita')->name('berita');

    Route::controller(PengaduanController::class)->group(function() {
        Route::get('pengaduan', 'index')->name('pengaduan');

        // validasi
        Route::post('proses_pengaduan', 'proses_pengaduan')->name('pengaduan.proses_pengaduan');
    });
});

// Admin Route
Route::prefix('admin')->group(function() {
    Route::middleware(['guest'])->group(function () {
        Route::controller(AuthController::class)->group(function() {
            Route::get('/', 'index');
            Route::get('login', 'login')->name('login');
            Route::get('registrasi', 'registration')->name('registrasi');

            // validasi
            Route::post('validate_registration', 'validate_registration')->name('auth.validate_registration');
            Route::post('validate_login', 'validate_login')->name('auth.validate_login');
        });
    });

    Route::middleware(['auth'])->group(function() {
        // Dashboard
        Route::controller(DashboardController::class)->group(function(){
            Route::get('/', 'index');
            Route::get('dashboard', 'dashboard')->name('dashboard');
        });

        // Pengaduan
        Route::prefix('pengaduan')->group(function() {
            Route::controller(PengaduanController::class)->group(function() {
                Route::get('/', 'show_data')->name('admin_pengaduan');
                Route::get('{id}', 'show_by_id')->name('pengaduan_by_id');
            });
        });

        Route::controller(AuthController::class)->group(function() {
            Route::get('logout', 'logout')->name('logout');
        });
    });
});

Route::get('/reg', function() {
    return view('admin.registration');
});
