<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\TodoController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\FinanceController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/users/logout', [AuthController::class, 'logout']);

    Route::resource('/todos', TodoController::class);
    Route::resource('/finances', FinanceController::class);
});
