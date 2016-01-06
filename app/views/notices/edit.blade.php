@extends('layouts.master')


@section('content')
<h1 class="page-header">Editar</h1>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}


{{ Form::model($notice, array('route' => array('notices.update', $notice->id), 'method' => 'PUT','class' => 'form-horizontal','role'=>'form')) }}

    <div class="row">
        <!-- left column -->

        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
          <h3>Información de la Noticia</h3>
            @if (Session::has('mensaje'))
              <div class="alert alert-info">{{ Session::get('mensaje') }}</div>
            @endif



            <div class="form-group">
                {{ Form::label('titulo', 'Titulo',array('class' => 'col-lg-3 control-label')); }}
                <div class="col-lg-8">
                    {{ Form::text('titulo',$notice->titulo,array('class' => 'form-control col-lg-8','required autofocus')); }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('contenido', 'Contenido',array('class' => 'col-lg-3 control-label')); }}
                <div class="col-lg-8">
                    {{ Form::text('contenido',$notice->contenido ,array('class' => 'form-control col-lg-8','required autofocus')); }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('imagen', 'Imagen',array('class' => 'col-lg-3 control-label')); }}
                <div class="col-lg-8">
                    {{ Form::text('imagen',$notice->imagen ,array('class' => 'form-control col-lg-8','required autofocus')); }}
                </div>
            </div>



            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                {{ Form::submit('Guardar Cambios',array('class' => 'btn btn-primary btn-primary')); }}
                {{ Form::reset('Reiniciar',array('class'=>"btn btn-default")) }}
              </div>
            </div>
           
        </div>
    </div>
{{ Form::close() }}


@stop