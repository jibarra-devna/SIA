<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/welcome');
})->name('inicio');

Route::get('/menu', function () {
    return view('/componentes/menu');
});

Route::get('/header', function () {
    return view('/componentes/header');
});

Route::get('/entidades', function () {
    return view('/modulos/entidades');
})->name('entidades');

Route::get('/cotizaciones', function () {
    return view('/modulos/ventas/cotizaciones');
})->name('cotizaciones');

#eliminar después
Route::get('/footer', function () {
    return view('/componentes/footer');
})->name('footer');

