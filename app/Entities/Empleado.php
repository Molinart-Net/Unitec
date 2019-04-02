<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "empleados";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'edad', 'direccion', 'estado', 'fecha_nacimiento', 'telefono'
    ];

    public function datoEconomico(){
        return $this->hasOne(DatoEconomico::class);
    }

    public function conocimiento(){
        return $this->hasOne(Conocimiento::class);
    }

    public function cursos(){
        return $this->hasMany(Conocimiento::class);
    }
}
