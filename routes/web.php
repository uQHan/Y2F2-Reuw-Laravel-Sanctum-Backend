<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Client\UserSettingsController;
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

// Breeze routes
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

//guest routes
Route::get('/', [UserLoginController::class, 'index']);
Route::get('/welcome', [UserLoginController::class, 'index'])->name('welcome');
Route::post('/login', [UserLoginController::class, 'store']);
Route::post('/register', [UserRegisterController::class, 'store']);
Route::get('/home', [BlogController::class, 'index']);

//client routes
Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserLoginController::class, 'logout']);
    Route::get('/setup-account', [UserSettingsController::class, 'index']);
    Route::post('/setup-account', [UserSettingsController::class, 'store']);
    
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/settings', [UserSettingsController::class, 'index']);
    Route::post('/settings', [UserSettingsController::class, 'update']);
});

//admin routes
Route::get('/admin-login', [AdminLoginController::class, 'index']);

//backend admin routes
Route::middleware('admin')->group(function () {
    
    Route::get('/dashboard', [AdminController::class, 'index']);
});
