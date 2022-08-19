<?php

namespace App\Http\Controllers;

use App\Inmueble;
use App\Propietario;
use App\Edificacion;
use App\EdificacionMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InmuebleController extends Controller
{
  public function index($idVisita)
  {
    $list = Inmueble::where('visita_program_id', $idVisita)
      ->get([
        'id', 'cod_catastral', 'direccion', 'barrio',
        'estado', 'latitud', 'longitud', 'observac_dada'
      ]);
    return $list;
  }

  public function show($id)
  {
    $inmueble = Inmueble::findOrFail($id);
    return $inmueble;
  }

  public function update(Request $request, $id)
  {
    try {
      $data = $request->all();
      $inmuebleData = $data['inmueble'];
      $inmueble = Inmueble::where('id', $id)->first();
      $inmueble->update($inmuebleData);
      $propietariosData = $data['propietarios'];
      foreach ($propietariosData as $item) {
        $propietario = Propietario::where('id', $item['id'])->first();
        $propietario->update($item);
      }
      $edificacionesData = $data['edificaciones'];
      //dd($data);
      foreach ($edificacionesData as $item) {
        $edificacion = Edificacion::where('id', $item['id'])->first();
        $edificMaterials = $item['edificacMaterials'];
        //dd($edificMaterials);
        foreach ($edificMaterials as $item2) {
          $edifMat = EdificacionMaterial::where('id', $item2['id'])->first();
          //dd($edifMat);
          $edifMat->update($item2);
        }
        $edificacion->update($item);
      }
      return response()->json(['message' => "ok"]);
    } catch (\Exception $e) {
      return response()->json(['message' => $e->getMessage()]);
    }
  }

  public function cambiarEstado($id)
  {
    try {
      $inmueble = Inmueble::findOrFail($id);
      $inmueble['estado'] = 'Enviado';
      $inmueble->save();
      return response()->json(['message' => "ok"]);
    } catch (\Exception $e) {
      return response()->json(['message' => $e->getMessage()]);
    }
  }

  private function validar($request)
  {
    $validator = Validator::make(
      $request->all(),
      [
        'frente' => 'required',
        'fondo' => 'required',
        'ciudad_id' => 'required',
        'visita_program_id' => 'required',
      ],
      [
        'frente.required' => 'debe ingresar los metros de frente',
        'fondo.required' => 'debe ingresar los metros de fondo',
        'ciudad_id.required' => 'debe ingresar una id de ciudad',
        'visita_program_id.required' => 'debe ingresar una id de visita',
      ]
    );
    return $validator;
  }
}
