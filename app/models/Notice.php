<?php

    class Notice extends Eloquent
    {
    	protected $table = 'noticias';
    	protected $fillable = array('titulo','contenido', 'imagen');
    }