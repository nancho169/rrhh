@extends('welcome')

@section('content')


<br>
 <h2>Tablas</h2>
 <hr>
 <form  action="{{route('campos')}}" method="POST" >




<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Tablas</label>
    <div class="col-sm-8">
        <select class="form-control" id="tabla" name="tabla">
            @foreach ($tablas as $dato)
            
                <option value="{{$dato->Tables_in_rrhh}}" > {{$dato->Tables_in_rrhh}}</option>
                
            @endforeach
            </select>
    </div>
    <div class="col-sm-2">
            {{csrf_field()}}
            <input class="btn btn-primary"  type="submit">
    </div>
  </div>
  <hr>
 </form>
@endsection


