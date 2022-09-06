<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

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

    public function create(Categorias $categoria)
    {
        return view('categorias.create', ['categoria' => $categoria]);

    }

    public function edit(Categorias $categoria)
    {
        return view('categorias.edit', ['categoria' => $categoria]);
    }
}
