<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('index');
});

// authentication
Route::get('/login', [AuthController::class, 'loginView']);
Route::get('/login/store', [AuthController::class, 'login'])->name('login.get');
Route::get('/logout', [AuthController::class, 'logout']);

// admin 
Route::get('/app', [AdminController::class, 'index']);

