<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    protected $fillable = [
        'cod_catastral', 'estado', 'latitud', 'longitud', 'tipo_calle', 'direccion', 'observac_dada',
        'categoria', 'material_via', 'ubicacion', 'cuadra_alcantar', 'cuadra_agua',
        'cuadra_luz', 'cuadra_telefono', 'cuadra_cable', 'cuadra_gas', 'frente',
        'fondo', 'nro_frentes', 'instalac_sanitaria', 'topografia', 'muros_perim',
        'conex_alcantar', 'conex_agua', 'conex_luz', 'conex_telefono', 'conex_cable',
        'conex_gas', 'edific_espec', 'espec_aire_acondic', 'espec_tanq_subterr',
        'espec_tanq_elevado', 'espec_area_servic', 'espec_garaje', 'espec_deposito',
        'mejora_lavanderia', 'mejora_parrillero', 'mejora_horno', 'mejora_piscina',
        'mejora_otros', 'uso', 'acera', 'observaciones', 'superficie',
        'modo_adquisic', 'tipo_docum', 'fecha_docum', 'nro_ddrr', 'fecha_ddrr',
        'ciudad_id', 'visita_program_id',
        'cod_uv', 'cod_man', 'cod_pred', 'barrio',
    ];

    public function Visita()
    {
        return $this->belongsTo('App\Visita');
    }

    public function propietarios()
    {
        return $this->hasMany('App\Propietario');
    }
}
