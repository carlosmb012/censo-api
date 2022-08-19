<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'tipo', 'primer_nombre', 'segundo_nombre',
        'primer_apellido', 'segundo_apellido', 'ci', 'expedido',
        'personeria', 'razon_social', 'nit', 'id_inmueble'
    ];

    public function Inmueble()
    {
        return $this->belongsTo('App\Inmueble');
    }
}
