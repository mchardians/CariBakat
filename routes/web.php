<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DepartmentController;

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
Route::view('/', 'pages.landing.home')->name('home');
Route::view('/about-us', 'pages.landing.about')->name('about');
Route::view('/career-opportunities', 'pages.landing.careers')->name('careers');
Route::view('/contact-us', 'pages.landing.contact')->name('contact');
Route::view('/profile', 'pages.profile')->name('profile');


Route::middleware('guest')->prefix('user')->group(function() {
    Route::get('/register', [RegisterController::class, 'index'])->name('signup');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    Route::get('/login', [AuthController::class, 'index'])->name('signin');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth');
    Route::get('/forgot-password', function() {
        return view('pages.auth.forgot-password');
    })->name('forgot-password');
});

Route::view('/lowongan-aktif', 'pages.features.hrd.lowongan.lowongan-aktif')->name('lowongan.aktif');

Route::middleware('auth')->group(function() {

    Route::middleware('roles:pelamar')->prefix('pelamar')->group(function() {
        Route::get('/dashboard', function() {
            return view('pages.features.pelamar.dashboard');
        })->name('pelamar.dashboard');
        Route::get('/profile', function() {
            return view('pages.features.pelamar.profile.profile');
        })->name('pelamar.profile');
    });

    Route::middleware('roles:hrd')->prefix('hrd')->group(function() {
        Route::get('/dashboard', function() {
            return view('pages.features.hrd.dashboard.dashboard');
        })->name('hrd.dashboard');
        Route::resource('/department', DepartmentController::class)->names([
            'index' => 'hrd.department.index'
        ]);
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

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
