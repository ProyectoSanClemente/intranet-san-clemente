@extends('layouts.master')

@section('content')
<h1>Mostrando {{ $notice->titulo}}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $notice->titulo }}</h2>
        <p>
            <strong>Contenido:</strong> {{ $notice->contenido }}
            <strong>Imagen:</strong> {{ $notice->imagen }}<br>            
        </p>
    </div>

@stop


