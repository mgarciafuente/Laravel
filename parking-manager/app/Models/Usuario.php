<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'email'
    ];

    protected $table = "users";

    public function parkings()
    {
        return $this->hasMany('App\Models\Parking');
    }
}
