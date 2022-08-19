<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    public $timestamps = false;
    protected $fillable = ['foto', 'id_inmueble'];
}
