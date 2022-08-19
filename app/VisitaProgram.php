<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitaProgram extends Model
{
    protected $fillable = ['fecha_visita', 'id_user', 'ciudad_id'];

    public function inmuebles(){
        return $this->hasMany('App\Inmueble');
    }
}
