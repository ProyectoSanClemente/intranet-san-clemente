@extends('layouts.master')

@section('content')
<h1>Mostrando {{ $usuario->nombre }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $usuario->nombre }}</h2>
        <p>
            <strong>Apellido:</strong> {{ $usuario->apellido }}
            <strong>Email:</strong> {{ $usuario->correo }}<br>            
        </p>
    </div>

@stop


