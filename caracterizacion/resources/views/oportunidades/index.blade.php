@extends('index')
@section('content')
    <div class="container-fluid">
        <h1 align="center">Oportunidades</h1>
        <br><br>
        <div>
            <a href="{{url('/oportunidades/create')}}" class="btn btn-success">Registrar oportunidad</a>
        </div>
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
                                {{--<!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ver Detalle</button>
      
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Oportunidad</h4>
                                        </div>
                                        <div class="modal-body">
                                         @include('oportunidades.detalle')
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>--}}
                            </p>
                        </div>
                    </div>
                </div>                
            @endforeach
            
            
        </div>
    </div>
@endsection