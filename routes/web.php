<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', [SessionController::class, 'check'])->name('session.check');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'form'])->name('login.form');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');