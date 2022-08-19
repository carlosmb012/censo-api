<?php

namespace App\Http\Controllers;

use App\PatCondResult;
use Illuminate\Http\Request;

class PatCondResultController extends Controller
{
  public function show($patenteId)
  {
    $list = PatCondResult::where('patentes_id', $patenteId)->orderBy('id', 'ASC')->get();
    return $list;
  }
}
