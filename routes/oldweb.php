<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

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
Route::get('/about', [HomeController::class, 'About'])->name('about');
Route::get('/services', [HomeController::class, 'Services'])->name('services');
Route::get('/partners', [HomeController::class, 'Partners'])->name('partners');
Route::get('/testimonials', [HomeController::class, 'Testimonials'])->name('testimonials');
Route::get('/faqs', [HomeController::class, 'Faqs'])->name('faqs');
Route::get('/contact', [HomeController::class, 'Contact'])->name('contact');



//Admin
Route::group(['middleware' => 'checkAdminLoggedIn'], function () {
    Route::get('admin/login', [AuthController::class, 'login'])->name('login');
    Route::post('admin/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//member
Route::get('member/login', [AuthController::class, 'member_login'])->name('member_login');
Route::post('member/login', [AuthController::class, 'authenticate'])->name('member.authenticate');
Route::group(['middleware' => ['auth', 'member']], function () {
    Route::get('/member/dashboard', [MemberController::class, 'index'])->name('member.dashboard');
    // Add more routes as needed for member functionality
});




Route::get('clear_cache', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');

    dd("Cache is cleared");
});