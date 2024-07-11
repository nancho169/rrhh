@extends('welcome')

@section('content')
    <br>
    <h2>Tabla: {{$tabla}}</h2>
    <hr>
    
    <main id="campos" class="main" >  

<form>
 
    @foreach ($estructura as $dato)
    
            
    @switch ($dato->Type) 
            @case (strpos($dato->Type, 'int') !== @false)
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                    <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                    </div>
                    <div class="col-auto">
                        <input  type="{{  $type = 'number'; }}" class="form-control"> 
                    </div>
                    <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        Must be 8-20 characters long.
                    </span>
                    </div>
                </div>
            @break
            @case (strpos($dato->Type, 'BigInt') !== @false)
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                </div>
                <div class="col-auto">
                    <input type="{{  $type = 'number'; }}" class="form-control"> 
                </div>
                <div class="col-auto">
                <span id="passwordHelpInline" class="form-text">
                    Must be 8-20 characters long.
                </span>
                </div>
            </div>
            @break
            @case (strpos($dato->Type, 'varchar') !== false)
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                </div>
                <div class="col-auto">
                    <input type="{{  $type = 'text'; }}" class="form-control"> 
                </div>
                <div class="col-auto">
               
                </div>
            </div>
            @break
            @case (strpos($dato->Type, 'text') !== false)
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                </div>
                <div class="col-auto">
                    <input type="{{  $type = 'text'; }}" class="form-control"> 
                </div>
                <div class="col-auto">
            
                </div>
            </div>
            @break
            @case (strpos($dato->Type, 'time') !== false)
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                </div>
                <div class="col-auto">
                    <input type="{{  $type = 'time'; }}" class="form-control"> 
                </div>
                <div class="col-auto">
               
                </div>
            </div>
            @break
            @case (strpos($dato->Type, 'timestamp') !== false)
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                </div>
                <div class="col-auto">
                    <input type="{{  $type = 'time'; }}" class="form-control"> 
                </div>
                <div class="col-auto">
               
                </div>
            </div>
            @break
            @case (strpos($dato->Type, 'date') !== false)
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                </div>
                <div class="col-auto">
                    <input type="{{  $type = 'date'; }}" class="form-control"> 
                </div>
                <div class="col-auto">
               
                </div>
            </div>
            @break
            @case (strpos($dato->Type, 'datetime') !== false)
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                </div>
                <div class="col-auto">
                    <input type="{{  $type = 'date'; }}" class="form-control"> 
                </div>
                <div class="col-auto">
               
                </div>
            </div>
            @break
            @case (strpos($dato->Type, 'float') !== false)
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                </div>
                <div class="col-auto">
                    <input type="{{  $type = 'number'; }}" class="form-control"> 
                </div>
                <div class="col-auto">
               
                </div>
            </div>
            @break
            @case (strpos($dato->Type, 'double') !== false)
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                </div>
                <div class="col-auto">
                    <input type="{{  $type = 'number'; }}" class="form-control"> 
                </div>
                <div class="col-auto">
               
                </div>
            </div>
            @break
            @case (strpos($dato->Type, 'decimal') !== false)
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                </div>
                <div class="col-auto">
                    <input type="{{  $type = 'number'; }}" class="form-control"> 
                </div>
                <div class="col-auto">
               
                </div>
            </div>
            @break
            @case (strpos($dato->Type, 'email') !== false)
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                </div>
                <div class="col-auto">
                    <input type="{{  $type = 'email'; }}" class="form-control"> 
                </div>
                <div class="col-auto">
               
                </div>
            </div>
                @break
                    @case (strpos($dato->Type, 'boolean') !== false)
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                        <label for="{{$dato->Field}}" class="col-form-label">{{$dato->Field}}</label>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Default checkbox
                                </label>
                              </div>
                            
                        </div>
                        <div class="col-auto">
                    
                        </div>
                    </div>
                @break
            @default
                 {{@$type = 'Unknown';}}
    
    @endswitch
    @endforeach
    </form><hr>
    
    </main>
    <hr>
    {{ $codigo }}
    <!--<div id="res"></div>-->
 @endsection
<script>
    //var htmlObject = document.getElementById('res');
   // htmlObject.innerHTML = {{ $codigo }};
</script>