<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate',
        'brand',
        'model'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\Usuario', 'user_id');
        // al no poner el nombre del campo, es 'usuario_id'
    }
}
