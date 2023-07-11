<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
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

Route::get('/', [IndexController::class, 'index']);
Route::get('/order/{slug}', [IndexController::class, 'index']);

// authentication
Route::get('/login', [AuthController::class, 'loginView']);
Route::get('/login/store', [AuthController::class, 'login'])->name('login.get');
Route::get('/logout', [AuthController::class, 'logout']);

// admin 
Route::get('/app', [AdminController::class, 'index']);

Route::resource('/app/admin', UserController::class);
Route::resource('/app/games', GameController::class);

