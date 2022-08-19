<?php

namespace App\Http\Controllers;

use App\VisitaProgram;
use Illuminate\Http\Request;

class VisitaProgramController extends Controller
{
  public function show($idUser)
  {
    $list = VisitaProgram::where('id_user', $idUser)->get();
    return $list;
  }
}
