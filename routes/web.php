<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/order', function () {
    return view('order_page');
});

// Route::get('/login', function () {
//     return view('login_page');
// });

// Route::get('/sign-up', function () {
//     return view('signup_page');
// });

Route::get('/menu-list', function () {
    return view('menulist_page');
});

Route::get('/menu-detail', function () {
    return view('menudetail_page');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
