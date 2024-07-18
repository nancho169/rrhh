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

    public function padron()
    {
        //$table = 'rrhh.persona';
        $personas = DB::select("select codigo,apellido_nombre,o.descripcion
                                    from persona as p, organigrama as o 
                                    where p.organigrama_id=o.id");

        //$personas = Persona::orderBy('id','desc')->get();
        return view('persona.padron', compact('personas'));
        //return response()->json($estructura);
    }

    

}
