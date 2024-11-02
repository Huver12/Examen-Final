<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObraArteController;
use App\Http\Controllers\ExposicioneController;
use App\Http\Controllers\EstiloArteController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('obra-artes', ObraArteController::class);

Route::resource('exposiciones', ExposicioneController::class);

Route::resource('estilo-artes', EstiloArteController::class);