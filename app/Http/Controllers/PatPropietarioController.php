<?php

namespace App\Http\Controllers;

use App\PatPropietario;
use Illuminate\Http\Request;

class PatPropietarioController extends Controller
{
  public function show($patente_id)
  {
    $list = PatPropietario::where('patente_id', $patente_id)->first();
    return $list;
  }
}
