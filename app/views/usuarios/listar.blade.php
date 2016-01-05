@extends('layouts.master')

@section('sidebar')
     @parent
     Lista de usuarios
@stop
@if(Auth::check())
	<a href="{{ URL::to('logout') }}">Logout</a>

@section('content')
        <h1>Usuarios</h1>
        {{ HTML::link('usuarios/nuevo', 'Crear Usuario'); }}

<ul>
  @foreach($usuarios as $usuario)
        <li>{{ HTML::link( 'usuarios/'.$usuario->id , $usuario->nombre.' '.$usuario->apellido.' '.$usuario->apellido ) }}</li>
    @endforeach
</ul>
@stop