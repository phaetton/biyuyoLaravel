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
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $filename = '';
        if ($request->imagen) {
            $filename = time() . "." . $request->imagen->extension();
            $request->imagen->move(public_path("images/imagenes"), $filename);
        }


        $negocio = $request->user()->Imagenes()->create([
            'imagen'            => $filename,
            'nombre'            => $request->nombre,
            'descripcion'       => $request->descripcion,
            'negocio_id'        => $request->negocio
        ]);

        return redirect()->route('imagenes.index');
    }

   
}
