<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\{AuthenticatedSessionController, RegisteredUserController};
use App\Http\Controllers\{PostController, PublicController};

    Route::get('/user', function (Request $request) {
        return $request->user();
    })->middleware('auth:sanctum');

    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/post/{post}', [PublicController::class, 'post']);
    Route::post('/admin/posts', [PostController::class, 'store']);
    Route::patch('/admin/posts/{post}', [PostController::class, 'update']);
    Route::delete('/admin/posts/{post}', [PostController::class, 'destroy']);

    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::delete('/logout', [AuthenticatedSessionController::class, 'destroy']);
