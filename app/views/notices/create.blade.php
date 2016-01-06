@extends('layouts.master')

@section('sidebar')
     @parent
@stop

@section('content')
        {{ HTML::ul($errors->all()) }}
        <h1>Crear Noticia</h1>   
        {{ Form::open(array('url' => 'notices','class'=>'form-horizontal','role'=>'form')) }}
    
        <div class="form-group">
            {{ Form::label('titulo', 'Titulo',array('class' => 'col-lg-3 control-label')); }}
            <div class="col-lg-8">
                {{ Form::text('titulo',null,array('class' => 'form-control col-lg-8','placeholder'=>'Titulo')); }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('contenido', 'Contenido',array('class' => 'col-lg-3 control-label')); }}
            <div class="col-lg-8">
                {{ Form::text('contenido',null,array('class' => 'form-control col-lg-8','placeholder'=>'Contenido')); }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('imagen', 'Imagen',array('class' => 'col-lg-3 control-label')); }}
            <div class="col-lg-8">
                {{ Form::text('imagen',null,array('class' => 'form-control col-lg-8','placeholder'=>'Imagen')); }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('fecha', 'Fecha',array('class' => 'col-lg-3 control-label')); }}
            <div class="col-lg-8">
                {{ Form::text('fecha',null,array('class' => 'form-control col-lg-8','placeholder'=>'Fecha')); }}
            </div>
        </div>

        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            {{ Form::submit('Guardar Cambios',array('class' => 'btn btn-primary btn-primary')); }}

        {{ Form::close() }}

        {{ HTML::link('notices', 'volver',array('class'=>'btn btn-success')); }}
@stop

