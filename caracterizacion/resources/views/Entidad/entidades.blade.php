@extends('index')

@section('content')

@if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
        {{Session::get('Mensaje')}}
    </div>
@endif

  <div class="container-fluid">
    <h1 align="center" >Entidades Registradas</h1>
    @foreach ($entidades as $entidad)
      <div class="row-fluid">
        <div class="form-group col-md-4">
          <div class="card-fluid" style="width: 18rem;">
            <h4 class="card-body">Nombre: {{$entidad->nombre}}</h4>
              <h4 class="card-title">Representante: {{$entidad->representante_legal}}</h4>
              <h4 class="card-text">Telefono Empresa: {{$entidad->telefono}}</h4>
              <div class="btns">
                <div class="col-md-3">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Ver
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">{{$entidad->nombre}}</h4>
                        </div>
                        <div class="modal-body">
                          <div class="container-fluid">
                            @include('Entidad.ver')
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4" id="actualizar">
                  <a href="{{url('/entidad/'.$entidad->id.'/edit')}}" class="btn btn-primary">Editar</a>
                </div>

                <div class="col-md-4" id="elinimar">
                  <form class="" action="{{url('/entidad/'.$entidad->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="button" class="btn btn-danger">Eliminar</button>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
