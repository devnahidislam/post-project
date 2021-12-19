<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\registerController;
use App\Http\Controllers\dashboardController;

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

Route::get('/register', [registerController::class, 'index'])->name('register');
Route::post('/register', [registerController::class, 'store']);

Route::get('/', function () {
    return view('post.index');
});
