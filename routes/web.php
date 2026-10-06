<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect()->route('dashboard');
})->name('home');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

/*
|--------------------------------------------------------------------------
| DASHBOARD - SEMUA MENU DALAM SATU HALAMAN
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [ContractController::class, 'dashboard'])
    ->name('dashboard');

/*
|--------------------------------------------------------------------------
| CONTRACT
|--------------------------------------------------------------------------
*/

Route::resource('contracts', ContractController::class);

/*
|--------------------------------------------------------------------------
| SETTINGS / PENGATURAN
|--------------------------------------------------------------------------
*/

Route::put('/settings/profile', [SettingsController::class, 'updateProfile'])
    ->name('settings.profile.update');

Route::put('/settings/password', [SettingsController::class, 'updatePassword'])
    ->name('settings.password.update');

Route::post('/pengaturan/reminder', [ContractController::class, 'updateReminderSettings'])
    ->name('settings.reminder.update');

/*
|--------------------------------------------------------------------------
| URL LAMA /settings
|--------------------------------------------------------------------------
| Kalau user membuka /settings secara manual,
| tetap diarahkan ke Dashboard bagian Pengaturan.
|--------------------------------------------------------------------------
*/

Route::get('/settings', function () {
    return redirect('/dashboard#pengaturan');
})->name('settings');