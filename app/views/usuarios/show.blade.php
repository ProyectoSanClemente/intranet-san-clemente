@extends('layouts.master')

@section('content')
<h1 class="page-header">Información de usuario: {{ $usuario->nombre.' '.$usuario->apellido }}</h1>

    <div class="jumbotron text-center">
        <p>
       <strong>Nombre: </strong>{{$usuario->nombre}}
      <strong>Apellido: </strong>{{$usuario->apellido}}
        </p>
        <p>
        <strong>Rut: </strong>{{$usuario->rut}}
        </p>
        <p>
      <strong>Email:</strong> {{ $usuario->correo }}           
      </p>
      <p>
      </p>
        @if (file_exists('images/avatar/'.$usuario->rut.'.jpg'))
            {{HTML::image('images/avatar/'.$usuario->rut.'.jpg',null,array('class'=>'avatar img-circle img-thumbnail'))}}
        @else
            {{HTML::image('images/avatar/default.png',null,array('class'=>'avatar img-circle img-thumbnail'))}}
        @endif
    </div>
@stop





