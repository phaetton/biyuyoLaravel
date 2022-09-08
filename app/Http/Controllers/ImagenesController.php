<?php

namespace App\Http\Controllers;

use App\Models\imagenes;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    public function index()
    {
        return view('imagenes.index', [
            'imagenes' => imagenes::latest()->paginate()
        ]);
    }
}
