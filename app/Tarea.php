<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [
    	'nombre_tarea',
    	'descripcion',
    	'estatus',
    	'proyecto_id'
    ];
}
