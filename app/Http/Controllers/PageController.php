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
        $pcategorias = [
            ['Id_Categoria' => 1, 'nombre' => 'comida', 'descripcion' => 'Venta de comida', 'slug' => "food"],
            ['Id_Categoria' => 2, 'nombre' => 'veterinaria', 'descripcion' => 'cuidado animal', 'slug' => "vet"],
        ];
        return view('categorias', ['pcategorias' => $pcategorias]);
    }

    public function categoria($slug)
    {
        // consulta a base de datos
        $pcategoria = $slug;
        return view('categoria', ['pcategoria' => $pcategoria]);
    }

    //negocios
    public function negocios()
    {
        //consulta a la base de datos
        $posts = [
            ['Id_Negocio' => 1, 'nombre' => 'Comedor Rosita', 'descripcion' => 'Venta de comida en su propio local', 'Id_Categoria' => 1, 'NombreCategoria' => 'comida', 'Id_TipoNegocio' => 2, 'NombreTipoNegocio' => 'Productos', 'Activo' => true],
            ['Id_Negocio' => 2, 'nombre' => 'Pizza a domicilio', 'descripcion' => 'Venta de comida a domicilio', 'Id_Categoria' => 1, 'NombreCategoria' => 'comida', 'Id_TipoNegocio' => 2, 'NombreTipoNegocio' => 'Productos', 'Activo' => true],
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
