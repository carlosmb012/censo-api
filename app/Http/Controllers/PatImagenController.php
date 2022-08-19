<?php

namespace App\Http\Controllers;

use App\PatImagen;
use Illuminate\Http\Request;

class PatImagenController extends Controller
{
  public function index($patenteId)
  {
    $list = PatImagen::where('patente_id', $patenteId)->get();
    return $list;
  }

  public function store(Request $request)
  {
    try {
      $input = $request->all();
      //dd($input);
      foreach ($input as $item) {
        PatImagen::create($item);
      }
      return response()->json(['message' => "ok"]);
    } catch (\Exception $e) {
      return response()->json(['message' => $e->getMessage()]);
    }
  }

  public function delete($patenteId)
  {
    try {
      $imagens = PatImagen::where('patente_id', $patenteId)->get();
      foreach ($imagens as $item) {
        $item->delete();
      }
      return response()->json(['message' => "ok"]);
    } catch (\Exception $e) {
      return response()->json(['message' => $e->getMessage()]);
    }
  }
}
