<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

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

// Routes for guest users (not logged in)
Route::middleware('guest')->prefix('user')->group(function() {
    Route::get('/register', [RegisterController::class, 'index'])->name('signup');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    Route::get('/login', [AuthController::class, 'index'])->name('signin');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth');
    Route::get('/forgot-password', function() {
        return view('pages.auth.forgot-password');
    })->name('forgot-password');
});

// Active job listing
Route::view('/lowongan-aktif', 'pages.features.hrd.lowongan.lowongan-aktif')->name('lowongan.aktif');

// Routes for authenticated users
Route::middleware('auth')->group(function() {

// Routes for 'pelamar' role
Route::middleware('roles:pelamar')->prefix('pelamar')->group(function() {
    Route::get('/dashboard', function() {
        return view('pages.features.pelamar.dashboard');
    })->name('pelamar.dashboard');

    // Profile page for 'pelamar'
    Route::get('/profile', function() {
        $user = Auth::user(); // Fetch the authenticated user data
        return view('pages.features.pelamar.profile.profile', compact('user')); // Pass user data to the view
    })->name('pelamar.profile');

    // Update profile route
    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('pelamar.profile.update');
});
    // Routes for 'hrd' role
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

    // Routes for 'manajer' role
    Route::middleware('roles:manajer')->prefix('manajer')->group(function() {
        Route::get('/dashboard', function() {
            return view('pages.features.manajer.dashboard');
        })->name('manajer.dashboard');
    });

    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
