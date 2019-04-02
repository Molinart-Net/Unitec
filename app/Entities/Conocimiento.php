<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Conocimiento extends Model
{
    protected $table = "conocimientos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'curso', 'porcentaje'
    ];

    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }

    public function lenguaje(){
        return $this->belongsTo(Lenguaje::class);
    }
}
