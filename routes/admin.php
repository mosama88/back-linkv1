<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\Balanceontroller;
use App\Http\Controllers\Dashboard\BackLinkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\AdminAuthenticatedSessionController;

Route::middleware(['auth:admin', 'verified'])
    ->group(function () {
        Route::get('/', function () {
            return view('dashboard.index');
        })->name('index');
        // Route::get('/balance/search', [Balanceontroller::class, 'search'])->name('balances.search');

        //--------------------------------------------------------------------- Users
        Route::resource('users', AuthenticatedSessionController::class);
        //--------------------------------------------------------------------- Balance
        Route::resource('balances', Balanceontroller::class);
        //--------------------------------------------------------------------- BackLink
        Route::resource('back-links', BackLinkController::class);


        //Profile Routes
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::post('logout', [AdminAuthenticatedSessionController::class, 'destroy'])->name('logout');
    });


Route::middleware('guest:admin')->group(function () {
    Route::get('login', [AdminAuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AdminAuthenticatedSessionController::class, 'store']);
});
