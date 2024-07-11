<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
     public function index()
    {
        $table = 'rrhh.persona';
        $estructura = DB::select("DESCRIBE $table");
        return view('persona.index', compact('estructura'));
        //return response()->json($estructura);
    }

    

}
