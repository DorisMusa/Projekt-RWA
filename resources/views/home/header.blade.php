<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Online cvjećarnica</title>
    <!-- Start Bootstrap Slider HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End Bootstrap Slider HEAD section -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/login-style.css") }}"/>
    <link rel="stylesheet" href="{{ asset("css/images") }}"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


    <style>
        @media screen and (max-width:480px){
            #search{width:80%;}
            #search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
        }
    </style>

</head>

<body style=background-image:url({{url('images/tulips-login.jpg')}})">
<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #f38181; border-bottom-color: #f38181; ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">

            </button>
            <a href="#" class="navbar-brand">Online cvjećarnica</a>
        </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('home')}}"><span class="glyphicon glyphicon-home"></span>  Početna</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(isset(Auth::user()->name))
                        <li><a href="{{route('transaction')}}" class="nav-link"><span class="glyphicon glyphicon-transfer"></span>  Kupnja</a></li>
                        <li><a href="{{route('cart')}}" class="nav-link"><span class="glyphicon glyphicon-shopping-cart"></span>  Košarica</a></li>
                        <li><a href="{{route('account.edit', Auth::user()->id)}}" class="nav-link"><span class="glyphicon glyphicon-shopping-cart"></span>  Moj profil</a></li>
                        @if(Auth::user()->role->name == 'admin' || Auth::user()->role->name == 'moderator')
                            <li><a href="{{route('admin')}}" class="nav-link"><span class="glyphicon glyphicon-list"></span>  Administracija</a></li>
                        @endif
                    @endif
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>  Prijava</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}"><span class="glyphicon glyphicon-new-window"></span>  Registracija</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-user"></span>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" style="background-color: #f38181" aria-labelledby="navbar Dropdown">

                                <a class="dropdown-item" style="color: white"  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-log-out"></span> Odjava
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
    </div>
</div>
    @yield('content')

<script src="{{ asset('js/app.js') }}"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
    $('[data-toggle=datepicker]').each(function() {
        var target = $(this).data('target-name');
        var t = $('input[name=' + target + ']');
        t.datepicker({
            dateFormat: 'dd-mm-yy',
        });
        $(this).on("click", function() {
            t.datepicker("show");
        });
    });
</script>



</body>
</html>

