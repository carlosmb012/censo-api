<?php

namespace App\Http\Controllers;

use App\Imagen;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
  public function index($idInmueble)
  {
    $list = Imagen::where('id_inmueble', $idInmueble)->get();
    return $list;
  }

  public function store(Request $request)
  {
    try {
      $input = $request->all();
      foreach ($input as $item) {
        Imagen::create($item);
      }
      return response()->json(['message' => "ok"]);
    } catch (\Exception $e) {
      return response()->json(['message' => $e->getMessage()]);
    }
  }

  public function delete($idInmueble)
  {
    try {
      $imagens = Imagen::where('id_inmueble', $idInmueble)->get();
      foreach ($imagens as $item) {
        $item->delete();
      }
      return response()->json(['message' => "ok"]);
    } catch (\Exception $e) {
      return response()->json(['message' => $e->getMessage()]);
    }
  }
}
