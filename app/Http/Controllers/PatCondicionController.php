<?php

namespace App\Http\Controllers;

use App\PatCondicion;
use Illuminate\Http\Request;

class PatCondicionController extends Controller
{
    public function index()
    {
        $list = PatCondicion::all();
        return $list;
    }
}
