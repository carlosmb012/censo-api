<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\PatVisitaProgram;
use Illuminate\Http\Request;

class PatVisitaProgramController extends Controller
{
    public function show($idUser)
    {
        $list = PatVisitaProgram::where('user_id', $idUser)->get();
        return $list;
    }

    public function store(Request $request)
    {
        try {
            $input = $request->all();
            $date = Carbon::now();
            $input['fecha_visita'] = $date;
            //dd($input);
            $visita = PatVisitaProgram::create($input);
            return response()->json(['idVisita' => $visita->id]);
            //return response()->json(['message' => "ok"]);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
