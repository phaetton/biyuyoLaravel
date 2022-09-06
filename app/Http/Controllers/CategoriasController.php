<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class CategoriasController extends Controller
{
    public function index()
    {
        return view('categorias.index', [
            'categorias' => Categorias::latest()->paginate()
        ]);
    }

    public function destroy(Categorias $categoria)
    {
        $categoria->delete();
        return back();
    }

    // formulario de crear
    public function create(Categorias $categoria)
    {
        return view('categorias.create', ['categoria' => $categoria]);
    }

    // crear
    public function store(Request $request)
    {
        $categoria = $request->user()->Categorias()->create([
            'nombre' => $nombre = $request->nombre,
            'slug' => Str::slug($nombre),
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('categorias.edit', $categoria);
    }

    // formulario de editar
    public function edit(Categorias $categoria)
    {
        return view('categorias.edit', ['categoria' => $categoria]);
    }

    // editar
    public function update(Request $request,Categorias $categoria)
    {
        $categoria -> update([
            'nombre' => $nombre = $request->nombre,
            'slug' => Str::slug($nombre),
            'descripcion' => $request->descripcion
        ]);

        return redirect()->route('categorias.edit', $categoria);
    }
}
