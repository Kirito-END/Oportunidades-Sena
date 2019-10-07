@extends('index')
@section('content')
<div class="container-fluid">
        <h1 align="center">Oportunidades Asignadas</h1>
        <br>
        <div class="row">
            @foreach ($oportunidades as $oportunidad)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <h3 align="center">{{$oportunidad->tipoOportunidad->tipo_oportunidad}}</h3>
                        <div class="caption">
                            <p><b>Descripción:</b><br>{{$oportunidad->descripcion}}</p>
                            <p><b>Fecha:</b><br>{{$oportunidad->fecha_origen}}</p>
                            <p><b>Estado:</b><br>{{$oportunidad->estado->estado}}</p>
                            <p>
                                <a href="{{url('/oportunidades/'.$oportunidad->id)}}" class="btn btn-primary">Ver detalle</a>
                            </p>
                        </div>
                    </div>
                </div>                
            @endforeach            
        </div>
    </div>
@endsection