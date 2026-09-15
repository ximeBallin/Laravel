<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ruta de contacto
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

// Grupo de rutas protegidas bajo el prefijo 'dashboard'
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resources([
        'post' => App\Http\Controllers\Dashboard\PostController::class,
        'category' => App\Http\Controllers\Dashboard\CategoryController::class,
        'blog' => BlogController::class,
    ]);
});

// Rutas de perfil generadas por Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/{vue_capture?}', function () {
    return view('vue'); // O el nombre de tu vista Blade principal
})->where('vue_capture', '[\/\w\.-]*');

require __DIR__.'/auth.php';
