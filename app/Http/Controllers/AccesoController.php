<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\UserMetadata;


class AccesoController extends Controller
{
        //
        public function perfil($id){
            
            $usuario = User::where(['id'=>$id])->firstOrFail();
            $usuario_data = UserMetadata::where(['users_id'=>$id])->firstOrFail();
            //$usuario = UserMetadata::where(['users_id'=>Auth::id()])->first();
            return view('acceso.perfil',compact('usuario','usuario_data'));
        }
        public function acceso_login(){
            return view('acceso.login');
        }
    
        public function acceso_login_post(Request $request){
            
            $request->validate(
                [
                    'correo'=>'required|email:rfc,dns',
                    'password'=>'required|min:5'
            ],
                [
                    'correo.required'=>'El campo E-Mail está vacío',
                    'correo.email'=>'El E-Mail ingresado no es válido',
                    'password.required'=>'El campo Password está vacío',
                    'password.min'=>'El campo Password debe tener al menos 6 caracteres',
                    
    
                ]
            );
            if(Auth::attempt(['email'=>$request->input('correo'),
            'password'=>$request->input('password')]))
            {
                $usuario = UserMetadata::where(['users_id'=>Auth::id()])->first();
                session(['users_metadata_id'=>$usuario->id]);
                session(['perfil_id'=>$usuario->perfil_id]);
                session(['perfil'=>$usuario->perfil->nombre]);
                return redirect()->intended('/');
            }
            else{
                $request->session()->flash('css','danger');
                $request->session()->flash('mensaje','La credenciales indicadas no son válidas');
                return redirect()->route('acceso_login');
            }
    
        }
        public function acceso_registro(){
            return view('acceso.registro');
        }
    
        public function acceso_registro_post(Request $request){
    
            $request->validate(
                [
                    'nombre'=>'required|min:4',
                    'correo'=>'required|email:rfc,dns|unique:users,email',
                    'password'=>'required|min:5|confirmed'
            ],
                [
                    'nombre.required'=>'El campo Nombre está vacío',
                    'nombre.min'=>'El campo Nombre debe terner mínimo 5 caracteres',
                    'password.required'=>'El campo Password está vacío',
                    'password.min'=>'El campo Password debe tener al menos 6 caracteres',
                    'password.confirmed'=>'Las contraseñas ingresadas no coiciden',
    
                ]
            );
            $user = User::create(
                [
                    'name'=>$request->input('nombre'),
                    'email'=>$request->input('correo'),
                    'password'=>Hash::make($request->input('password')),
                    'crated_at'=>date('Y-m-d H:i:s')
                ]
                );
                UserMetadata::create(
                    [
                        'users_id'=>$user->id,
                        'perfil_id'=>2
                       
                    ]
                );
                $request->session()->flash('css','success');
                $request->session()->flash('mensaje','Se ha creado el registro exitosamente');
                return redirect()->route('acceso_registro');
        }

        public function logout(Request $request)
            {
                Auth::logout();

                $request->session()->invalidate();
                $request->session()->regenerateToken();
                $request->session()->flash('css','success');
                $request->session()->flash('mensaje','Se ha ccerrado la sesión exitosamente');
                return redirect('/');
            }
       
        
    }
