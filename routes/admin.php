<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\Balanceontroller;
use App\Http\Controllers\Dashboard\BackLinkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\AuthAdminController;


Route::get('/', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('index');


Route::middleware('auth:admin')->group(function () {
    Route::resource('balances', Balanceontroller::class);
    Route::resource('back-links', BackLinkController::class);
    Route::get('users', [AuthenticatedSessionController::class, 'index'])->name('users.index');


    //Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('logout', [AuthAdminController::class, 'destroy'])
        ->name('logout');
});




Route::middleware('guest')->group(function () {
    Route::get('login', [AuthAdminController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthAdminController::class, 'store']);
});
