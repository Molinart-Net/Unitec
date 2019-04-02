<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Lenguaje extends Model
{
    protected $table = "lenguajes";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lenguaje'
    ];
}
