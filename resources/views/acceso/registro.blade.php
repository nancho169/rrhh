@extends('welcome')

@section('content')
<div class="b-example-divider"></div>
    <br>


    <div class="row g-0">
      
      
      <div class="card bg-gray-100" style="width: 30rem; margin: 0 auto;">
        
        <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Registro de usuario</h5>
          <hr>
          <form action="{{route('acceso_registro_post')}}" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}">
            </div>
            <div class="form-group">
                <label for="correo">E-mail</label>
                <input type="text" class="form-control" id="correo" name="correo" value="{{old('correo')}}">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="number" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{old('direccion')}}">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>
            <div class="form-group">
                <label for="password2">Repetir contraseña</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" >
            </div>
            <hr>
            {{csrf_field()}}
            <input type="submit" value="Enviar" class="btn btn-primary">
         </form>
        </div>
        <x-flash />
      </div>

    </div>
    <br>
@endsection










   

   
