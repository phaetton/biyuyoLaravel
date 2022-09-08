<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        return view('clientes.index', [
            'clientes' => clientes::latest()->paginate(16)
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
        //validación
        $request->validate([
            'nombre' => 'required',
            //     'imagen' => 'mimes:jpeg,jpg,png|max:10240',            
        ]);

        $filename='';
        if($request->imagen){
         $filename = time() . "." . $request->imagen->extension();
        $request->imagen->move(public_path("imagen"), $filename);
        }
        $cliente = $request->user()->Clientes()->create([
            'imagen'            =>  $filename,
            'nombre'            =>  $request->nombre,
            'email'             => $request->email,
            'convencional'      => $request->convencional,
            'tigo'              => $request->tigo,
            'claro'             => $request->claro,
            'facebook'          => $request->facebook,
            'whatsapp'          => $request->whatsapp,
            'instagram'         => $request->instagram,
            'telegram'          => $request->telegram,
            'twitter'           => $request->twitter,
            'active'            => "1",
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
        //validación
        $request->validate([
            'nombre' => 'required',
        ]);

        // dd($request->imagen);

        if ($request->imagen) {
            $filename = time() . "." . $request->imagen->extension();
            $request->imagen->move(public_path("imagen"), $filename);

            $cliente->update([
                'imagen'            =>  $filename,
                'nombre'            =>  $request->nombre,
                'email'             => $request->email,
                'convencional'      => $request->convencional,
                'tigo'              => $request->tigo,
                'claro'             => $request->claro,
                'facebook'          => $request->facebook,
                'whatsapp'          => $request->whatsapp,
                'instagram'         => $request->instagram,
                'telegram'          => $request->telegram,
                'twitter'           => $request->twitter,
                'active'            => "1",
            ]);
        } else {
            $cliente->update([
                'nombre'            =>  $request->nombre,
                'email'             => $request->email,
                'convencional'      => $request->convencional,
                'tigo'              => $request->tigo,
                'claro'             => $request->claro,
                'facebook'          => $request->facebook,
                'whatsapp'          => $request->whatsapp,
                'instagram'         => $request->instagram,
                'telegram'          => $request->telegram,
                'twitter'           => $request->twitter,
                'active'            => "1",
            ]);
        }

        return redirect()->route('clientes.edit', $cliente);
    }
}
