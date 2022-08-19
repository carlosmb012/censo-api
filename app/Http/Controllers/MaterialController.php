<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{

    public function index($idFactor)
    {
        $list = Material::where('factor_id', $idFactor)->get();
        //$list = Material::where('factor_id', $idFactor)->with('factor')->get();
        return $list;
    }
}
