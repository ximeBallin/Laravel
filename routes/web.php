<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dashboard/post', PostController::class);
Route::resource('dashboard/category', App\Http\Controllers\Dashboard\CategoryController::class);
