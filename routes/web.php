<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\VerifyEmailController;
use App\Http\Controllers\RondaController;
use App\Http\Controllers\WargaController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::get('/forgot-password', function () {
    return view('auth.forgot-password', ["title" => 'forgot password']);
})->name('forgot-password');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerPro', [AuthController::class, 'registerProcess'])->name('registerProses');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [WargaController::class, 'index'])->name('home');

    Route::get('/ronda', [RondaController::class, 'index'])->name('ronda');
    Route::get('/ronda/warga/{id}', [WargaController::class, 'show'])->name('ronda.warga');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logoutProses');
});
Route::get('/greeting', function () {
    return view('page.ronda.index');
});