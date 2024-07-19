<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
     public function index()
    {
        $cat_per = DB::select("select count(*) as cant from persona");
        $cat_org = DB::select("select count(*) as cant from organigrama");
        return view('persona.index', compact('cat_per','cat_org'));
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
