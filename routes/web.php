<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('login',[LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('login',[LoginController::class, 'authenticate'])->middleware('guest');

Route::post('logout',LogoutController::class)->name('logout')->middleware('auth');

Route::middleware(['auth'])->group(function(){
    Route::get('/sesi',[SesiController::class, 'index']);
    Route::get('/sesi/pemilik',[SesiController::class, 'pemilik']);
    Route::get('/sesi/tamu',[SesiController::class, 'tamu']);
});