<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::view('/', 'welcome')->name('home');

Route::get('/hello', function () {
    return 'Hello from MRMR ^^ !';
});

Route::get('/hello/{name}', function (string $name) {
    return view('hello', ['name' => $name]);
});

Route::get('/tickets', [TicketController::class, 'index']);