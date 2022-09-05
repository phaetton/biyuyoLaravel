<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        return view('categorias.index',[
            'categorias'=>Categorias::latest()->paginate()
        ]);
    }
}
