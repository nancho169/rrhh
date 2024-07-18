@extends('welcome')

@section('content')

<div class="b-example-divider"></div>
    <h1 style="text-align:center;"> Archivos fichadas</h1>
    <hr>
    <table border="1" class="table"  style="text-align:center;" >
        
        @foreach ($data as $row)
            <tr><!-- fila -->
                @foreach ($row as $cell) <!-- recorre fila  -->
                    <td>{{ $cell->id_usuario }}</td> <!-- celda -->
                @endforeach
            </tr>

        @endforeach
    </table>
@endsection