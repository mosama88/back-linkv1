<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\Balanceontroller;
use App\Http\Controllers\Dashboard\BackLinkController;


Route::get('/', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('index');


Route::middleware('auth:admin')->group(function () {
    Route::resource('balances', Balanceontroller::class);
    Route::resource('back-links', BackLinkController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});