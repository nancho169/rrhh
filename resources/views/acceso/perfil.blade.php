@extends('welcome')

@section('content')
<div class="b-example-divider"></div>
    <br>

    <div class="container text-center alert alert-dark">
      <h2  style="text-align: center;">Perfil de <small>{{$usuario->name}}</small></h2>
      <div class="row">
        <div class="col-sm-4">
          
          <img src="{{ asset('img/firmantes/dipu.png')}}"  class="img-thumbnail" width="60%"><hr>
          <a class="btn btn-dark" href=""> Carga imágen</a>

        </div>
        <div class="col-sm-8">

         
          <table class="table">
            <thead> 
              <tr>
                
                <th scope="col">Nombre</th>
                <th scope="col">{{$usuario->updated_at}}</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="col">Email</th>
                <th >{{$usuario->email}}</th>
              </tr>
              <tr>
                <th scope="col">Teléfono</th>
                <th>{{$usuario_data->telefono}}</th>
                
              </tr>
             
              <tr>
                <th scope="row">Dirección</th>
                <th >{{$usuario_data->direccion}}</th>
                
              </tr>
              <tr>
                <th scope="row">Creado</th>
                <th >{{$usuario->created_at}}</th>
                
              </tr>
              <tr>
                <th scope="row">Modificado</th>
                <th >{{$usuario->updated_at}}</th>
                
              </tr>
            </tbody>
          </table>
          <hr>
          <a class="btn btn-dark" href=""> Solicitud de actualización de datos</a>

   

        </div>
      </div>
      
      
    </div>


  
    <br>
@endsection
