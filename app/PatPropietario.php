<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatPropietario extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido',
        'ci', 'expedido', 'personeria', 'razon_social', 'nit', 'patente_id'
    ];

    public function Patente()
    {
        return $this->belongsTo('App\Patente');
    }
}
