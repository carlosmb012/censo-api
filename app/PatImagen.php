<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatImagen extends Model
{
    public $timestamps = false;
    protected $fillable = ['foto', 'patente_id'];
}
