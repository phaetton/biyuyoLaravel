<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    //categorias
    public function categorias()
    {
        //consulta a la base de datos
        $posts = [
            ['Id_Categoria' => 1, 'Nombre' => 'comida', 'Descripcion' => 'Venta de comida', 'slug' => "food"],
            ['Id_Categoria' => 2, 'Nombre' => 'veterinaria', 'Descripcion' => 'cuidado animal', 'slug' => "vet"],
        ];
        return view('categorias', ['posts' => $posts]);
    }

    public function categoria($slug)
    {
        // consulta a base de datos
        $post = $slug;
        return view('categoria', ['post' => $post]);
    }

    //negocios
    public function negocios()
    {
        //consulta a la base de datos
        $posts = [
            ['Id_Negocio' => 1, 'Nombre' => 'Comedor Rosita', 'Descripcion' => 'Venta de comida en su propio local', 'Id_Categoria' => 1, 'NombreCategoria' => 'comida', 'Id_TipoNegocio' => 2, 'NombreTipoNegocio' => 'Productos', 'Activo' => true],
            ['Id_Negocio' => 2, 'Nombre' => 'Pizza a domicilio', 'Descripcion' => 'Venta de comida a domicilio', 'Id_Categoria' => 1, 'NombreCategoria' => 'comida', 'Id_TipoNegocio' => 2, 'NombreTipoNegocio' => 'Productos', 'Activo' => true],
        ];
        return view('negocios', ['posts' => $posts]);
    }

    public function negocio($id)
    {
        // consulta a base de datos
        $post = $id;
        return view('negocio', ['post' => $post]);
    }


    //tipo negocios
    public function tiponegocios()
    {
        return view('listado de tipos de negocios');
    }

    public function tiponegocio($id)
    {
        // consulta a base de datos
        $post = $id;
        return view('tiponegocio', ['post' => $post]);
    }


    //usuarios
    public function usuarios()
    {
        return view('listado de usuarios');
    }

    public function usuario($id)
    {
        // consulta a base de datos
        $post = $id;
        return view('usuarios', ['post' => $post]);
    }


    //clientes
    public function clientes()
    {
        return view('listado de clientes');
    }

    public function cliente($id)
    {
        // consulta a base de datos
        $post = $id;
        return view('cliente', ['post' => $post]);
    }
}
