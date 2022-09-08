<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagenes extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagen',
        'descripcion',
        'negocio_id',
    ];

     
 public function negocio()
 {
     return $this->belongsTo(negocios::class);
 }
}
