<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postsController;
use App\Http\Controllers\postLikeController;
use App\Http\Controllers\userPostController;
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
Route::get('/users/{user:username}/posts', [userPostController::class, 'index'])->name('users.posts');

//Register User
Route::get('/register', [registerController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [registerController::class, 'store']);
//Login User
Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'store']);
//Logout User
Route::post('/logout', [logOutController::class, 'store'])->name('logout');
//post publish...
Route::get('/posts', [postsController::class, 'index'])->name('posts');
Route::post('/posts', [postsController::class, 'store'])->middleware('auth');
Route::delete('/posts/{post}', [postsController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{post}', [postsController::class, 'show'])->name('posts.show');
//PostLikeController for like post
Route::post('/post/{post}/like', [postLikeController::class, 'store'])->name('post.like')->middleware('auth');
// post Unlike route below
Route::delete('/post/{post}/like', [postLikeController::class, 'destroy'])->name('post.like')->middleware('auth');
