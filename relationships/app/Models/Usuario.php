<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Direction;
use App\Models\Post;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname'
    ];

    public function direction() {
        return $this->hasOne('Direction');
    }


    public function posts() { // nombre del método en plural xq es hasMany
        return $this->hasMany('Post');
    }
}
