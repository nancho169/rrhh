@extends('welcome')

@section('content')
    <br>
    <h2>Padrón personas</h2>
    <hr>

    <form>
        <fieldset>
            <div class='row'>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="id" class="col-form-label">id</label> </div>
                    <div class="col-auto"> <input type="number" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="legajo" class="col-form-label">legajo</label> </div>
                    <div class="col-auto"> <input type="number" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="nombre" class="col-form-label">nombre</label> </div>
                    <div class="col-auto"> <input type="text" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="apellido" class="col-form-label">apellido</label> </div>
                    <div class="col-auto"> <input type="text" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="email" class="col-form-label">email</label> </div>
                    <div class="col-auto"> <input type="text" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="img" class="col-form-label">img</label> </div>
                    <div class="col-auto"> <input type="text" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="activo" class="col-form-label">activo</label> </div>
                    <div class="col-auto"> <input type="number" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="cuil" class="col-form-label">cuil</label> </div>
                    <div class="col-auto"> <input type="number" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="dni" class="col-form-label">dni</label> </div>
                    <div class="col-auto"> <input type="number" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="fecha_nacimiento" class="col-form-label">fecha_nacimiento</label>
                    </div>
                    <div class="col-auto"> <input type="time" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="fecha_ingreso" class="col-form-label">fecha_ingreso</label> </div>
                    <div class="col-auto"> <input type="time" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="telefono" class="col-form-label">telefono</label> </div>
                    <div class="col-auto"> <input type="number" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="direccion" class="col-form-label">direccion</label> </div>
                    <div class="col-auto"> <input type="text" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="cargo" class="col-form-label">cargo</label> </div>
                    <div class="col-auto"> <input type="text" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="funcion" class="col-form-label">funcion</label> </div>
                    <div class="col-auto"> <input type="text" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="remember_token" class="col-form-label">remember_token</label>
                    </div>
                    <div class="col-auto"> <input type="text" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="created_at" class="col-form-label">created_at</label> </div>
                    <div class="col-auto"> <input type="time" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="updated_at" class="col-form-label">updated_at</label> </div>
                    <div class="col-auto"> <input type="time" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="organigrama_id" class="col-form-label">organigrama_id</label>
                    </div>
                    <div class="col-auto"> <input type="number" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
                <div class="col-mb-3 col-sm-3">
                    <div class="col-auto"> <label for="tipo_empleado" class="col-form-label">tipo_empleado</label> </div>
                    <div class="col-auto"> <input type="text" class="form-control"> </div>
                    <div class="col-auto"> <span id="passwordHelpInline" class="form-text"> Must be 8-20 characters long.
                        </span> </div>
                </div>
            </div>
            <fieldset>
    </form>
@endsection
