<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patente extends Model
{
    protected $fillable = [
        'cod_pat', 'estado', 'observac_dada', 'latitud', 'longitud', 'raz_soc_pat',
        'fecha_inicio', 'superficie', 'ambulante', 'direccion', 'edificio',
        'cod_uv', 'cod_man', 'cod_pred', 'cod_blq', 'cod_piso', 'cod_apto',
        'email', 'telefono1', 'telefono2', 'observaciones',
        'ciudad_id', 'visita_program_id', 'pat_actividades_id',
    ];

    /* public function Visita()
    {
        return $this->belongsTo('App\Visita');
    } */

    public function propietario()
    {
        return $this->hasMany('App\PatPropietario');
    }
}
