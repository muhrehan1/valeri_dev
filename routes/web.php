<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\DashboardController;
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

    // Front-end Routes Starts

    // Frontend Routes Ends
    Auth::routes();
    Route::get('/',  [FrontController::class ,'index'])->name('home');
    Route::get('/about',[FrontController::class,'about'])->name('about');
    Route::get('/contact',[FrontController::class,'contact'])->name('contact');
    Route::get('/pricing',[FrontController::class ,'pricing'])->name('pricing');
    Route::get('/blog', [FrontController::class ,'blog'])->name('blog');
    Route::get('/customer-support', [FrontController::class ,'customer_support'])->name('customersupport');
    Route::get('/how-it-works', [FrontController::class ,'how_it_works'])->name('howitworks');
    Route::get('/login-signup', [FrontController::class ,'login_signup'])->name('loginsignup');
    Route::get('/services', [FrontController::class ,'services'])->name('services');
    Route::get('/team', [FrontController::class ,'team'])->name('team');
    Route::get('/terms', [FrontController::class ,'terms'])->name('terms');
    Route::get('/what-we-offer', [FrontController::class ,'what_we_offer'])->name('whatweoffer');
    Route::get('/home', 'HomeController@index')->name('home');
    // Admin Middle Ware
    Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
        Route::get('dashboard', [DashboardController::class ,'terms'])->name('dashboard');
    });
    // User Middleware
    Route::group(['as'=>'user.','prefix' => 'user','namespace'=>'User','middleware'=>['auth','user']], function () {
        Route::get('dashboard', [DashboardController::class ,'terms'])->name('dashboard');
    });
    
