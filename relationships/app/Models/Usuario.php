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
        return $this->hasOne('Direction');
        // al no poner el nombre del campo, es 'direction_id'
    }


    public function posts() { // nombre del método en plural xq es hasMany
        return $this->hasMany('Post');
        // al no poner el nombre del campo, es 'post_id'
    }
}
