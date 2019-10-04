<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>@yield('titulo')</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <nav class="blue">
        <div class="nav-wrapper">
            <div class="container">
                <a href="#" class="brand-logo">@yield('titulo')</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                   
                    @if(Auth::guest())
                    <li><a href="{{route('site.home')}}">Página Inicial</a></li>
                    <li><a href="{{route('site.login')}}">Entrar</a></li>
                    @else
                    <li>
                        <a href="">Olá, {{Auth::user()->name}}</a>
                    </li>
                    
                    <li><a href="{{route('site.home')}}">Página Inicial</a></li>
                    <li><a href="{{route('admin.cursos')}}">Cursos</a></li>

                    <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                    @endif


                </ul>
            </div>
        </div>
    </nav>