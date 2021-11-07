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

Route::get('/', [\App\Http\Controllers\ManagerController::class, 'index'])
    ->name('home');
Route::get('/login', [\App\Http\Controllers\ManagerController::class, 'login'])
    ->name('login');
Route::post('/login-post', [\App\Http\Controllers\ManagerController::class, 'loginPost'])
    ->name('login-post');

Route::get('/register', [\App\Http\Controllers\ManagerController::class, 'register'])
    ->name('register');
Route::post('/register', [\App\Http\Controllers\ManagerController::class, 'registerPost'])
    ->name('register-post');

Route::get('/forgot-password', [\App\Http\Controllers\ManagerController::class, 'forgotPassword'])
    ->name('forgot-password');
Route::post('/forgot-password-post', [\App\Http\Controllers\ManagerController::class, 'forgotPasswordPost'])
    ->name('forgot-password-post');
