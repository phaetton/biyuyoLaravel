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

    public function store(Request $request)
    {
        
        $categoria=$request->user()->Categorias()->create([
            'nombre'=>$nombre="juan3",
            'slug'=>Str::slug($nombre),
            'descripcion'=>"el es juan3"
        ]);
         return redirect()->route('categorias.edit', $categoria);
    }

    public function create(Categorias $categoria)
    {
        return view('categorias.create', ['categoria' => $categoria]);
    }

    public function edit(Categorias $categoria)
    {
        return view('categorias.edit', ['categoria' => $categoria]);
    }
}
