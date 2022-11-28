<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'number',
        'postal_code',
        'city',
    ];

    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
        // al no poner el nombre del campo, es 'usuario_id'
    }
}
