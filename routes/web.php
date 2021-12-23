<?php

use App\Models\User;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('home');
Route::resource('posts', PostController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Category Routes
Route::get('categories/{category:slug}', function(Category $category){
    return view('posts.index', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]); 
})->name('category');

Route::get('authors/{author:username}', function(User $author){ // use the :username as the foreign key
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]); 
});

