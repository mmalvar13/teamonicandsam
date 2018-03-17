<head>
    <base href="{{URL::asset('/')}}" target="_top">

    {{--<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}" />--}}
{{--    <link rel="stylesheet" href="{{ URL::asset('font-awesome/4.2.0/css/font-awesome.min.css')}}" />--}}
    {{--<link rel="stylesheet" href="{{ URL::asset('css/theme.min.css') }}" class="theme-stylesheet" id="theme-style" />--}}
    {{--<link rel="stylesheet" href="{{ URL::asset('fonts/fonts.googleapis.com.css')}}" />--}}
{{--    <script type="text/javascript" src="{{ URL::asset('js/jquery.2.1.1.min.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('js/jquery.onepagenav.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('js/jquery-1.11.1.min.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('js/main.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('js/owl.carousel.min.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('js/typewriter.js')}}"></script>--}}
    {{--<script src="{{ URL::asset('js/tooltip')}}"></script>--}}
    {{--<script src="{{ URL::asset('js/typed')}}"></script>--}}
    {{--<script src="{{ URL::asset('js/wow.min.js')}}"></script>--}}






    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cardio: Free One Page Template by Luka Cvetinovic</title>
    <meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
    <meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
    <meta name="author" content="Luka Cvetinovic for Codrops" />
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
    {{--<!-- Bootstrap -->--}}
    {{--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">--}}
    {{--<!-- Owl -->--}}
    {{--<link rel="stylesheet" type="text/css" href="css/owl.css">--}}
    {{--<!-- Animate.css -->--}}
    {{--<link rel="stylesheet" type="text/css" href="css/animate.css">--}}
    {{--<!-- Font Awesome -->--}}
    {{--<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">--}}
    {{--<!-- Elegant Icons -->--}}
    {{--<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">--}}
    {{--<!-- Main style -->--}}
    {{--<link rel="stylesheet" type="text/css" href="css/cardio.css">--}}


    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('fonts/font-awesome-4.1.0/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('fonts/eleganticons/et-icons.css') }}" class="theme-stylesheet" id="theme-style" />
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('css/owl.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('css/cardio.css')}}" />



</head>
<body class="no-skin">
@include('partials.header')
<div class="main-container" id="main-container">
    {{--@include('partials.sidebar')--}}
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs" id="breadcrumbs">

            </div>
            @yield('content')
        </div>
    </div>
    @include('partials.footer')
</div>
</body>