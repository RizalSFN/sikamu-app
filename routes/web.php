<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\ForgotPasswordController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RondaController;
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

Route::middleware('guest')->group(function () {
    // Route Login
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProcess'])->name('loginProses');

    // Route Lupa Password
    Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');
    Route::post('/forgot-password/proses', [ForgotPasswordController::class, 'sendLink'])->name('forgot-password.link');
    Route::get('/forgot-password/form', [ForgotPasswordController::class, 'create'])->name('forgot-password.create');
    Route::put('/forgot-password/form/proses', [ForgotPasswordController::class, 'update'])->name('forgot-password.create.proses');

    // Route Register
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register/proses', [AuthController::class, 'registerProcess'])->name('register.proses');
});

Route::middleware(['auth'])->group(function () {
    // User Route
    Route::middleware(['checkRole:user'])->group(function () {
        // Home Route
        Route::get('/home', [WargaController::class, 'index'])->name('home');

        // Lapor / Minta Bantuan Route
        Route::get('/bantuan', [LaporController::class, 'index'])->name('bantuan');
        Route::post('/bantuan/lapor', [LaporController::class, 'bantuan'])->name('bantuan.lapor');

        // Profil Route
        Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
        Route::get('/profil/data', [ProfilController::class, 'edit'])->name('profil.edit');
        Route::put('/profil/data/update', [ProfilController::class, 'update'])->name('profil.edit.proses');

        // Ronda Route
        Route::get('/ronda', [RondaController::class, 'index'])->name('ronda');
    });

    // Admin Route
    Route::middleware(['checkRole:admin'])->group(function () {
        // Home Route
        Route::get('/admin/dashboard', [WargaController::class, 'adminIndex'])->name('admin.dashboard');

        // Tambah dan Detail warga Route
        Route::get('/admin/warga/detail/{id}', [WargaController::class, 'adminShow'])->name('admin.warga.detail');
        Route::get('/admin/warga/create', [WargaController::class, 'adminCreate'])->name('admin.warga.create');
        Route::post('/admin/warga/create/proses', [WargaController::class, 'adminStore'])->name('admin.warga.create.proses');

        // Profil Route
        // TODO pisan

        // Ronda Route
        Route::get('admin/ronda', [RondaController::class, 'index'])->name('admin.ronda');
        Route::get('admin/ronda/create', [RondaController::class, 'create'])->name('admin.ronda.create');
        Route::post('admin/ronda/create/proses', [RondaController::class, 'store'])->name('admin.ronda.create.proses');
        Route::get('admin/ronda/update/{id}', [RondaController::class, 'edit'])->name('admin.ronda.update');
        Route::put('admin/ronda/update/proses/{id}', [RondaController::class, 'update'])->name('admin.ronda.update.proses');
    });

    // Logout Route
    Route::get('/logout', [AuthController::class, 'logout'])->name('logoutProses');
});
