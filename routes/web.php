<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('pengumuman', [\App\Http\Controllers\HomeController::class, 'pengumuman'])->name('pengumuman');
Route::get('wkri', [\App\Http\Controllers\HomeController::class, 'wkri'])->name('wkri');
Route::get('omk', [\App\Http\Controllers\HomeController::class, 'omk'])->name('omk');
Route::get('misdinar', [\App\Http\Controllers\HomeController::class, 'misdinar'])->name('misdinar');
Route::get('bir', [\App\Http\Controllers\HomeController::class, 'bir'])->name('bir');
Route::get('bia', [\App\Http\Controllers\HomeController::class, 'bia'])->name('bia');
Route::get('lingkungan', [\App\Http\Controllers\HomeController::class, 'lingkungan'])->name('lingkungan');
Route::get('berita', [\App\Http\Controllers\HomeController::class, 'berita'])->name('berita');
Route::get('contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('selengkapnya', [\App\Http\Controllers\HomeController::class, 'selengkapnya'])->name('selengkapnya');


Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\Admin\AuthController::class, 'authenticating']);

Route::middleware('auth')->group(function() {
    Route::get('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

    Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('admin/kepengurusan', [\App\Http\Controllers\Admin\KepengurusanController::class, 'show'])->name('kepengurusan');
});