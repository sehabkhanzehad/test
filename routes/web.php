<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-up', [AuthController::class, 'signUP']);
Route::get('/sign-in', [AuthController::class, 'signIn']);
