<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/test', function () {
    return view('test');
});


//Route::get('/crud', function () {
//    return view('crud/index');
//});

Route::get('/crud',function(){
    $age=20;
   $data = ['name'=> 'Xime', 'age'=>$age];
   return view('crud/index',$data);
})->name('crud');



