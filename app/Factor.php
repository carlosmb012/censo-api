<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['nombre', 'ciudad_id'];

    public function materials(){
        return $this->hasMany('App\Material')->orderBy('id');
    }

    public function ciudads(){
        return $this->hasMany('App\Ciudad');
    }
}
