<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
     public function index()
    {
        /*$table = 'rrhh.persona';
        $estructura = DB::select("DESCRIBE $table");
        return view('persona.index', compact('estructura'));*/
        //return response()->json($estructura);
        return view('proyectos.index');
    }


    public function carga_proyecto(Request $request){
        $request->validate(
            [
                'titulo'=>'required',
                'extracto'=>'required',
                'documento'=>'required',
                'anio'=>'required',
                'tipo'=>'required',
                
        ],
            [
                'titulo.required'=>'El campo Titulo está vacío',
                'extracto.required'=>'El campo extracto está vacío',
                'documento.required'=>'El campo documento está vacío',
                'anio.required'=>'El campo año está vacío',
                'tipo.required'=>'El campo tipo está vacío',
                

            ]
        );
         Proyecto::create(
            [
                'fecha_creacion'=>date('Y-m-d H:i:s'), //fecha en que fue creado por el usaurio
                'titulo'=>$request->input('titulo'), 
                'extracto'=>$request->input('extracto'),
                'documento'=>$request->input('documento'),
                'anio'=>$request->input('anio'),
                'tipo'=>$request->input('tipo'),
                'estado'=>"presentado",
                'fecha_ingreso'=>"", //fecha que habilita mesa de entrada para el ingreso
                'personas_id'=>$request->input('id_persona'), //persona generadora del proyecto(autor)
                'ruta_docx'=>$request->input('ruta_docx'), 
                'ruta_pdf'=>$request->input('ruta_pdf'),
                'numero'=>$request->input('numero'), //número lo asigna mesa de entrada
            ]
            );

            $request->session()->flash('css','success');
            $request->session()->flash('mensaje','Se ha creado el registro exitosamente');
            return redirect()->route('proyectos.index');
    }

    

}
