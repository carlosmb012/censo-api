<?php

namespace App\Http\Controllers;

use App\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
  public function index()
  {
    $list = Ciudad::all();
    return $list;
  }

  public function show($id)
  {
    //$ciudad = Ciudad::findOrFail($id);
    $ciudad = Ciudad::where('id', $id)->with('factors')->first();
    return $ciudad;
  }
}
