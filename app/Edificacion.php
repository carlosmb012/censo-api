<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edificacion extends Model
{
    protected $fillable = [
        'bloque', 'piso', 'apto', 'anio_construcc', 'tipo_construcc',
        'estado_construcc', 'superficie', 'evaluacion', 'id_inmueble',
    ];
}
