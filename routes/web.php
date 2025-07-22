<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleSheetController;
use App\Http\Controllers\LookupController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/sheet', [GoogleSheetController::class, 'read']);
Route::post('/sheet', [GoogleSheetController::class, 'write']);
Route::get('/sheet/form', function () {
    return view('sheets.form');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.home');
    //Other dashboard routes
    Route::match(['get','post'], '/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
    Route::match(['get','post'], '/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');
    Route::resource('lookups', LookupController::class);
    Route::resource('customers', CustomerController::class);
});

//socialite routes
Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

require __DIR__.'/auth.php';