<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ManageUserController as AdminManageUserController;
use App\Http\Controllers\Admin\ManagePackageController as AdminManagePackageController;
use App\Http\Controllers\Admin\ManageSubscriptionController as AdminManageSubscriptionController;
use App\Http\Controllers\Admin\ManageMenusController as AdminManageMenusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuListController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\YourFoodController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::resource('order', OrderController::class);
Route::resource('payment', PaymentController::class);

// Route::get('/login', function () {
//     return view('login_page');
// });

// Route::get('/sign-up', function () {
//     return view('signup_page');
// });

Route::get('/menu-list', [MenuListController::class, 'index'])->name('menu-list');

Route::get('/menu-detail', function () {
    return view('menudetail_page');
});

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/your-food', [YourFoodController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::resource('/admin/user', AdminManageUserController::class);

Route::resource('/admin/menu', AdminManageMenusController::class);

Route::resource('/admin/paket', AdminManagePackageController::class);

Route::resource('/admin/subscription', AdminManageSubscriptionController::class);