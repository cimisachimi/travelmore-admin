<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::view('profile', 'profile')->name('profile'); // Add this line
});

require __DIR__.'/auth.php';