<?php

use App\Http\Controllers\Auth\ModeratorLoginController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Client\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//client routes
Route::get('/', [UserLoginController::class, 'index']);
Route::get('/welcome', [UserLoginController::class, 'index']);
Route::get('/home', [BlogController::class, 'index']);

//mode routes
Route::get('/mod', [ModeratorLoginController::class, 'index']);
Route::get('/dashboard', [ModeratorLoginController::class, 'index']);


Route::middleware('mod')->group(function(){
    //backend mod routes
});
