<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{PostController, PublicController, TagController};
use App\Http\Controllers\Auth\{AuthenticatedSessionController, RegisteredUserController};

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// here we grab api endpoints to use in blogfe

// posts

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post}', [PublicController::class, 'post']);
Route::post('/admin/posts', [PostController::class, 'store']);
Route::patch('/admin/posts/{post}', [PostController::class, 'update']);
Route::delete('/admin/posts/{post}', [PostController::class, 'destroy']);


// tags

Route::get('/tags', [TagController::class, 'index']);
Route::get('/tag/{tag}', [PublicController::class, 'tag']);
Route::post('/admin/tags', [TagController::class, 'store']);
Route::patch('/admin/tags/{tag}', [TagController::class, 'update']);
Route::delete('/admin/tags/{tag}', [TagController::class, 'destroy']);

// auth

Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::delete('/logout', [AuthenticatedSessionController::class, 'destroy']);
