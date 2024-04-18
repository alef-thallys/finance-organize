<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Auth/Dashboard/Home')->name('home');
Route::inertia('/todo', 'Auth/Dashboard/Todo');
Route::inertia('/finance', 'Auth/Dashboard/Finance');
Route::inertia('/chat', 'Auth/Dashboard/Chat');
