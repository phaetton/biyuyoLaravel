<?php

namespace App\Http\Controllers;

use App\Models\negocios;
use Illuminate\Http\Request;

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
   
    public function create(negocios $negocio)
    {
        return view('negocios.create', ['negocio' => $negocio]);
    }

    public function edit(negocios $negocio)
    {
        return view('negocios.edit', ['negocio' => $negocio]);
    }
}
