<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GeneradorController extends Controller
{
     public function index()
    {
        $table = 'rrhh.persona';
        $estructura = DB::select("DESCRIBE $table");
        return view('persona.index', compact('estructura'));
        //return response()->json($estructura);
    }

    public function tablas(){


        $tablas = DB::select("SHOW FULL TABLES FROM rrhh");
        return view('generador.tablas', compact('tablas'));
        
    }

    public function campos(Request $request){
        $tabla = $request->input('tabla');
        //$table = 'rrhh.$tabla';
        $estructura = DB::select("DESCRIBE $tabla");
        $codigo = "";
        foreach ($estructura as $dato){
        switch ($dato->Type){ 
                case (strpos($dato->Type, 'int') !== false):
                   $codigo .='<div class="col-mb-3 col-sm-3">
                        <div class="col-auto">
                        <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                        </div>
                        <div class="col-auto">
                            <input  type="number" class="form-control"> 
                        </div>
                        <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                            Must be 8-20 characters long.
                        </span>
                        </div>
                    </div>';
                    break;
                
                case (strpos($dato->Type, 'BigInt') !== false):
                    $codigo.=' <div class="col-mb-3 col-sm-3">
                         <div class="col-auto">
                         <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                         </div>
                         <div class="col-auto">
                             <input  type="number" class="form-control"> 
                         </div>
                         <div class="col-auto">
                         <span id="passwordHelpInline" class="form-text">
                             Must be 8-20 characters long.
                         </span>
                         </div>
                     </div>';
                     break;
                 
                case (strpos($dato->Type, 'varchar') !== false):
                    $codigo.=' <div class="col-mb-3 col-sm-3">
                         <div class="col-auto">
                         <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                         </div>
                         <div class="col-auto">
                             <input  type="text" class="form-control"> 
                         </div>
                         <div class="col-auto">
                         <span id="passwordHelpInline" class="form-text">
                             Must be 8-20 characters long.
                         </span>
                         </div>
                     </div>';
                     break;
                 
                case (strpos($dato->Type, 'text') !== false):
                    $codigo.=' <div class="col-mb-3 col-sm-3">
                         <div class="col-auto">
                         <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                         </div>
                         <div class="col-auto">
                             <input  type="text" class="form-control"> 
                         </div>
                         <div class="col-auto">
                         <span id="passwordHelpInline" class="form-text">
                             Must be 8-20 characters long.
                         </span>
                         </div>
                     </div>';
                     break;
                 
                case (strpos($dato->Type, 'time') !== false):
                    $codigo.=' <div class="col-mb-3 col-sm-3">
                         <div class="col-auto">
                         <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                         </div>
                         <div class="col-auto">
                             <input  type="time" class="form-control"> 
                         </div>
                         <div class="col-auto">
                         <span id="passwordHelpInline" class="form-text">
                             Must be 8-20 characters long.
                         </span>
                         </div>
                     </div>';
                     break;
                 
                case (strpos($dato->Type, 'timestamp') !== false):
                    $codigo.=' <div class="col-mb-3 col-sm-3">
                         <div class="col-auto">
                         <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                         </div>
                         <div class="col-auto">
                             <input  type="time" class="form-control"> 
                         </div>
                         <div class="col-auto">
                         <span id="passwordHelpInline" class="form-text">
                             Must be 8-20 characters long.
                         </span>
                         </div>
                     </div>';
                     break;
                 
                case (strpos($dato->Type, 'date') !== false):
                    $codigo.=' <div class="col-mb-3 col-sm-3">
                         <div class="col-auto">
                         <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                         </div>
                         <div class="col-auto">
                             <input  type="date" class="form-control"> 
                         </div>
                         <div class="col-auto">
                         <span id="passwordHelpInline" class="form-text">
                             Must be 8-20 characters long.
                         </span>
                         </div>
                     </div>';
                     break;
                 
                case (strpos($dato->Type, 'datetime') !== false):
                    $codigo.=' <div class="col-mb-3 col-sm-3">
                         <div class="col-auto">
                         <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                         </div>
                         <div class="col-auto">
                             <input  type="date" class="form-control"> 
                         </div>
                         <div class="col-auto">
                         <span id="passwordHelpInline" class="form-text">
                             Must be 8-20 characters long.
                         </span>
                         </div>
                     </div>';
                     break;
                 
                case (strpos($dato->Type, 'float') !== false):
                    $codigo.=' <div class="col-mb-3 col-sm-3">
                         <div class="col-auto">
                         <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                         </div>
                         <div class="col-auto">
                             <input  type="number" class="form-control"> 
                         </div>
                         <div class="col-auto">
                         <span id="passwordHelpInline" class="form-text">
                             Must be 8-20 characters long.
                         </span>
                         </div>
                     </div>';
                     break;
                 
                case (strpos($dato->Type, 'double') !== false):
                    $codigo.=' <div class="col-mb-3 col-sm-3">
                         <div class="col-auto">
                         <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                         </div>
                         <div class="col-auto">
                             <input  type="number" class="form-control"> 
                         </div>
                         <div class="col-auto">
                         <span id="passwordHelpInline" class="form-text">
                             Must be 8-20 characters long.
                         </span>
                         </div>
                     </div>';
                     break;
                 
                case (strpos($dato->Type, 'decimal') !== false):
                    $codigo.=' <div class="col-mb-3 col-sm-3">
                         <div class="col-auto">
                         <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                         </div>
                         <div class="col-auto">
                             <input  type="number" class="form-control"> 
                         </div>
                         <div class="col-auto">
                         <span id="passwordHelpInline" class="form-text">
                             Must be 8-20 characters long.
                         </span>
                         </div>
                     </div>';
                     break;
                 
                case (strpos($dato->Type, 'email') !== false):
                    $codigo.=' <div class="col-mb-3 col-sm-3">
                         <div class="col-auto">
                         <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                         </div>
                         <div class="col-auto">
                             <input  type="email" class="form-control"> 
                         </div>
                         <div class="col-auto">
                         <span id="passwordHelpInline" class="form-text">
                             Must be 8-20 characters long.
                         </span>
                         </div>
                     </div>';
                     break;
                 
                        case (strpos($dato->Type, 'boolean') !== false):
                   $codigo.=' <div class="col-mb-3 col-sm-3">
                            <div class="col-auto">
                            <label for="'.$dato->Field.'" class="col-form-label">'.$dato->Field.'</label>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      Default checkbox
                                    </label>
                                  </div>
                                
                            </div>
                            <div class="col-auto">
                        
                            </div>
                        </div>';
                    break;
                    
                default:
                  $codigo .= 'Unknown';

        }
        
        }        


        return view('generador.campos', compact('estructura','codigo','tabla'));
     
    }

    
}