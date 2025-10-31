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
    return view('/modulos/entidades/listado');
})->name('entidades');

Route::get('/entidades/example', function () {
    return view('/modulos/entidades/entidad');
})->name('entidad');

Route::get('/cotizaciones', function () {
    return view('/modulos/ventas/listadoCotizaciones');
})->name('cotizaciones');

Route::get('/cotizacion', function () {
    return view('/modulos/ventas/cotizacion');
})->name('cotizacion');

#eliminar después
Route::get('/footer', function () {
    return view('/componentes/footer');
})->name('footer');

