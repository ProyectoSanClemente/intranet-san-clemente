@extends('layouts.master')

@section('sidebar')
     @parent
     Información de usuario
@stop

@section('content')
    {{ HTML::link('usuarios', 'Volver'); }}
    <h1>Usuario {{$usuario->id}}</h1>
    {{ $usuario->nombre .' '.$usuario->apellido }}
    <br />
@stop