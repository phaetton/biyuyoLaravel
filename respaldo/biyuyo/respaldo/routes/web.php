<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\NegociosController;
use Illuminate\Http\Request;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TiponegociosController;
use Illuminate\Support\Facades\Route;

Route::get('categorias/buscar', function (Request $request) {
    return $request->all();
});

Route::get('negocios/buscar', function (Request $request) {
    return $request->all();
});

Route::get('tiponegocios/buscar', function (Request $request) {
    return $request->all();
});

Route::get('usuarios/buscar', function (Request $request) {
    return $request->all();
});

Route::get('clientes/buscar', function (Request $request) {
    return $request->all();
});

Route::controller(PageController::class)->group(function () {
    Route::get('/',                 'home')->name('home');

    //categorias
    Route::get('categoria/{pcategoria:slug}',       'categoria')->name('categoria');

    //negocios
    Route::get('negocio/{pnegocio:slug}',           'negocio')->name('negocio');

    //tipo negocios
    Route::get('tiponegocio/{ptiponegocio:slug}',   'tiponegocio')->name('tiponegocio');

    //usuarios
    Route::get('usuario/{pusuario:id}',             'usuario')->name('usuario');

    //clientes
    Route::get('cliente/{pcliente:id}',             'cliente')->name('cliente');

       //imagenes
       Route::get('imagen/{pimagen:id}',             'imagen')->name('imagen');

    
});



// Route::resource(('categorias'),CategoriasController::class)->except(['show']);
// Route::resource(('negocios'),NegociosController::class)->except(['show']);
// Route::resource(('tiponegocios'),TiponegociosController::class)->except(['show']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::redirect('/clientes','clientes')->name('clientes');
 Route::resource(('clientes'),ClientesController::class)->middleware(['auth'])->except(['show']);

 Route::redirect('/negocios','negocios')->name('negocios');
 Route::resource(('negocios'),NegociosController::class)->middleware(['auth'])->except(['show']);

 Route::redirect('/tiponegocios','tiponegocios')->name('tiponegocios');
 Route::resource(('tiponegocios'),TiponegociosController::class)->middleware(['auth'])->except(['show']);

 Route::redirect('/categorias','categorias')->name('categorias');
 Route::resource(('categorias'),CategoriasController::class)->middleware(['auth'])->except(['show']);

 Route::redirect('/imagenes','imagenes')->name('imagenes');
 Route::resource(('imagenes'),ImagenesController::class)->middleware(['auth'])->except(['show']);


require __DIR__.'/auth.php';
