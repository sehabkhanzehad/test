<?php

use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-in', function () {
    return view('auth.sign-in');
});





// Dashboard Routes
Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard.index');
Route::get('/sign-up', [AuthController::class, 'signUP']);
Route::get('/sign-in', [AuthController::class, 'signIn']);
