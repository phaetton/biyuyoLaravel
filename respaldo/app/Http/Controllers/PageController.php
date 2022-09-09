<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\clientes;
use App\Models\negocios;
use App\Models\imagenes;
use App\Models\tiponegocios;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->search;

        $pnegocios = negocios::where('nombre', 'LIKE', "%{$search}%")
            ->with('user')
            ->latest()->paginate(16);
        $pcategorias = Categorias::latest()->paginate(16);
        $ptiponegocios = tiponegocios::latest()->paginate(16);
        return view('home', [
            'pnegocios' => $pnegocios,
            'pcategorias' => $pcategorias,
            'ptiponegocios' => $ptiponegocios
        ]);
    }

    //categorias
    public function categorias()
    {
        //consulta a la base de datos
        // $pcategorias =Categorias::get();
        $pcategorias = Categorias::latest()->paginate(16);
        return view('categorias', ['pcategorias' => $pcategorias]);
    }

    public function categoria(Categorias $pcategoria)
    {
        $search = $pcategoria->id;
        $pnegocios = negocios::where('categoria_id', 'LIKE', "%{$search}%")
            ->with('user')
            ->latest()->paginate(16);
        return view('categoria', ['pcategoria' => $pcategoria, 'pnegocios' => $pnegocios]);
    }

    //negocios
    public function negocios()
    {
        $pnegocios = negocios::latest()->paginate(10);
        return view('negocios', ['pnegocios' => $pnegocios]);
    }

    public function negocio(negocios $pnegocio)
    {
        return view('negocio', ['pnegocio' => $pnegocio]);
    }


    //tipo negocios
    public function tiponegocios()
    {
        $ptiponegocios = tiponegocios::latest()->paginate(16);
        return view('tiponegocios', ['ptiponegocios' => $ptiponegocios]);
    }

    public function tiponegocio(tiponegocios $ptiponegocio)
    {
        $search = $ptiponegocio->id;
        $pnegocios = negocios::where('categoria_id', 'LIKE', "%{$search}%")
        ->with('user')
        ->latest()->paginate(16);
        return view('tiponegocio', ['ptiponegocio' => $ptiponegocio,'pnegocios' => $pnegocios]);
    }


    //usuarios
    public function usuarios()
    {
        $pusuarios = User::latest()->paginate(16);
        return view('usuarios', ['pusuarios' => $pusuarios]);
    }

    public function usuario(User $pusuario)
    {
        return view('usuario', ['pusuario' => $pusuario]);
    }


    //clientes
    public function clientes()
    {
        $pclientes = clientes::latest()->paginate(16);
        return view('clientes', ['pclientes' => $pclientes]);
    }

    public function cliente(clientes $pcliente)
    {
        return view('cliente', ['pcliente' => $pcliente]);
    }

      //imagenes
      public function imagenes()
      {
          $pimagenes = imagenes::latest()->paginate(16);
          return view('imagenes', ['pimagenes' => $pimagenes]);
      }
  
      public function imagen(imagenes $pimagen)
      {
          return view('imagen', ['pimagen' => $pimagen]);
      }
}
