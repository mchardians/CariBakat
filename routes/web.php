<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/', function () {
        return view('pages.landing.home');
    })->name('home');
    Route::get('/daftar', function () {
        return view('pages.auth.signup');
    })->name('signup');
    Route::get('/masuk', function () {
        return view('pages.auth.signin');
    })->name('signin');
    Route::get('/tentang-kami', function () {
        return view('pages.landing.about');
    })->name('about');
    Route::get('/kontak', function () {
        return view('pages.landing.contact');
    })->name('contact');
    Route::get('/detail-pekerjaan', function() {
        return view('pages.landing.job-details');
    })->name('job-details');
    Route::get('/detail-pekerjaan/lamar', function() {
        return view('pages.landing.application-form');
    })->name('job-apply');
});

Route::middleware('auth')->group(function() {
    Route::middleware('roles:pelamar')->group(function() {

    });

    Route::middleware('roles:hrd')->group(function() {

    });

    Route::middleware('roles:manajer')->group(function() {

    });
});
