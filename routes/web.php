<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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



Route::middleware(['guest:web', 'PreventBackHistory'])->group(function () {
    Route::view('/', 'welcome')->name('welcome');
    Route::view('/login', 'auth.login')->name('login');
});

Auth::routes();

Route::middleware(['auth:web', 'PreventBackHistory'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home/profile', [HomeController::class, 'viewProfile'])->name('profile');
});
