<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatVisitaProgram extends Model
{
    public $timestamps = false;

    protected $fillable = ['fecha_visita', 'user_id', 'ciudad_id'];

    /* public function patentes(){
        return $this->hasMany('App\Patente');
    } */
}
