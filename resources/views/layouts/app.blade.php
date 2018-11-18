<!DOCTYPE html>
<html ng-app="cdg">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <img src="images/avatar-placeholder.svg" alt="" width="30" class="img-circle">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
              								  <li><a href="{{ url('/profile') }}">Perfil</a></li>
              								  <li><a href="{{ url('/logout') }}">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
	<script type="text/javascript" src="{{ asset('jquery/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('bootstrap/dist/js/bootstrap.js') }}"></script>

	<!-- Angular -->
	<script type="text/javascript" src="{{ asset('angular/angular.js') }}"></script>
	<script type="text/javascript" src="{{ asset('angular/angular-ui-bootstrap-tpls.js') }}"></script>

	<!-- App -->
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

	<!-- Pagination -->
	<script type="text/javascript" src="{{ asset('js/pagination.js') }}"></script>
</body>
</html>
