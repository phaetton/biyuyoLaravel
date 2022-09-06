<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class negocios extends Model
{
    use HasFactory;

   

    public function categoria()
    {
    	return $this->belongsTo(Categorias::class);
    }

    public function tiponegocio()
    {
    	return $this->belongsTo(tiponegocios::class);
    }

    public function cliente()
    {
    	return $this->belongsTo(clientes::class);
    }

    
}
