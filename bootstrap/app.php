<?php

use App\Http\Middleware\UserAuth;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Middleware\StoreSessionUserId;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
                ->name('dashboard.')
                ->prefix('dashboard')
                ->group(base_path('routes/admin.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->redirectGuestsTo('/');
        $middleware->alias([
            'admin'=> AdminAuth::class,
            'auth'=> UserAuth::class,
        ]
        );
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
