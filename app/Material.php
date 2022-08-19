<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['nombre', 'factor_id'];

    public function factor()
    {
        return $this->belongsTo('App\Factor');
    }
}
