<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AWQ : {{ Request::segment(1) }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Trouvez une agence Web pour votre prochain projet</title>

    <link rel="stylesheet" href="{{ asset('css/baguetteBox.min.css') }}"/>

    <!-- font -->
    <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900|Nunito:200,300,400,400i,600,600i,700,700i,800,800i,900">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/super.png') }}" />


    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/typography.css') }}" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes/shortcodes.css') }}" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

    <!-- marketing -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/marketing.css') }}" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />

    <!-- Style customizer -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/skins/skin-blue-gem.css') }}" data-style="styles"/>

    <style>


        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        :root {
            --mainColor: #8aa3ff;
        }
        a.links2 {
            background:
                    linear-gradient(
                            to bottom, var(--mainColor) 0%,
                            var(--mainColor) 100%
                    );
            background-position: 0 100%;
            background-repeat: repeat-x;
            background-size: 4px 4px;
            color: #000;
            text-decoration: none;
            transition: background-size .2s;
        }

        a.links2:hover {
            background-size: 4px 50px;
        }

    </style>
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
                    <a  href="/"><img src="{{ asset('img/ez.png') }}" alt="logo" style="height: 50px"> </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="top-right links" style="padding-left: 5px"><a class="links2" href="{{ route('search') }}" style="font-size:1vmax;color: black">Recherche</a></li>
                            <li class="top-right links" style="padding-left: 5px"><a class="links2" href="{{ route('login') }}" style="font-size:1vmax;color: black">Connexion</a></li>
                            <li class="top-right links" style="padding-left: 5px"><a class="links2" href="{{ route('register') }}" style="font-size:1vmax;color: black">Inscription</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
