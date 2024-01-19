<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\VerifyEmailController;
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


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerPro', [AuthController::class, 'registerProcess'])->name('registerProses');

Route::middleware(['auth'])->group(function () {
    Route::get('/email/verify', [VerifyEmailController::class, 'verifyView'])->name('verification.notice');
    Route::post('/email/verification-notification', [VerifyEmailController::class, 'verifyProcess'])->middleware(['throttle:6,1'])->name('verification.send');

    Route::middleware(['signed'])->group(function () {
        Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verifySuccess'])->name('verification.verify');
        Route::get('/home', [WargaController::class, 'index'])->name('home');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logoutProses');
    });;
});
Route::get('/greeting', function () {
    return view('home.profil.profil');
});