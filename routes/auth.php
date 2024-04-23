<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\TodoController;
use App\Http\Controllers\FinanceController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::inertia('/', 'Auth/Dashboard')->name('home');

    Route::resource('/todos', TodoController::class);
    Route::resource('/finances', FinanceController::class);

    Route::get('/users/logout', [AuthController::class, 'logout']);
});
