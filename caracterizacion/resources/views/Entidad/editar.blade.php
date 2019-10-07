@extends('index')

@section('content')
<div class="container-fluid">
  <h1 align="center">Actualizar Entidad</h1>

  <div class="container-form">
    <form class="" action="{{url('/entidad/'.$entidad->id)}}" method="post">
      @csrf
      @method('PATCH')
      <div class="form-group row">
        <label for="" class="">Nombre de la Entidad: </label>
        <input type="text" name="nombre" value="{{$entidad->nombre}}" class=" form-control" required>
      </div>

      <div class="form-group row">
        <label for="">Dirección: </label>
        <input type="text" name="direccion" value="{{$entidad->direccion}}" class=" form-control" required>
      </div>

      <div class="form-group row">
        <label for="">Telefono: </label>
        <input type="number" name="telefono" value="{{$entidad->telefono}}" class=" form-control" required>
      </div>

      <div class="form-group row">
        <label for="">Representante Legal: </label>
        <input type="text" name="representante_legal" value="{{$entidad->representante_legal}}" class=" form-control" required>
      </div>

      <div class="form-group row">
        <label for="">Correo del Representante: </label>
        <input type="email" name="mail_contacto" value="{{$entidad->mail_contacto}}" class=" form-control" required>
      </div>

      <div class="form-group row">
        <label for="">Telefono del Representante: </label>
        <input type="text" name="tel_contacto" value="{{$entidad->tel_contacto}}" class=" form-control" required>
      </div>

      <div class="form-group row">
        <label for="">Municipio: </label>
        <select class="form-control" name="municipio_id">
          <option value="{{$entidad->municipio->id}}">{{$entidad->municipio->municipio}}</option>
          @foreach($municipios as $municipio)
          <option value="{{$municipio->id}}">{{$municipio->municipio}}</option>
          @endforeach
        </select>
      </div>

      <div align="center">
        <button type="submit" class="btn btn-info" name="button">Actualizar Entidad</button>
        <a href="{{route('enti')}}" class="btn btn-danger">Cancelar</a>
      </div>

    </form>
  </div>
</div>
@endsection
