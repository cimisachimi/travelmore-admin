<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

// This route will be accessible at /api/user
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Add this line for your posts API
Route::apiResource('posts', PostController::class)->middleware('auth:sanctum');