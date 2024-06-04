<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\Client\UserSettingsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//guest routes
Route::get('/', [UserLoginController::class, 'index']);
Route::post('/login', [UserLoginController::class, 'store']);
Route::post('/register', [UserRegisterController::class, 'store']);

//client routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout', [UserLoginController::class, 'logout']);
    Route::get('/setup-account', [UserSettingsController::class, 'index']);
    Route::post('/setup-account', [UserSettingsController::class, 'store']);
    Route::get('/user', [UserLoginController::class, 'getUser']);
    
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/profile/{user_id}', [ProfileController::class, 'other']);
    Route::get('/settings', [UserSettingsController::class, 'settings']);
    Route::post('/settings', [UserSettingsController::class, 'update']);

    Route::post('/post', [BlogController::class, 'store']);
    Route::post('/comment', [CommentController::class, 'store']);
    Route::get('/like/{blog_id}', [BlogController::class, 'like']);
    Route::get('/bookmark', [BlogController::class, 'bookmarkList']);
    Route::get('/bookmark/{blog_id}', [BlogController::class, 'bookmark']);
});