<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;


Route::get('/', [HomeController::class,'home']);


// Login and Logout
// Route::get('/login', ['middleware' => 'guest', 'uses' => [HomeController::class,'getLogin']]);
// Route::post('/login', ['middleware' => 'guest', 'uses' => [HomeController::class,'postLogin']]);
// Route::get('/logout', ['middleware' => 'auth', 'uses' => [HomeController::class,'tLogout']]);

// // Registration and User Profile
// Route::resource('user', UserController::class)->except(['index', 'show', 'destroy']);

// // Todo Resources
// Route::resource('todo', TodoController::class,['middleware' => 'auth']);
