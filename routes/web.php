<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
})->name('web-site.index');

Route::get('/home', function () {
    return view('website.index-2');
})->name('web-site.index-2');



require __DIR__ . '/auth.php';