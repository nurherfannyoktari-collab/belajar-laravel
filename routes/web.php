<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('layout.app');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/test', function () {
    return 'Hello,Laravel 11!';
});

Route::get('/users',[UserController::class,'index']);

Route::get('/users/{id}',[UserController::class,'show']);

Route::get('/page',[PageController::class,'home']);

Route::get('/pages',[PageController::class,'about']);