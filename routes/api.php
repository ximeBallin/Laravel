<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;

Route::get('category/all', [CategoryController::class, 'all']);
Route::apiResource('categories', CategoryController::class);
Route::get('category/{category}/posts', [CategoryController::class, 'posts']);
