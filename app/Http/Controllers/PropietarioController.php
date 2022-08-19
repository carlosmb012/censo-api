<?php

namespace App\Http\Controllers;

use App\Propietario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PropietarioController extends Controller
{
  public function show($id_inmueble)
  {
    $list = Propietario::where('id_inmueble', $id_inmueble)->orderBy('id', 'ASC')->get();
    return $list;
  }
}
