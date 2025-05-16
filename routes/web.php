<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function () {
    return view('hola_mundo');
});

Route::get('/diego', function () {
    return view('adios_mundo');
});
