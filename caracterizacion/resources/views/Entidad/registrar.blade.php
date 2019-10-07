@extends('index')

@section('content')

@if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
        {{Session::get('Mensaje')}}
    </div>
@endif

<div class="container-fluid">
  <h1 align="center">Registrar Entidad</h1>

  <div class="container-form">
    <form class="" action="{{route('post')}}" method="post">
      @csrf
      <div class="form-group row">
        <label for="" class="">Nombre de la Entidad: </label>
        <input type="text" name="nombre" value="{{old('nombre')}}" class=" form-control" required>
      </div>

      <div class="form-group row">
        <label for="">Dirección: </label>
        <input type="text" name="direccion" value="{{old('direccion')}}" class=" form-control" required>
      </div>

      <div class="form-group row">
        <label for="">Telefono: </label>
        <input type="number" name="telefono" value="{{old('telefono')}}" class=" form-control" required>
      </div>

      <div class="form-group row">
        <label for="">Representante Legal: </label>
        <input type="text" name="representante_legal" value="{{old('representante_legal')}}" class=" form-control" required>
      </div>

      <div class="form-group row">
        <label for="">Correo del Representante: </label>
        <input type="email" name="mail_contacto" value="{{old('mail_contacto')}}" class=" form-control" required>
      </div>

      <div class="form-group row">
        <label for="">Telefono del Representante: </label>
        <input type="number" name="tel_contacto" value="{{old('tel_contacto')}}" class=" form-control" required>
      </div>

      <div class="form-group row">
        <label for="">Municipio: </label>
        <select class="form-control" name="municipio_id">
          <option>Seleccione un Municipio</option>
          @foreach($municipios as $municipio)
          <option value="{{$municipio->id}}">{{$municipio->municipio}}</option>
          @endforeach
        </select>
      </div>

      <div align="center">
        <button type="submit" class="btn btn-info" name="button">Registrar Entidad</button>
        <a href="{{route('enti')}}" class="btn btn-danger">Cancelar</a>
      </div>

    </form>
  </div>
</div>
@endsection
