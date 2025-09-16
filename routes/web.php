<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rute default yang dibuat Breeze
Route::get('/', function () {
    return view('welcome');
});

// Rute yang hanya bisa diakses setelah login
Route::middleware(['auth', 'verified'])->group(function () {
    // Halaman dashboard utama kita
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Rute profil yang dibuat Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';