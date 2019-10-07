@extends('index')
@section('content')
    <div class="container-fluid">
        <h1 align="center">Actualiza tu oportunidad</h1><br>
        <form action="{{url('/oportunidades/'.$oportunidad->id)}}" method="post">
            @csrf
            @method('PATCH')
            @include('oportunidades.form')
            <div class="form-group row" align="center">
                <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
                <a class="btn btn-success" href="{{url('/misOportunidades')}}">CANCELAR</a>
            </div>
        </form>
    </div>
@endsection