<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
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

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
