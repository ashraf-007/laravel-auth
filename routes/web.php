<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\AuthController@login')->middleware('isAlreadyLoggedIn');

Route::get('/login', 'App\Http\Controllers\AuthController@login')->middleware('isAlreadyLoggedIn');
Route::get('/register', 'App\Http\Controllers\AuthController@register')->middleware('isAlreadyLoggedIn');
Route::post('/register-user', 'App\Http\Controllers\AuthController@registerUser')-> name('register-user');

Route::post('/login-user', 'App\Http\Controllers\AuthController@loginUser')-> name('login-user');
Route::get('/dashboard', 'App\Http\Controllers\AuthController@dashboard')->middleware('isLoggedIn');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');
