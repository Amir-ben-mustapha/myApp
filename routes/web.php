<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
    //php artisan route:list
    //composer require laravel/fortify
    //php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
    //php artisan migrate

Route::get('/', [HomeController::class,'home'])
    ->name('app_home');

Route::get('/about', [HomeController::class,'about'])
    ->name('app_about');

Route::match(['get','post'], '/dashboard', [HomeController::class,'dashboard'])
    ->name('app_dashboard');

/*Route::match(['get','post'], '/login', [LoginController::class,'login'])
    ->name('app_login');

Route::match(['get','post'], '/register', [LoginController::class,'register'])
    ->name('app_register');*/
