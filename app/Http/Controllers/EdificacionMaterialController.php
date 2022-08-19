<?php

namespace App\Http\Controllers;

use App\EdificacionMaterial;
use Illuminate\Http\Request;

class EdificacionMaterialController extends Controller
{
  public function show($edificacion_id)
  {
    $list = EdificacionMaterial::where('edificacion_id', $edificacion_id)->orderBy('id', 'ASC')->get();
    return $list;
  }
}
