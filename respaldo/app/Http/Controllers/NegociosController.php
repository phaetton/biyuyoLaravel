<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\clientes;
use App\Models\negocios;
use App\Models\tiponegocios;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class NegociosController extends Controller
{

    public function index()
    {
        return view('negocios.index', [
            'negocios' => negocios::latest()->paginate(16)
        ]);
    }

    public function destroy(negocios $negocio)
    {
        $negocio->delete();
        return back();
    }

    //formulario crear
    public function create(negocios $negocio)
    {
        $categorias = Categorias::all();
        $tiponegocios = tiponegocios::all();
        $clientes = clientes::all();
        return view('negocios.create', ['negocio' => $negocio], with(compact('categorias', 'tiponegocios', 'clientes')));
    }

    // crear
    public function store(Request $request)
    {
        //validación
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $filename='';
        if($request->imagen){
         $filename = time() . "." . $request->imagen->extension();
        $request->imagen->move(public_path("images/negocios"), $filename);
        }

        $negocio = $request->user()->Negocios()->create([
            'imagen'            =>  $filename,
            'nombre' => $nombre = $request->nombre,
            'slug' => Str::slug($nombre),
            'descripcion' => $request->descripcion,
            'categoria_id' => $request -> categoria,
            'tiponegocio_id' => $request -> tiponegocio,
            'cliente_id' => $request -> cliente,
            'email' => $request->email,
            'convencional' => $request->convencional,
            'tigo' => $request->tigo,
            'claro' => $request->claro,
            'facebook' => $request->facebook,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'telegram' => $request->telegram,
            'twitter' => $request->twitter,
            'active' => "1",
        ]);

        return redirect()->route('negocios.edit', $negocio);
    }

    public function edit(negocios $negocio)
    {
        $categorias = Categorias::all();
        $tiponegocios = tiponegocios::all();
        $clientes = clientes::all();

        return view('negocios.edit', ['negocio' => $negocio], with(compact('categorias', 'tiponegocios', 'clientes')));
    }
    // editar
    public function update(Request $request, negocios $negocio)
    {
        //validación
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $filename='';
        if($request->imagen){
         $filename = time() . "." . $request->imagen->extension();
        $request->imagen->move(public_path("images/negocios"), $filename);
        }


        $negocio->update([
            'imagen'            =>  $filename,
            'nombre' => $nombre = $request->nombre,
            'slug' => Str::slug($nombre),
            'descripcion' => $request->descripcion,
            'categoria_id' => $request -> categoria,
            'tiponegocio_id' => $request -> tiponegocio,
            'cliente_id' => $request -> cliente,
            'email' => $request->email,
            'convencional' => $request->convencional,
            'tigo' => $request->tigo,
            'claro' => $request->claro,
            'facebook' => $request->facebook,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'telegram' => $request->telegram,
            'twitter' => $request->twitter,
            'active' => '1',
        ]);

        return redirect()->route('negocios.edit', $negocio);
    }
}
