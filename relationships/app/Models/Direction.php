<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;

class Direction extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'number',
        'postal_code',
        'city',
    ];

    public function direction() {
        return $this->belongsTo('Usuario', 'usuario_id');
    }
}
