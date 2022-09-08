<?php

namespace App\Http\Controllers;

use App\Models\imagenes;
use App\Models\negocios;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    public function index()
    {
        return view('imagenes.index', [
            'imagenes' => imagenes::latest()->paginate(16)
        ]);
    }

    public function destroy(imagenes $imagen)
    {
        $imagen->delete();
        return back();
    }

    //formulario crear
    public function create(imagenes $imagen)
    {
        $negocios = negocios::all();
        return view('imagenes.create', ['imagen' => $imagen], with(compact('negocios')));
    }

    // crear
    public function store(Request $request)
    {
        //validación
         $request->validate([
             'imagen' => 'required|image|max:2048',
            'descripcion' => 'required',
            'negocio_id' => 'required',
         ]);


        return $request->file('imagen')->store('public/loadimagenes');


        //         $imagen = $request->user()->imagenes()->create([
        //             'imagen' => $request->imagen,
        //             'descripcion' => $request->descripcion,
        //             'negocio_id' => $request->negocio,
        //         ]);

        //         return redirect()->route('imagenes.edit', $imagen);
    }
}
