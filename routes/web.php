<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/', function () {
    return view('auth/login', [
        'pageName' => 'Login'
    ]);
});

Route::get('/users', function () {
    return view('users', [
        'pageName' => 'Users'
    ]);
});

Route::get('/index', function () {
    return view('index', [
        'pageName' => 'Dashboard'
    ]);
});

Route::get('/deposits', function () {
    return view('deposits', [
        'pageName' => 'Bank Deposits'
    ]);
});

Route::get('/transactions', function () {
    return view('transactions', [
        'pageName' => 'Transactions'
    ]);
});

Route::get('/activities', function () {
    return view('activities', [
        'pageName' => 'Activities'
    ]);
});

Route::get('/reversals', function () {
    return view('reversals', [
        'pageName' => 'Reversals'
    ]);
});

Route::get('/statement', function () {
    return view('statement', [
        'pageName' => 'Business Statement'
    ]);
});

Route::get('/vendors', function () {
    return view('vendors', [
        'pageName' => 'Vendors'
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'pageName' => 'Profile'
    ]);
});

Route::get('/contact', function () {
    return view('Contact', [
        'pageName' => 'Contact'
    ]);
});

Route::get('/faq', function () {
    return view('faq', [
        'pageName' => 'Frequently Asked Questions'
    ]);
});

Route::get('/error-404', function () {
    return view('error-404', [
        'pageName' => 'error-404'
    ]);
});

Route::get('/welcome', function () {
    return view('welcome', [
        'pageName' => 'Welcome'
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'pageName' => 'Welcome'
    ]);
});