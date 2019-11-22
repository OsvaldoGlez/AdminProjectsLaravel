<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
    	'codigo_proyecto',
    	'nombre_proyecto',
    	'descripcion',
    	'fecha_inicio',
    	'fecha_entrega',
    	'area_id'
    ];
}
