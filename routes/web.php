<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Main route
Route::get('/', [MainController::class, 'index'])->name('main');

// Fund routes
Route::prefix('funds')->group(function () {
    Route::get('/campaign/{id}', [FundController::class, 'show'])->name('funds.detail');
    Route::post('/{id}/contribute', [FundController::class, 'contribute'])->middleware('auth')->name('fund.contribute');
    Route::post('/{id}/withdrawal', [FundController::class, 'withdrawal'])->middleware('auth')->name('fund.withdrawal');
    Route::delete('/{id}/delete', [FundController::class, 'delete'])->middleware('auth')->name('fund.delete');
    Route::get('/create', [FundController::class, 'create'])->middleware('auth')->name('fund.create');
    Route::post('/create', [FundController::class, 'store'])->middleware('auth')->name('fund.store');
    Route::get('/search', [FundController::class, 'search'])->name('funds.search');
});

// Autentikasi routes
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// User routes
Route::middleware('auth')->prefix('profile')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/edit', [UserController::class, 'update'])->name('user.edit');
    Route::post('/topup', [UserController::class, 'topup'])->name('user.topup');
});