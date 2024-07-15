@extends('welcome')

@section('content')

<main >
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Proyectos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    
    </div>
  </div>
 
  <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->
  <form method="post" enctype="multipart/form-data">
    
    <div class="row" >
        <div class="col">
            <div class="input-container" >
                <label for="id_tipo">Tipo:</label>
                <select name="tipo" class="form-control"  id="id_tipo">
                    <option value="666" >Seleccione</option>
                    <option value="Ley">Ley</option>
                    <option value="Declaracion">Declaración</option>
                    <option value="Resolucion">Resolución</option>
                </select>
            </div>
            <div class="input-container">
                <label for="id_titulo">Título:</label>
                <input type="text" class="form-control" name="titulo" maxlength="200" required id="id_titulo">
            </div>
            <div class="input-container">
                <label for="id_extracto">Extracto:</label>
                <textarea name="extracto" class="form-control" cols="40" rows="10" required id="id_extracto">
                </textarea>
            </div>
            <div class="input-container">
                <label for="id_documento">Adjuntar documento:</label>
                <input type="file"  class="form-control" name="documento" accept=".pdf, .doc, .docx, .xls, .odt" id="id_documento">
            </div><hr>{{csrf_field()}}
            <button type="submit" class="btn btn-primary" >Enviar Proyecto</button>
        </div>

        <div class="col" style=" background-color: #f4f4f4;  border: 1px solid #ddd;border-radius: 5px;">
            <div class="container">
                <label for="id_diputados_acompaniantes">Diputados acompañantes:</label>
                <div class="select-container"> 
                    <div id="id_diputados_acompaniantes" class="diputado-checkbox">
                      <div>
                        <label for="id_diputados_acompaniantes_0"><input type="checkbox" name="diputados_acompaniantes" value="45" class="diputado-checkbox" id="id_diputados_acompaniantes_0">
                        Aberastain, Santiago</label>
                      </div>
                  <div>
<label for="id_diputados_acompaniantes_1"><input type="checkbox" name="diputados_acompaniantes" value="36" class="diputado-checkbox" id="id_diputados_acompaniantes_1">
Alegria, Carlos</label>

</div><div>
<label for="id_diputados_acompaniantes_2"><input type="checkbox" name="diputados_acompaniantes" value="28" class="diputado-checkbox" id="id_diputados_acompaniantes_2">
Barrientos, Fabiana</label>

</div><div>
<label for="id_diputados_acompaniantes_3"><input type="checkbox" name="diputados_acompaniantes" value="38" class="diputado-checkbox" id="id_diputados_acompaniantes_3">
Bodlovic, Jose</label>

</div><div>
<label for="id_diputados_acompaniantes_4"><input type="checkbox" name="diputados_acompaniantes" value="46" class="diputado-checkbox" id="id_diputados_acompaniantes_4">
Boffi, Mario</label>

</div><div>
<label for="id_diputados_acompaniantes_5"><input type="checkbox" name="diputados_acompaniantes" value="42" class="diputado-checkbox" id="id_diputados_acompaniantes_5">
Chamorro, Victor</label>

</div><div>
<label for="id_diputados_acompaniantes_6"><input type="checkbox" name="diputados_acompaniantes" value="35" class="diputado-checkbox" id="id_diputados_acompaniantes_6">
Echazu, Eloy</label>

</div><div>
<label for="id_diputados_acompaniantes_7"><input type="checkbox" name="diputados_acompaniantes" value="25" class="diputado-checkbox" id="id_diputados_acompaniantes_7">
Españon, Fernando</label>

</div><div>
<label for="id_diputados_acompaniantes_8"><input type="checkbox" name="diputados_acompaniantes" value="30" class="diputado-checkbox" id="id_diputados_acompaniantes_8">
Garcia, Rocio</label>

</div><div>
<label for="id_diputados_acompaniantes_9"><input type="checkbox" name="diputados_acompaniantes" value="37" class="diputado-checkbox" id="id_diputados_acompaniantes_9">
Godoy, Carlos</label>

</div><div>
<label for="id_diputados_acompaniantes_10"><input type="checkbox" name="diputados_acompaniantes" value="44" class="diputado-checkbox" id="id_diputados_acompaniantes_10">
Jara, Santiago</label>

</div><div>
<label for="id_diputados_acompaniantes_11"><input type="checkbox" name="diputados_acompaniantes" value="48" class="diputado-checkbox" id="id_diputados_acompaniantes_11">
Loreiro, Fabiola</label>

</div><div>
<label for="id_diputados_acompaniantes_12"><input type="checkbox" name="diputados_acompaniantes" value="47" class="diputado-checkbox" id="id_diputados_acompaniantes_12">
Martinez, Alfredo</label>

