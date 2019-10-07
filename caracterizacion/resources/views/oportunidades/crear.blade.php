@extends('index')
@section('content')
    <div class="container-fluid">
        <h1 align="center">Registra tu oportunidad</h1><br>
        <form action="{{url('/oportunidades')}}" method="post">
            @csrf
            @include('oportunidades.form')
            <div class="form-group row" align="center">
                <button type="submit" class="btn btn-primary">REGISTRAR</button>
            </div>
        </form>
    </div>
@endsection