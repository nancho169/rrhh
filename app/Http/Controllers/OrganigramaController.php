<?php

namespace App\Http\Controllers;
use App\Models\Organigrama;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrganigramaController extends Controller
{
     public function index()
    {
      
        return view('organigrama.index');
        //return response()->json($estructura);
    }

    public function listado()
    {
        $areas = Organigrama::orderBy('id','desc')->get();
        return view('organigrama.listado', compact('areas'));
     
    }

    

}
