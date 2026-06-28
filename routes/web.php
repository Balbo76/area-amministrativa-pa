<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Rotta Pubblica Principale
Route::get('/', function () { return view('public.welcome'); })->name('welcome');

// Rotte autenticazione gestite dai nuovi Controller (Ospiti)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/forgot-password', function () { return view('public.forgot-password'); })->name('password.request');
});

// Rotta per uscire dal sistema (Protetto)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Area Amministrativa Protetta dal Middleware dei Permessi
// PRIMA: Route::prefix('admin')->middleware(['auth', 'permessi.admin'])->group(function () {
// ADESSO (Senza filtri):
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () { return view('private.dashboard'); })->name('admin.dashboard');
    Route::get('/profile', function () { return view('private.profile'); })->name('admin.profile');
    Route::get('/pc-icons', function () { return view('private.pc-icons'); })->name('admin.pc-icons');
});



