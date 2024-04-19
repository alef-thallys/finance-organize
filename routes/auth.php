<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Auth/Dashboard')->name('home');

Route::inertia('/todo', 'Auth/Todo');
Route::inertia('/finance', 'Auth/Finance');
Route::inertia('/chat', 'Auth/Chat');
