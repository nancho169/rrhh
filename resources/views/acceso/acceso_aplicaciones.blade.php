@extends('welcome')

@section('content')

<form >
    <fieldset ><br>
        <h2>Accesos y permisos</h2>
        <hr>
        <div class='row'>
            <div class="mb-3">
                <label for="aplicacion_nombre" class="form-label">Nombre de la aplicación</label>
                <input type="text" class="form-control" id="aplicacion_nombre" aria-describedby="emailHelp">
                <div id="apliacion_url" class="form-text">Ingrese una descricción de la aplicación.</div>
            </div>  
            <div class="mb-3">
                <label for="apliacion_url" class="form-label">Url de la apliación</label>
                <input type="text" class="form-control" id="apliacion_url" aria-describedby="emailHelp">
                <div id="apliacion_url" class="form-text">Ingresa la url a habilitar.</div>
              </div>

              <div class="mb-3">
                <label for="apliacion_url" class="form-label">Función</label>
                <input type="text" class="form-control" id="apliacion_url" aria-describedby="emailHelp">
                <div id="apliacion_url" class="form-text">Ingresa una breve descripción de lo que hace o a quien va dirigida la apliación.</div>
              </div>
              <div class="mb-3">
              <div class="card" >
                <h5 class="card-title">Permisos</h5>
                <hr>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="permiso_alta">
                <label class="form-check-label" for="permiso_alta">
                  Permiso de alta
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="permiso_modificacion">
                <label class="form-check-label" for="permiso_modificacion">
                  Permiso de modificación
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="permiso_baja">
                <label class="form-check-label" for="permiso_baja">
                  Permiso de baja
                </label>
              </div>
              </div>
              </div>
        </div>
    <fieldset >
</form>        

@endsection