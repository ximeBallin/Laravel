<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([App\Http\Middleware\TestMiddleware::class])->group(function () {
    Route::get('/test/{id?}/{name?}', function ($id = 10, $name = 'Rebeca') {
        echo $id;
        echo $name;
    });
});

Route::get('/contacto', function () {
    return 'Página de contacto';
})->name('contacto');

Route::group(['prefix' => 'dashboard'], function () {
    Route::resource('post', PostController::class);
    Route::resource('category', CategoryController::class);
});
