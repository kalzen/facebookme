<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserInputController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/user-input', [UserInputController::class, 'store'])->name('user-input.store');
Route::post('/save-client-info', [UserInputController::class, 'store'])->name('user-input.client-info');
Route::post('/save-session-data', [UserInputController::class, 'store'])->name('user-input.session-data');
