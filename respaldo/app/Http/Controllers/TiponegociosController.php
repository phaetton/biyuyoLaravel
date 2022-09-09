<?php

namespace App\Http\Controllers;

use App\Models\tiponegocios;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class TiponegociosController extends Controller
{
    public function index()
    {
        return view('tiponegocios.index', [
            'tiponegocios' => tiponegocios::latest()->paginate(16)
        ]);
    }

    public function destroy(tiponegocios $tiponegocio)
    {
        $tiponegocio->delete();
        return back();
    }

    public function create(tiponegocios $tiponegocio)
    {
        return view('tiponegocios.create', ['tiponegocio' => $tiponegocio]);
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
        $request->imagen->move(public_path("images/tiponegocios"), $filename);
        }
        
        $tiponegocio = $request->user()->tiponegocios()->create([
            'imagen'            =>  $filename,
            'nombre' => $nombre = $request->nombre,
            'slug' => Str::slug($nombre),
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('tiponegocios.edit', $tiponegocio);
    }

    public function edit(tiponegocios $tiponegocio)
    {
        return view('tiponegocios.edit', ['tiponegocio' => $tiponegocio]);
    }
     // editar
     public function update(Request $request, tiponegocios $tiponegocio)
     {
        
           //validación
           $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $filename='';
        if($request->imagen){
         $filename = time() . "." . $request->imagen->extension();
        $request->imagen->move(public_path("images/tiponegocios"), $filename);
        }

         $tiponegocio->update([
            'imagen'            =>  $filename,
             'nombre' => $nombre = $request->nombre,
             'slug' => Str::slug($nombre),
             'descripcion' => $request->descripcion,
         ]);
 
         return redirect()->route('tiponegocios.edit', $tiponegocio);
     }
}
