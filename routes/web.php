<?php

use App\Http\Controllers\PrimerControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [PrimerController::class, 'index']);
//Route::resource('post', PrimerController::class);
