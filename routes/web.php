<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CarreraController;

Route::get('/', function () {
    return view('inicio');
});

/* Route::get('/calendario', function () {
    return view('calendario');
})->name('calendario'); */
Route::get('/calendario', [MenuController::class, 'calendario'])->name('calendario');

Route::get('/carreras', function () {
    return view('carreras');
})->name('carreras');

Route::get('/carrera/{indice}', [CarreraController::class, 'mostrarCarrera'])->name('carrera');

Route::resource('menu', MenuController::class); 


/* Me agrega al route list el método saludar */
Route::get('saludar/{usuario}', [MenuController::class, 'saludar'])->name('saludar');