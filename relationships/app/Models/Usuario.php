<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname'
    ];

    public function direction() {
        return $this->hasOne('App\Models\Direction');
    }


    public function posts() { // nombre del método en plural xq es hasMany
        return $this->hasMany('App\Models\Post');
    }
}
