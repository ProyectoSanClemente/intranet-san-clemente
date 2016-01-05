@extends('layouts.master')

@section('sidebar')
     @parent
     Información de usuario
@stop

@section('content')




    {{ HTML::link('usuarios', 'Volver'); }}
    {{$usuario}}
   


<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Hola {{$usuario->nombre." ".$usuario->apellido}}</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Subir otra imagen</h6>
        <input type="file" class="text-center center-block well well-sm">
      </div>
    </div>
    <!-- edit form column -->

    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <h3>Información Personal</h3>


        {{ Form::open(array('url' => 'login','class' => 'form-horizontal','role'=>'form')) }}
        <div class="form-group">
            {{ Form::label('Nombre', 'Nombre',array('class' => 'col-lg-3 control-label')); }}
            <div class="col-lg-8">
                {{ Form::text('Nombre',$usuario->nombre,array('class' => 'form-control col-lg-8','required autofocus')); }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('Apellido', 'Apellido',array('class' => 'col-lg-3 control-label')); }}
            <div class="col-lg-8">
                {{ Form::text('Apellido',$usuario->apellido,array('class' => 'form-control col-lg-8')); }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('Correo', 'Correo',array('class' => 'col-lg-3 control-label')); }}
            <div class="col-lg-8">
                {{ Form::text('Correo',$usuario->correo,array('class' => 'form-control col-lg-8')); }}
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            {{ Form::submit('Guardar Cambios',array('class' => 'btn btn-primary btn-primary')); }}
            {{ Form::reset('Reiniciar',array('class'=>"btn btn-default")) }}
          </div>
        </div>
       {{ Form::close() }}
    </div>
  </div>
</div>

@stop