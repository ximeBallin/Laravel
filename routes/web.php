<?php

use App\Http\Controllers\PrimerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [PrimerController::class, 'index']);
