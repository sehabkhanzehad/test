<?php

use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});






// Dashboard Routes
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard.index');
    Route::post('/logout', [LoginController::class, 'logout'])->name('user.logout');
});


Route::get('/sign-up', [AuthController::class, 'signUp'])->name('user.signUp');
Route::post('/sign-up', [AuthController::class, 'store'])->name('user.sign-up');
Route::get('/sign-in', [AuthController::class, 'signIn'])->name('login');
Route::post('/sign-in', [LoginController::class, 'authenticate'])->name('user.login');

