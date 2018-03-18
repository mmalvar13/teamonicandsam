<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cardio: Free One Page Template by Luka Cvetinovic</title>
    <meta name="description"
          content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic"/>
    <meta name="keywords" content="html template, css, free, one page, gym, fitness, web design"/>
    <meta name="author" content="Luka Cvetinovic for Codrops"/>
    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Normalize -->
    {{--<link rel="stylesheet" type="text/css" href="css/normalize.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/normalize.css') }}">

    <!-- Bootstrap -->
    {{--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}">

    <!-- Owl -->
    {{--<link rel="stylesheet" type="text/css" href="css/owl.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/owl.css') }}">

    <!-- Animate.css -->
    {{--<link rel="stylesheet" type="text/css" href="css/animate.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/animate.css') }}">

    <!-- Font Awesome -->
    {{--<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/font-awesome-4.1.0/css/font-awesome.min.css') }}">

    <!-- Elegant Icons -->
    {{--<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">--}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/eleganticons/et-icons.css') }}">

    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/cardio.css') }}">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

</head>

<body class="layout-default">
<nav class="navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{--<a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>--}}
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-nav">
                <li><a href="/">Home</a></li>
                <li><a href="#services">See All Actions</a></li>
                <li><a href="#services">Browse Organizations</a></li>
                <li><a href="#team"></a></li>
                <li><a href="{{ url('/register') }}" class="btn btn-blue">Sign Up</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
@yield('content')
</body>
</html>