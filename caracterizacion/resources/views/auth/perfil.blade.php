@extends('index')
@section('content')
@foreach($users as $user)
<form class="" action="{{url('/perfil/'.$user->id)}}" method="post">
  @csrf
  @method('PATCH')
  <div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cedula') }}</label>

    <div class="col-md-6">
      <input id="name" type="number" class="form-control @error('identificacion') is-invalid @enderror" name="cedula" disabled value="{{$user->identificacion}}" required autocomplete="name" autofocus>

      @error('cedula')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
  </div>

  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Completo') }}</label>

      <div class="col-md-6">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nombre_completo" value="{{$user->nombre_completo}}" required autocomplete="name" autofocus>

          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

    <div class="col-md-6">
      <input id="name" type="number" class="form-control @error('celular') is-invalid @enderror" name="telefono" value="{{$user->telefono}}" required autocomplete="name" autofocus>

      @error('celular')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
  </div>

  <div class="form-group row">
      <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

      <div class="col-md-6">
          <input id="estado" type="text" class="form-control @error('estado') is-invalid @enderror" name="estado" value="{{$user->estado}}" disabled>

          @error('estado')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="perfil_id" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

      <div class="col-md-6">
          <select name="perfil_id" id="perfil_id" class="form-control @error('perfil_id') is-invalid @enderror" name="perfil_id" value="{{ old('perfil_id') }}" disabled>
              <option value="{{$user->perfil->perfil}}">{{$user->perfil->perfil}}</option>
          </select>

          @error('perfil_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="centro_id" class="col-md-4 col-form-label text-md-right">{{ __('Centro') }}</label>

      <div class="col-md-6">
          <select name="centro_id" id="centro_id" class="form-control @error('centro_id') is-invalid @enderror" name="centro_id" value="{{ old('centro_id') }}" required>

              <option value="{{$user->centro->id}}">{{$user->centro->nombre_centro}}</option>
              @foreach ($centros as $centro)
                  <option value="{{$centro->id}}">{{$centro->nombre_centro}}</option>
              @endforeach
          </select>

          @error('centro_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

      <div class="col-md-6">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraceña') }}</label>

      <div class="col-md-6">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  name="password" required autocomplete="new-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="form-group row">
      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraceña') }}</label>

      <div class="col-md-6">
          <input onclick="cifrar()" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
  </div>

  <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
          <button type="submit" class="btn btn-primary">
              {{ __('Actualizar') }}
          </button>
          <a href="{{route('enti')}}" class="btn btn-danger">Cancelar</a>
      </div>
  </div>
  @endforeach
</form>
@endsection
