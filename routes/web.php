<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
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

//client routes
Route::get('/', [UserLoginController::class, 'index']);
Route::get('/welcome', [UserLoginController::class, 'index']);
Route::post('/login', [UserLoginController::class, 'store']);
Route::get('/home', [BlogController::class, 'index']);

//mode routes
Route::get('/mod', [AdminLoginController::class, 'index']);
Route::get('/dashboard', [AdminLoginController::class, 'index']);


Route::middleware('mod')->group(function(){
    //backend mod routes
});
