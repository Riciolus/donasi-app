<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\FundsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']
);

Route::get('/campaign/{id}', [FundController::class, 'show'])->name('funds.detail');

Route::post('/funds/{id}/contribute', [FundController::class, 'contribute'])->name('fund.contribute');
Route::resource('funds', MainController::class);

Route::get('/auth/login', [AuthController::class, 'showLoginForm']
)->name("login");
Route::post('/auth/login', [AuthController::class, 'login']);

Route::get('/auth/register', [AuthController::class, 'showRegisterForm']
)->name("register");
Route::post('/auth/register', [AuthController::class, 'register']);

Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout');