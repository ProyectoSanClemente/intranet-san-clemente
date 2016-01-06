<html>
<head>
{{ HTML::style('bootstrap/css/bootstrap.css')}}
{{ HTML::style('bootstrap/css/bootstrap-theme.css')}}
{{ HTML::style('bootstrap/css/bootstrap.min.js')}}


<nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
		<li> {{ HTML::link('usuarios', 'Inicio');}} </li>
		<li> {{ HTML::link('usuarios/edit', 'Mi Pagina');}}</li> 
		<li> {{ HTML::link('usuarios', 'Directorio Empleados');}}</li> 
		<li> {{ HTML::link('contacto', 'Contacto');}}</li> 

		<li> {{ HTML::link('usuarios', 'Eventos');}}</li> 
		<li> {{ HTML::link('usuarios', 'Tareas');}}</li> 
		<li> {{ HTML::link('notices', 'Noticias');}}</li> 
		<li> {{ HTML::link('usuarios', 'Contenido de Intranet');}}</li> 
		<li> {{ HTML::link('usuarios', 'Flujo de Trabajo');}}</li> 
		<li> {{ HTML::link('usuarios', 'Administrador');}}</li> 
	 	<li> {{ HTML::link('usuarios', 'Reportes');}}</li> 
      
      <li>@if(Auth::check())
    	{{ HTML::link('logout', 'Cerrar Sesion',array('class'=>'btn-lg btn-danger')); }}
	@endif
	</li>
    </ul>
</nav>

</head> 
    <body>

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>