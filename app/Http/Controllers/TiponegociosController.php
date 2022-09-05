<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiponegociosController extends Controller
{
    public function index()
    {
        return view('tiponegocios.index');
    }
}
