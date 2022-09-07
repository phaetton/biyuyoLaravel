<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class negocios extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'categoria_id',
        'tiponegocio_id',
        'cliente_id',
        'email',
        'convencional',
        'tigo',
        'claro',
        'facebook',
        'whatsapp',
        'instagram',
        'telegram',
        'twitter',
        'active',
    ];
 
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

    public function user(){
        return $this->BelongsTo(User::class);
    }
    
}
