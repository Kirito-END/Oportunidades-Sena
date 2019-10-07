@extends('index')

@section('content')

@if(Session::has('Mensaje'))
    <div class="alert alert-success" role="alert">
        {{Session::get('Mensaje')}}
    </div>
@endif

<h1 align="center">Lista de Usuarios</h1>

<table class="table">
  <thead>
    <tr>
      <td>Nombres</td>
      <td>Identificacion</td>
      <td>Correo</td>
      <td>Telefono</td>
      <td>Estado</td>
      <td>Perfil</td>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <td>{{$user->nombre_completo}}</td>
      <td>{{$user->identificacion}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->telefono}}</td>
      <td>
        @if ($user->estado == "Habilitado")
          <a class="btn btn-success" href="{{url('/perfil/'.$user->id)}}"> Inhabilitar </a>
        @else
          <a class="btn btn-success" href="{{url('/perfil/'.$user->id)}}"> Habilitar </a>
        @endif
      </td>
      <td>{{$user->perfil->perfil}}</td>
      <td>
        <form class="" action="{{url('/perfil/'.$user->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" name="button" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
