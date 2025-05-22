<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function () {
    return view('hola_mundo');
})->name('hola-mundo');

Route::get('/diego', function () {
    return view('diego');
})->name('diego'); 

Route::get('/nav-bar', function () {
    return view('nav_bar');
})->name('nav-bar');

Route::get('/contactos', function () {
    return view('contactos');
})->name('contactos');
