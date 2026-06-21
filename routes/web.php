<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Rotta Pubblica Principale
Route::get('/', function () { return view('welcome'); })->name('welcome');

// Rotte autenticazione gestite dai nuovi Controller (Ospiti)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/forgot-password', function () { return view('auth.forgot-password'); })->name('password.request');
});

// Rotta per uscire dal sistema (Protetto)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Area Amministrativa Protetta dal Middleware dei Permessi
Route::prefix('admin')->middleware(['auth', 'permessi.admin'])->group(function () {
    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::get('/profile', function () { return view('admin.profile'); })->name('admin.profile');
});



