<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{PostController, ProfileController, PublicController};

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/page1', [PublicController::class, 'page1'])->name('page1');
Route::get('/page2', [PublicController::class, 'page2'])->name('page2');
Route::get('post/{post}', [PublicController::class, 'post'])->name('post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('/admin/posts', PostController::class);
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

