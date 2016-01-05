<html>
<head>
{{ HTML::style('bootstrap/css/bootstrap.css')}}
{{ HTML::style('bootstrap/css/bootstrap-theme.css')}}
{{ HTML::style('bootstrap/css/bootstrap.min.js')}}
@if(Auth::check())
	<a href="{{ URL::to('logout') }}">Logout</a>
@endif
</head> 
    <body>

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>