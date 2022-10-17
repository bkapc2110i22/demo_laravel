<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - MyShop</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    @yield('css')
</head>

<body>

    <nav class="navbar navbar-inverse">

        <div class="container">
            <a class="navbar-brand" href="#">Title</a>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('home.index') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('home.about') }}">About</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
            @if (auth('cus')->check())
                <li class="active">
                    <a href="{{ route('home.login') }}">Hi {{auth('cus')->user()->name}}</a>
                </li>
                <li>
                    <a href="{{ route('home.profile') }}">Profile</a>
                </li>
                <li>
                    <a href="{{ route('home.logout') }}">Logout</a>
                </li>
            @else
                <li class="active">
                    <a href="{{ route('home.login') }}">Login</a>
                </li>
            @endif
            </ul>
        </div>

    </nav>

    <div class="container">
        @if (Session::has('no'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{Session::get('no')}}!</strong>
        </div>
        @endif
        @if (Session::has('yes'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{Session::get('yes')}}!</strong>
        </div>
        @endif
        @yield('main')
    </div>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('js')
</body>

</html>