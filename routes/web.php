<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/owner', function () { //test
    return view('duwe');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/test', [App\Http\Controllers\TimeController::class, 'test']);

Route::get('/test', function () {
    return view('test');
});


