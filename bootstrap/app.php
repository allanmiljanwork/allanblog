<?php

use Illuminate\Foundation\Application;
<<<<<<< HEAD
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
=======
use Illuminate\Foundation\Configuration\{Exceptions, Middleware};
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
>>>>>>> windows

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
<<<<<<< HEAD
=======
        api: __DIR__.'/../routes/api.php',
>>>>>>> windows
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
<<<<<<< HEAD
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
=======
        $middleware->redirectUsersTo('/');
        $middleware->statefulApi();
        $middleware->api(prepend: [
            StartSession::class,
            ShareErrorsFromSession::class,
            HandleCors::class,
        ]);
    })->withExceptions(function (Exceptions $exceptions): void {
>>>>>>> windows
        //
    })->create();
