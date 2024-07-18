<?php

namespace App\Http\Controllers;
use App\Models\Justificacion;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JustificacionController extends Controller
{
     public function index()
    {
      
        return view('justificaciones.index');
        //return response()->json($estructura);
    }

    public function listado()
    {
        $justificaciones = Justificacion::orderBy('id','desc')->get();
        return view('justificaciones.listado', compact('justificaciones'));
     
    }

    

}