<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Online cvjećarnica</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/login-style.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/images") }}"/>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <!-- aaa-->
</head>

<body style="padding-top: 80px; background-image:url({{url('images/tulips-login.jpg')}})">

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #f38181; border-bottom-color: #f38181;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('admin')}}"><span class="glyphicon glyphicon-user"></span>  Korisnik</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{route('home')}}"><span class="glyphicon glyphicon-home"></span>  Početna</a></li>
                @if(Auth::user()->role->name == 'admin')
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>  Korisnici<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('users.create')}}"><span class="glyphicon glyphicon-new-window"></span>  Dodaj korisnika</a></li>
                        <li><a href="{{route('users.index')}}"><span class="glyphicon glyphicon-eye-open"></span>  Prikaz korisnika</a></li>
                        <li><a href="{{route('users.deleted')}}"><span class="glyphicon glyphicon-trash"></span>  Izbrisani korisnici</a></li>
                    </ul>
                </li>
                @endif
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-list"></span>  Proizvodi<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('products.create')}}"><span class="glyphicon glyphicon-new-window"></span>  Dodaj proizvod</a></li>
                        <li><a href="{{route('products.index')}}"><span class="glyphicon glyphicon-eye-open"></span>  Prikaz proizvoda</a></li>
                        @if(Auth::user()->role->name == 'admin')
                        <li><a href="{{route('products.deleted')}}"><span class="glyphicon glyphicon-trash"></span>  Izbrisani proizvodi</a></li>
                        @endif
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-list"></span>  Kategorija<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('categories.index')}}"><span class="glyphicon glyphicon-new-window"></span>  Dodaj kategoriju</a></li>
                        @if(Auth::user()->role->name == 'admin')
                        <li><a href="{{route('categories.deleted')}}"><span class="glyphicon glyphicon-trash"></span>  Izbrisane kategorije</a></li>
                        @endif
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-list"></span>  Vrste cvijeća <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('brands.index')}}"><span class="glyphicon glyphicon-new-window"></span>  Dodaj vrstu cvijeća</a></li>
                        @if(Auth::user()->role->name == 'admin')
                        <li><a href="{{route('brands.deleted')}}"><span class="glyphicon glyphicon-trash"></span>  Izbrisane vrste cvijeća</a></li>
                        @endif
                    </ul>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-log-out"></span>  Odjava
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>

                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="row">
        <div>
            @yield('content')
        </div>
    </div>


<script src="{{ asset("js/app.js") }}"></script>
</body>
</html>
