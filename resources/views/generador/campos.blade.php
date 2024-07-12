@extends('welcome')

@section('content')

    <br>
    <h2>Tabla: {{$tabla}}</h2>
    <hr>
    
    <main id="campos" class="main" >  

<form>
    <?php
    $inicio ="<form><fieldset ><div class='row'>";
    $cierre ="</div><fieldset ></form>";
    echo html_entity_decode( $inicio.$codigo.$cierre );
    
    ?>
    </form>
    <hr>
    <p onclick="copyToClipboard()" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
      </svg> Copiar</p>
        <pre><code><div id='miTexto'>
        <?php
                 echo htmlspecialchars( "".$inicio.$codigo.$cierre."");
        ?>
        </div></pre></code>
       
    </main>
  
    
    
 @endsection
 <script>
    function copyToClipboard() {
       // Obtener el código HTML
       var htmlCode = document.getElementById('miTexto').textContent;

// Crear un elemento temporal de texto
var tempInput = document.createElement('textarea');
tempInput.value = htmlCode;
document.body.appendChild(tempInput);

// Seleccionar el contenido y copiar al portapapeles
tempInput.select();
document.execCommand('copy');

// Eliminar el elemento temporal
document.body.removeChild(tempInput);

alert('Código copiado al portapapeles!');
    }
</script>