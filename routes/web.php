<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
* Route::get    | consultar
* Route::post   | guardar
* Route:delete  | eliminar
* Route::put    | actualizar
*
* las vistas estan en resources/views
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/categorias', function () {
    return view('listado de categorias');
});


Route::get('negocios', function () {
    return view('listado de negocios');
});


Route::get('negocio/{id}', function ($id) {
    // consulta a base de datos
    return view('negocio con id');
});

Route::get('negocios/buscar', function (Request $request) {
    return $request->all();
});

Route::get('tiponegocios', function () {
    return view('listado de tipos de negocios');
});

Route::get('tiponegocio/{id}', function ($id) {
    // consulta a base de datos
    return view('tiponegocio con id');
});

Route::get('tiponegocios/buscar', function (Request $request) {
    return $request->all();
});

Route::get('usuarios', function () {
    return view('listado de usuarios');
});

Route::get('usuario/{id}', function ($id) {
    // consulta a base de datos
    return view('usuario con id');
});

Route::get('usuarios/buscar', function (Request $request) {
    return $request->all();
});
