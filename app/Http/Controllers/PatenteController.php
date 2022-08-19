<?php

namespace App\Http\Controllers;

use App\Patente;
use App\PatPropietario;
use App\PatCondResult;
use Illuminate\Http\Request;

class PatenteController extends Controller
{
  public function index($idVisita)
  {
    $list = Patente::where('visita_program_id', $idVisita)
      ->get([
        'id', 'cod_pat', 'raz_soc_pat', 'direccion', 'estado', 'latitud', 'longitud', 'observac_dada'
      ]);
    return $list;
  }

  public function show($id)
  {
    $Patente = Patente::findOrFail($id);
    return $Patente;
  }

  public function store(Request $request)
  {
    try {
      $data = $request->all();
      //dd($data);
      $patenteData = $data['patente'];
      $patente = Patente::create($patenteData);
      $idPatente = $patente->id;
      $propietarioData = $data['propietario'];
      $propietarioData['patente_id'] = $idPatente;
      PatPropietario::create($propietarioData);
      $resultadosData = $data['resultados'];
      foreach ($resultadosData as $item) {
        $item['patentes_id'] = $idPatente;
        PatCondResult::create($item);
      }
      return response()->json(['message' => "ok", 'idPatente' => $idPatente]);
    } catch (\Exception $e) {
      return response()->json(['message' => $e->getMessage()]);
    }
  }

  public function update(Request $request, $id)
  {
    try {
      $data = $request->all();
      $patenteData = $data['patente'];
      $patente = Patente::where('id', $id)->first();
      $patente->update($patenteData);

      $propietarioData = $data['propietario'];
      //dd($data);
      $idPropietario = $propietarioData['id'];
      $propietario = PatPropietario::where('id', $idPropietario)->first();
      $propietario->update($propietarioData);

      $resultadosData = $data['resultados'];
      foreach ($resultadosData as $item) {
        $condResult = PatCondResult::where('id', $item['id'])->first();
        $condResult->update($item);
      }
      return response()->json(['message' => "ok", 'idPatente' => $id]);
    } catch (\Exception $e) {
      return response()->json(['message' => $e->getMessage()]);
    }
  }

  public function cambiarEstado($id)
  {
    try {
      $patente = Patente::findOrFail($id);
      $patente['estado'] = 'Enviado';
      $patente->save();
      return response()->json(['message' => "ok"]);
    } catch (\Exception $e) {
      return response()->json(['message' => $e->getMessage()]);
    }
  }
}
