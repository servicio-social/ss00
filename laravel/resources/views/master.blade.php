<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Servicio Social</title>
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/landing-page.css') }}" rel="stylesheet">
    <link href="{{ asset('/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" >Servicio Social</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="{{ url('/informacion') }}">Información</a></li>
					@if (Auth::guest())
						<li><a href="{{ url('/cauth/login') }}">Login</a></li>
					@else
                    @if (Auth::user()->type==6)
                        <li><a href="administracion">Administración</a></li>
                    @endif
                    @if (Auth::user()->type==1)
						<li><a href="documentacion">Documentación</a></li>
                    @endif
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->cn }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            </ul>
                        </li>
					@endif
				</ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

	@yield('content')

	<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 textwidget">
                         <p class="copyright text-muted small">Instituto Tecnológico de Culiacán<br>
                        Av. Juan de Dios Bátiz 310 Pte. Col. Guadalupe, Culiacán, Sinaloa. C.P. 80220  Teléfono: +52 (667) 713-1796 y 713-3804<br>
                        Tecnológico Nacional de M&eacute;xico - Algunos derechos reservados &copy; 2015<br/>
                        <a href="/politica-de-privacidad/">Pol&lacute;tica de Privacidad</a></p>
                </div>
            </div>
        </div>
    </footer>

	<!-- Scripts -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/events.js') }}"></script>
</body>
</html>