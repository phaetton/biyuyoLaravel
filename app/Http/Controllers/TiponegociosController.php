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
}
