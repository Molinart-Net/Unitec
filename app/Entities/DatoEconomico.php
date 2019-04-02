<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class DatoEconomico extends Model
{
    protected $table = "datos_economicos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'puesto', 'salario', 'empleado_id'
    ];

    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }
}
