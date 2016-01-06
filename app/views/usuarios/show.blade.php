@extends('layouts.master')

@section('content')

<div class="container">
  <h2>Usuarios</h2>
  <p>Informacion de todos los usuarios</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
      </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
		<tr>
        <td>{{$usuario->nombre}}</td>
        <td>{{$usuario->apellido}}</td>
        <td>{{$usuario->correo}}</td>
      </tr>
	@endforeach

    </tbody>
  </table>
</div>
@stop