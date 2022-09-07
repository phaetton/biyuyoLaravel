<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        return view('clientes.index', [
            'clientes' => clientes::latest()->paginate()
        ]);
    }

    // eliminar
    public function destroy(clientes $cliente)
    {
        $cliente->delete();
        return back();
    }

    // formulario crear
    public function create(clientes $cliente)
    {
        return view('clientes.create', ['cliente' => $cliente]);
    }

    // crear
    public function store(Request $request)
    {
        $cliente = $request->user()->Negocios()->create([
            'nombre' => $nombre = $request->nombre,
            'email' => $request->email,
            'convencional' => $request->convencional,
            'tigo' => $request->tigo,
            'claro' => $request->claro,
            'facebook' => $request->facebook,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'telegram' => $request->telegram,
            'twitter' => $request->twitter,
            'active' => "1",
        ]);

        return redirect()->route('clientes.edit', $cliente);
    }

    //    formulario editar
    public function edit(clientes $cliente)
    {
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    // editar
    public function update(Request $request, clientes $cliente)
    {
        $cliente->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'convencional' => $request->convencional,
            'tigo' => $request->tigo,
            'claro' => $request->claro,
            'facebook' => $request->facebook,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'telegram' => $request->telegram,
            'twitter' => $request->twitter,
            'active' => '1',
        ]);

        return redirect()->route('clientes.edit', $cliente);
    }
}
