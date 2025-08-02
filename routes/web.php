<?php

use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});






// Dashboard Routes
Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard.index');
Route::get('/sign-up', [AuthController::class, 'signUp']);
Route::post('/sign-up', [AuthController::class, 'store'])->name('user.sign-up');
Route::get('/sign-in', [AuthController::class, 'signIn']);
