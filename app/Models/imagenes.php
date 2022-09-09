<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagenes extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'imagen',
        'nombre',
        'descripcion',
        'negocio_id',
    ];
 
    public function imagen()
    {
    	return $this->belongsTo(negocios::class);
    }

    public function user(){
        return $this->BelongsTo(User::class);
    }
}
