<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;

Route::get('/', function () {
    return 'Selamat datang di Aplikasi Laravel';
});

Route::get('/greet/{nama}/{npm}', function ($nama, $npm) {
    return "Halo, $nama $npm !";
});

Route::get('/', [GreetingsController::class, 'welcome']);

Route::get('/greet/{nama}/{npm}', [GreetingsController::class, 'greet']);
