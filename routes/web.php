<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

/*
|-------------------------
| AUTH ROUTES
|-------------------------
*/
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', function () {
    auth()->logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login')->with('logout_success', 'Logged out successfully');
})->name('logout');

/*
|-------------------------
| AUTH PROTECTED ROUTES
|-------------------------
*/
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // Users CRUD
    Route::resource('users', UserController::class);

    // Vehicles CRUD
    Route::resource('vehicles', VehicleController::class);

    // Profile Page
    Route::view('/profile', 'profile')
        ->name('profile');

    // Profile Update
    Route::put('/profile/update', [ProfileController::class, 'update'])
        ->name('profile.update');
});