</div><div>
<label for="id_diputados_acompaniantes_13"><input type="checkbox" name="diputados_acompaniantes" value="32" class="diputado-checkbox" id="id_diputados_acompaniantes_13">
Mora, Agostina</label>

</div><div>
<label for="id_diputados_acompaniantes_14"><input type="checkbox" name="diputados_acompaniantes" value="29" class="diputado-checkbox" id="id_diputados_acompaniantes_14">
Muñoz, Pedro</label>

</div><div>
<label for="id_diputados_acompaniantes_15"><input type="checkbox" name="diputados_acompaniantes" value="34" class="diputado-checkbox" id="id_diputados_acompaniantes_15">
Nieto, Karina</label>

</div><div>
<label for="id_diputados_acompaniantes_16"><input type="checkbox" name="diputados_acompaniantes" value="40" class="diputado-checkbox" id="id_diputados_acompaniantes_16">
Ojeda, Eduardo</label>

</div><div>
<label for="id_diputados_acompaniantes_17"><input type="checkbox" name="diputados_acompaniantes" value="31" class="diputado-checkbox" id="id_diputados_acompaniantes_17">
Peralta, Daniel</label>

</div><div>
<label for="id_diputados_acompaniantes_18"><input type="checkbox" name="diputados_acompaniantes" value="41" class="diputado-checkbox" id="id_diputados_acompaniantes_18">
Perez, Oscar</label>

</div><div>
<label for="id_diputados_acompaniantes_19"><input type="checkbox" name="diputados_acompaniantes" value="39" class="diputado-checkbox" id="id_diputados_acompaniantes_19">
Ponce, Elba</label>

</div><div>
<label for="id_diputados_acompaniantes_20"><input type="checkbox" name="diputados_acompaniantes" value="43" class="diputado-checkbox" id="id_diputados_acompaniantes_20">
Quiroga, Jose</label>

</div><div>
<label for="id_diputados_acompaniantes_21"><input type="checkbox" name="diputados_acompaniantes" value="26" class="diputado-checkbox" id="id_diputados_acompaniantes_21">
Rasgido, Iris</label>

</div><div>
<label for="id_diputados_acompaniantes_22"><input type="checkbox" name="diputados_acompaniantes" value="33" class="diputado-checkbox" id="id_diputados_acompaniantes_22">
Santi, Carlos</label>

</div><div>
<label for="id_diputados_acompaniantes_23"><input type="checkbox" name="diputados_acompaniantes" value="27" class="diputado-checkbox" id="id_diputados_acompaniantes_23">
Valenzuela, Carlos</label>

</div>
</div>
                </div>
                <div class="input-container" id="no-accompaniment-container">
                    <input type="checkbox" id="no-accompaniment-checkbox">
                    <label for="no-accompaniment-checkbox" class="inline-label">Sin diputados acompañantes</label>
                    <input type="hidden" name="no_accompaniment" id="no_accompaniment_hidden">
                </div>
            </div>
            
        </div>
        
    </div>

    

    
</form>
</main>

@endsection
<script src="{{asset('js/jquery-3.6.4.min.js')}}"></script>
<script>
  $(document).ready(function() {
      function updateNoAccompanimentHidden() {
          $('#no_accompaniment_hidden').val($('#no-accompaniment-checkbox').is(':checked') ? 'on' : '');
      }

      $('.diputado-checkbox').click(function() {
          var totalSelected = $('.diputado-checkbox:checked').length;
          var noAccompanimentChecked = $('#no-accompaniment-checkbox').is(':checked');

          if (totalSelected > 4) {
              alert('Solo se permiten hasta 4 diputados acompañantes.');
              $(this).prop('checked', false);
              return false;
          }

          if (totalSelected > 0 && noAccompanimentChecked) {
              $('#no-accompaniment-checkbox').prop('checked', false);
              updateNoAccompanimentHidden();
          }
      });

      $('#no-accompaniment-checkbox').click(function() {
          if ($(this).is(':checked')) {
              $('.diputado-checkbox').prop('checked', false);
          }
          updateNoAccompanimentHidden();
      });

      $('form').submit(function() {
          var totalSelected = $('.diputado-checkbox:checked').length;
          var noAccompanimentChecked = $('#no-accompaniment-checkbox').is(':checked');

          if (totalSelected === 0 && !noAccompanimentChecked) {
              alert('Debe seleccionar al menos un diputado acompañante o marcar "Sin diputados acompañantes".');
              return false;
          }
      });

      updateNoAccompanimentHidden();
  });
</script>
