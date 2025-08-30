<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
})->name('web-site.index');

Route::get('/home', function () {
    return view('website.index-2');
})->name('web-site.index-2');



Route::middleware(['auth', 'verified'])
    ->group(function () {
        //Profile Routes
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });



require __DIR__ . '/auth.php';
