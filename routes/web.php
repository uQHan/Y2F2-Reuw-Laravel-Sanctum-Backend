<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\UserLoginController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\CommentController;
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
    Route::get('/profile/{user_id}', [ProfileController::class, 'orther']);
    Route::get('/settings', [UserSettingsController::class, 'settings']);
    Route::post('/settings', [UserSettingsController::class, 'update']);

    Route::post('/post', [BlogController::class, 'store']);
    Route::post('/comment', [CommentController::class, 'store']);
    Route::get('/like/{blog_id}', [BlogController::class, 'like']);
    Route::get('/bookmark', [BlogController::class, 'bookmarkList']);
    Route::get('/bookmark/{blog_id}', [BlogController::class, 'bookmark']);
});

//admin routes
Route::get('/admin-login', [AdminLoginController::class, 'index']);

//backend admin routes
Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);

    Route::get('/list-users', [AdminUserController::class, 'users']);
    Route::get('/deactiavate-users/{user_id}', [AdminUserController::class, 'deactivate']);

    Route::get('/list-blogs', [AdminBlogController::class, 'blogs']);
    Route::get('/remove-blog/{blog_id}', [AdminBlogController::class, 'remove']);
});
