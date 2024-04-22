<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login',  'create')->name('login');
    });

    Route::controller(AuthController::class)->group(function () {
        Route::post('/login', 'authenticate');
    });

    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register',  'create');
        Route::post('/register', 'store');
    });
});

require __DIR__ . '/auth.php';
