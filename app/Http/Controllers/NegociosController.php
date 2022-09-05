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
}
