<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EdificacionMaterial extends Model
{
    public $timestamps = false;
    protected $fillable = ['edificacion_id', 'material_nombre', 'factor_nombre'];
}
