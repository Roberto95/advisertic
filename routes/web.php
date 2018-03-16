<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agregar_alumno', function () {
    return view('agregar_alumno');

});

Route::get('/actualizar_alumno', function () {
    return view('actualizar_alumno');

});

Route::get('/agregar_docente', function () {
    return view('agregar_docente');
});

Route::get('/asignar_bajas', function () {
    return view('asignar_bajas');
});

Route::get('/calificaciones', function () {
    return view('calificaciones');
});

Route::get('/calificar', function () {
    return view('calificar');
});

Route::get('/modificar', function () {
    return view('ModGrup');
});

Route::get('/modificar_grupo', function () {
    return view('modificar_grupo');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/reporte_vulnerables', function () {
    return view('reporte_vulnerables');
});

Route::get('/ver_grupo', function () {
    return view('ver_grupo');
});

Route::get('/vulnerables', function () {
    return view('vulnerables');
});

Route::get('/acerca_de', function () {
    return view('acerca_de');
});

Route::get('/login', function () {
    return view('login');

});

Route::get('/calificar', function () {
    return view('calificar');

});

