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
    return view('home');
})->name('home');

//categorias
Route::get('categorias', function () {
    //consulta a la base de datos
    $posts = [
        ['Id_Categoria' => 1, 'Nombre' => 'comida', 'Descripcion' => 'Venta de comida', 'slug' => "food"],
        ['Id_Categoria' => 2, 'Nombre' => 'veterinaria', 'Descripcion' => 'cuidado animal', 'slug' => "vet"],
    ];
    return view('categorias', ['posts' => $posts]);
})->name('categorias');

Route::get('categoria/{slug}', function ($slug) {
    // consulta a base de datos
    $post = $slug;
    return view('categoria', ['post' => $post]);
})->name('categoria');

Route::get('categorias/buscar', function (Request $request) {
    return $request->all();
});


//negocios
Route::get('negocios', function () {
    //consulta a la base de datos
    $posts = [
        ['Id_Negocio' => 1, 'Nombre' => 'Comedor Rosita', 'Descripcion' => 'Venta de comida en su propio local', 'Id_Categoria' => 1, 'NombreCategoria' => 'comida', 'Id_TipoNegocio' => 2, 'NombreTipoNegocio' => 'Productos', 'Activo' => true],
        ['Id_Negocio' => 2, 'Nombre' => 'Pizza a domicilio', 'Descripcion' => 'Venta de comida a domicilio', 'Id_Categoria' => 1, 'NombreCategoria' => 'comida', 'Id_TipoNegocio' => 2, 'NombreTipoNegocio' => 'Productos', 'Activo' => true],
    ];
    return view('negocios', ['posts' => $posts]);
})->name('negocios');

Route::get('negocio/{id}', function ($id) {
    // consulta a base de datos
    $post = $id;
    return view('negocio', ['post' => $post]);
})->name('negocio');

Route::get('negocios/buscar', function (Request $request) {
    return $request->all();
});

//tipo negocios
Route::get('tiponegocios', function () {
    return view('listado de tipos de negocios');
})->name('tiponegocios');

Route::get('tiponegocio/{id}', function ($id) {
    // consulta a base de datos
    $post = $id;
    return view('tiponegocio', ['post' => $post]);
})->name('tiponegocio');

Route::get('tiponegocios/buscar', function (Request $request) {
    return $request->all();
});

//usuarios
Route::get('usuarios', function () {
    return view('listado de usuarios');
})->name('usuarios');

Route::get('usuario/{id}', function ($id) {
    // consulta a base de datos
    $post = $id;
    return view('usuarios', ['post' => $post]);
})->name('usuario');

Route::get('usuarios/buscar', function (Request $request) {
    return $request->all();
});

//clientes
Route::get('clientes', function () {
    return view('listado de clientes');
})->name('clientes');

Route::get('cliente/{id}', function ($id) {
    // consulta a base de datos
    $post = $id;
    return view('cliente', ['post' => $post]);
})->name('cliente');

Route::get('clientes/buscar', function (Request $request) {
    return $request->all();
});
