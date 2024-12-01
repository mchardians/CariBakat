<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('guest')->group(function() {
    Route::view('/', 'pages.landing.home')->name('home');
    Route::get('/register', [RegisterController::class, 'index'])->name('signup');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    Route::get('/login', [AuthController::class, 'index'])->name('signin');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth');
    Route::get('/forgot-password', function() {
        return view('pages.auth.forgot-password');
    })->name('forgot-password');
    Route::view('/about', 'pages.landing.about')->name('about');
    Route::view('/contact','pages.landing.contact')->name('contact');
    Route::get('/detail-pekerjaan', function() {
        return view('pages.landing.job-details');
    })->name('job-details');
    Route::get('/detail-pekerjaan/lamar', function() {
        return view('pages.landing.application-form');
    })->name('job-apply');
});

Route::middleware('auth')->group(function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('roles:pelamar')->prefix('pelamar')->group(function() {
        Route::get('/dashboard', function() {
            return view('pages.features.pelamar.dashboard');
        })->name('pelamar.dashboard');
    });

    Route::middleware('roles:hrd')->prefix('hrd')->group(function() {
        Route::get('/dashboard', function() {
            return view('pages.features.hrd.dashboard.dashboard');
        })->name('hrd.dashboard');
        Route::get('/departemen', function() {
            return view('pages.features.hrd.departemen.departemen');
        })->name('hrd.departemen');
        Route::get('/lowongan', function() {
            return view('pages.features.hrd.lowongan.lowongan-aktif');
        })->name('hrd.lowongan');
        Route::get('/lowongan/berakhir', function() {
            return view('pages.features.hrd.lowongan.lowongan-berakhir');
        })->name('hrd.lowongan.berakhir');
        Route::get('/bobot-kriteria', function() {
            return view('pages.features.hrd.bobot-kriteria.bobot-kriteria');
        })->name('hrd.bobot-kriteria');
        Route::get('/pelamar', function() {
            return view('pages.features.hrd.pelamar.pelamar');
        })->name('hrd.pelamar');
        Route::get('/laporan', function() {
            return view('pages.features.hrd.laporan.laporan');
        })->name('hrd.laporan');
    });

    Route::middleware('roles:manajer')->prefix('manajer')->group(function() {
        Route::get('/dashboard', function() {
            return view('pages.features.manajer.dashboard');
        })->name('manajer.dashboard');
    });
});
