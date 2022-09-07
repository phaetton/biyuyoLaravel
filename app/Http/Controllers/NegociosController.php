<?php

namespace App\Http\Controllers;

use App\Models\negocios;
use Illuminate\Http\Request;
use illuminate\Support\Str;
class NegociosController extends Controller
{

    public function index()
    {
        return view('negocios.index',[
            'negocios'=>negocios::latest()->paginate()
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
        return view('negocios.create', ['negocio' => $negocio]);
    }

     // crear
     public function store(Request $request)
     {
            //validación
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

         $negocio = $request->user()->Negocios()->create([
             'nombre' => $nombre = $request->nombre,
             'slug' => Str::slug($nombre),
             'descripcion' => $request->descripcion,
             'categoria_id'=>"1",
             'tiponegocio_id'=>"1",
             'cliente_id'=>"1",
             'email' => $request->email,
             'convencional' => $request->convencional,
             'tigo' => $request->tigo,
             'claro' => $request->claro,
             'facebook' => $request->facebook,
             'whatsapp' => $request->whatsapp,
             'instagram' => $request->instagram,
             'telegram' => $request->telegram,
             'twitter' => $request->twitter,
             'active'=>"1",
         ]);
 
         return redirect()->route('negocios.edit', $negocio);
     }

    public function edit(negocios $negocio)
    {
        return view('negocios.edit', ['negocio' => $negocio]);
    }
     // editar
     public function update(Request $request, negocios $negocio)
     {
           //validación
           $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

         $negocio->update([
            'nombre' => $nombre = $request->nombre,
            'slug' => Str::slug($nombre),
            'descripcion' => $request->descripcion,
            'categoria_id'=>"1",
            'tiponegocio_id'=>"1",
            'cliente_id'=>"1",
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
