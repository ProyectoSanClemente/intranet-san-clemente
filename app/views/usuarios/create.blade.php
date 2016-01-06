@extends('layouts.master')

@section('sidebar')
     @parent
@stop

@section('content')
        {{ HTML::ul($errors->all()) }}
        <h1>Crear Usuario</h1>   
        {{ Form::open(array('url' => 'usuarios','class'=>'form-horizontal','role'=>'form')) }}
    
        <div class="form-group">
            {{ Form::label('rut', 'Rut',array('class' => 'col-lg-3 control-label')); }}
            <div class="col-lg-8">
                {{ Form::text('rut',null,array('class' => 'form-control col-lg-8','placeholder'=>'Rut')); }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('nombre', 'Nombre',array('class' => 'col-lg-3 control-label')); }}
            <div class="col-lg-8">
                {{ Form::text('nombre',null,array('class' => 'form-control col-lg-8','placeholder'=>'Nombre')); }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('apellido', 'Apellido',array('class' => 'col-lg-3 control-label')); }}
            <div class="col-lg-8">
                {{ Form::text('apellido',null,array('class' => 'form-control col-lg-8','placeholder'=>'Apellido')); }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('correo', 'Correo',array('class' => 'col-lg-3 control-label')); }}
            <div class="col-lg-8">
                {{ Form::text('correo',null,array('class' => 'form-control col-lg-8','placeholder'=>'Correo')); }}
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            {{ Form::submit('Guardar Cambios',array('class' => 'btn btn-primary btn-primary')); }}

        {{ Form::close() }}

        {{ HTML::link('usuarios', 'volver',array('class'=>'btn btn-success')); }}
@stop

