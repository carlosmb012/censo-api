<?php

namespace App\Http\Controllers;

use App\PatActividad;
use Illuminate\Http\Request;

class PatActividadController extends Controller
{
    public function index()
    {
        //$list = PatActividad::all();
        $list = PatActividad::get(['id_act', 'descrip']);
        return $list;
    }
}
