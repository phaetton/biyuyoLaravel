<?php

namespace App\Http\Controllers;

use App\Models\tiponegocios;
use Illuminate\Http\Request;

class TiponegociosController extends Controller
{
    public function index()
    {
        return view('tiponegocios.index',[
            'tiponegocios'=>tiponegocios::latest()->paginate()
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

    public function edit(tiponegocios $tiponegocio)
    {
        return view('tiponegocios.edit', ['tiponegocio' => $tiponegocio]);
    }
}
