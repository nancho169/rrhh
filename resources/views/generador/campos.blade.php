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
    <p class="font-monospace">

        <?php
                 echo htmlentities( $inicio.$codigo.$cierre );
        ?>
    </p>
    
    </main>
  
    
    
 @endsection
