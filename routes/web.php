<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{LikeController, PostController, ProfileController, PublicController, TagController};

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/page1', [PublicController::class, 'page1'])->name('page1');
Route::get('/page2', [PublicController::class, 'page2'])->name('page2');
Route::get('post/{post}', [PublicController::class, 'post'])->name('post');
Route::get('tag/{tag}', [PublicController::class, 'tag'])->name('tag');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('user/{user}', [PublicController::class, 'user'])->name('user');

Route::middleware('auth')->group(function () {

    Route::resource('/admin/posts', PostController::class);

    Route::resource('/admin/tags', TagController::class);

    Route::post('post/{post}/like', [LikeController::class, 'store'])->name('post.like');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
