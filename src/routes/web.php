<?php

use Illuminate\Support\Facades\Route;
use SarCubet\SimpleLogin\Http\Controllers\LoginController;

Route::get('/login-page', [LoginController::class, 'login'])->name('login-page');
Route::post('/login-process', [LoginController::class, 'loginProcess'])->name('loginProcess');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
