<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text'
    ];

    public function direction() {
        return $this->belongsTo('Usuario');
        // al no poner el nombre del campo, es 'usuario_id'
    }
}
