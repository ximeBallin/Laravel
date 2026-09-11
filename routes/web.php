<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test/{id?}/{name?}',function($id = 10,$name="pepe"){
    echo $id;
    echo $name;
});





Route::resource('post', PostController::class);
Route::resource('category', CategoryController::class);



/*
Route::group(['prefix' => 'dashboard'], function () {
    // Route::resource('post', PostController::class);
    // Route::resource('category', CategoryController::class);
    Route::resources([
        'post' => PostController::class,
        'category' => CategoryController::class,
    ]);
});
*/


