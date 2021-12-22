<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postsController;
use App\Http\Controllers\postLikeController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\logOutController;
use App\Http\Controllers\Auth\registerController;

//Home page
Route::get('/', function () {
    return view('home');
})->name('home');

//Dashboard
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//Register User
Route::get('/register', [registerController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [registerController::class, 'store']);
//Login User
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'store']);
//Logout User
Route::post('/logout', [logOutController::class, 'store'])->name('logout');
//post publish...
Route::get('/posts', [postsController::class, 'index'])->name('posts')->middleware('auth');
Route::post('/posts', [postsController::class, 'store']);
//PostLikeController for like post
Route::post('/post/{post}/like', [postLikeController::class, 'store'])->name('post.like')->middleware('auth');
// post Unlike route below
Route::delete('/post/{post}/like', [postLikeController::class, 'destroy'])->name('post.like')->middleware('auth');
