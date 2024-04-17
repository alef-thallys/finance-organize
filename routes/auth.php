<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Auth/Dashboard/Home')->name('home');
Route::inertia('todo', 'Auth/Dashboard/Todo');
