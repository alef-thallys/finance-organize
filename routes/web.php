<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/login', 'Login')->name('login');
Route::inertia('/register', 'Register')->name('register');

require __DIR__ . '/auth.php';
