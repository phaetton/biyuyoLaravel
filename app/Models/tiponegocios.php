<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiponegocios extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagen',
        'nombre',
        'slug',
        'descripcion'
    ];

    public function user(){
        return $this->BelongsTo(User::class);
    }
}
