@extends('index')
@section('content')
    <div class="container-fluid">
        <h1 align="center">Mis Oportunidades</h1>
        <br>
        @if(Session::has('Mensaje'))
            <div class="alert alert-success" role="alert">
                {{Session::get('Mensaje')}}
            </div>
        @endif 
        <br><br>
        <div class="row">
            @foreach ($misOportunidades as $misOportunidad)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <h3 align="center">{{$misOportunidad->tipoOportunidad->tipo_oportunidad}}</h3>
                        <div class="caption">
                            <p><b>Descripción:</b><br>{{$misOportunidad->descripcion}}</p>
                            <p><b>Fecha:</b><br>{{$misOportunidad->fecha_origen}}</p>
                            <p><b>Estado:</b><br>{{$misOportunidad->estado->estado}}</p>
                            <br>
                            <div>
                                @if (Auth::user()->estado == 'Habilitado')
                                <form action="{{url('/oportunidades/'.$misOportunidad->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('¿ESTA SEGURO QUE DESEA ELIMINARLA?')" class="btn btn-danger pull-right">Eliminar</button>                    
                                </form>
                                @else
                                <a href="#" class="btn btn-danger pull-right" role="button">Cancelar</a>                                    
                                @endif
                                <a href="{{url('/oportunidades/'.$misOportunidad->id.'/edit')}}" class="btn btn-primary" role="button">Actualizar</a>
                            </div>
                        </div>
                    </div>
                </div>                
            @endforeach
            
            
        </div>
    </div>
@endsection