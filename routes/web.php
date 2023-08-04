<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserCommentController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::resource('/', BlogController::class);

Route::get('contact', [BlogController::class, 'contact']);
Route::post('contact', [BlogController::class, 'store'])->name('contact.store');

Route::get('/product', [BlogController::class, 'product'])->name('product');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Add the following route to the existing routes because we want the posts route accessible to authenticated users only.
    // We'll use a resource route because it contains all the exact routes we need for a typical CRUD application.
    Route::resource('posts', PostController::class);
    Route::resource('comment', UserCommentController::class);

});

require __DIR__.'/auth.php';
