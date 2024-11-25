<?php

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

Route::resource('funds', MainController::class);

Route::get('/campaign', function () {
    return view('layout/DetailCampaign');
});