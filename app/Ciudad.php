<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['nombre'];

    public function factors(){
        return $this->hasMany('App\Factor')->orderBy('id')->with('materials');
    }
}
