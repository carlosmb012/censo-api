<?php

namespace App\Http\Controllers;

use App\Edificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EdificacionController extends Controller
{

  public function show($id_inmueble)
  {
    $list = Edificacion::where('id_inmueble', $id_inmueble)->orderBy('id', 'ASC')->get();
    return $list;
  }

  public function update(Request $request, $id)
  {
    //dd($request);
    $validator = $this->validar($request);
    if ($validator->fails()) {
      return response()->json(['error' => $validator->errors()], 401);
    }
    $edificacion = Edificacion::where('id', $id)->first();
    $edificacion->update($request->all());
    return $edificacion;
  }

  private function validar($request)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'bloque' => 'required',
        'piso' => 'required',
        'apto' => 'required',
        'anio_construcc' => 'required',
        'superficie' => 'required',
        'id_inmueble' => 'required',
      ],
      [
        'bloque.required' => 'debe ingresar el numero de bloque',
        'piso.required' => 'debe ingresar el numero de piso',
        'apto.required' => 'debe ingresar el numero de apto',
        'anio_construcc.required' => 'debe ingresar el año de construccion',
        'superficie.required' => 'debe ingresar la superficie',
        'id_inmueble.required' => 'debe ingresar una id de inmueble',
      ]
    );
    return $validator;
  }
}
