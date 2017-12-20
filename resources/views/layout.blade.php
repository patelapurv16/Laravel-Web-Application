<!DOCTYPE html>
<head>
    <title>Welcome to Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/favicon.ico" type="image/x-icon" rel="icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('header')
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{URL::to('/')}}">Welcome to Library - ISU</a>
        </div>

        <ul class="nav navbar-nav">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{URL::to('/signin')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="{{URL::to('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </ul>
    </div>
</nav>
@yield('content')
</body>
</html>