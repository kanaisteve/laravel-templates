<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);

/**
 * These endpoints only make sense if you aren't signed in.
 * If you are signed in, then why are you registering.
 * 
 * The guest middleware tells laravel only the guest can access that page.
 */
Route::get('signup', [RegisterController::class,'create'])->middleware('guest');
Route::post('signup', [RegisterController::class,'store'])->middleware('guest');

Route::get('signin', [SessionsController::class, 'create'])->middleware('guest');
Route::post('signin', [SessionsController::class, 'store'])->middleware('guest');
Route::post('signout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
