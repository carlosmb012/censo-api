<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatCondResult extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'patentes_id', 'condiciones_id', 'resultado', 'observaciones'
    ];
}
