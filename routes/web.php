<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WargaController;
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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('loginProses');
Route::get('/home', [WargaController::class, 'index'])->name('home')->middleware('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logoutProses')->middleware('auth');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerPro', [AuthController::class, 'registerProcess'])->name('registerProses');
