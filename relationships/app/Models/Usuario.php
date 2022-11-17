<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Direction;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname'
    ];

    public function direction() {
        return $this->hasOne('Direction', 'usuario_id');
    }
}
