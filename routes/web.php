<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba-texto', function () {
    return 'Hola, esto es una prueba de ruta para PB_MAPS';
});

Route::get('/lugares', function () {
    return view('lugares.index');
});