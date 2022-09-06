<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        return view('clientes.index',[
            'clientes'=>clientes::latest()->paginate()
        ]);
    }

    public function destroy(clientes $cliente)
    {
        $cliente->delete();
        return back();
    }
}
