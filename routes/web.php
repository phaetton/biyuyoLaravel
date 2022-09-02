<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
* Route::get    | consultar
* Route::post   | guardar
* Route:delete  | eliminar
* Route::put    | actualizar
*
* las vistas estan en resources/views
*/

Route::get('/', [PageController::class,'home'])->name('home');

//categorias
Route::get('categorias',[PageController::class,'categorias'])->name('categorias');
Route::get('categoria/{slug}', [PageController::class,'categoria'])->name('categoria');
Route::get('categorias/buscar', function (Request $request) {
    return $request->all();
});


//negocios
Route::get('negocios',[PageController::class,'negocios'])->name('negocios');
Route::get('negocio/{id}', [PageController::class,'negocio'])->name('negocio');
Route::get('negocios/buscar', function (Request $request) {
    return $request->all();
});

//tipo negocios
Route::get('tiponegocios', [PageController::class,'tiponegocios'])->name('tiponegocios');
Route::get('tiponegocio/{id}', [PageController::class,'tiponegocio'])->name('tiponegocio');
Route::get('tiponegocios/buscar', function (Request $request) {
    return $request->all();
});

//usuarios
Route::get('usuarios', [PageController::class,'usuarios'])->name('usuarios');
Route::get('usuario/{id}', [PageController::class,'usuario'])->name('usuario');
Route::get('usuarios/buscar', function (Request $request) {
    return $request->all();
});

//clientes
Route::get('clientes', [PageController::class,'clientes'])->name('clientes');
Route::get('cliente/{id}', [PageController::class,'cliente'])->name('cliente');
Route::get('clientes/buscar', function (Request $request) {
    return $request->all();
});
