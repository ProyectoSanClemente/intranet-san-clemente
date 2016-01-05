@extends('layouts.master')

@section('content')

<h1>Usuarios</h1>
<ul>
	@foreach($usuarios as $usuario)
		<li> {{ $usuario->nombre.' '.$usuario->apellido }} </li> 
	@endforeach 
</ul>
@stop