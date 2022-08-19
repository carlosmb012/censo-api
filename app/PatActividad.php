<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatActividad extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['descrip', 'id_act'];
}
