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
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="css/cardio.css">


</head>
<body class="no-skin">
@include('partials.nav');
@include('partials.header')
<div class="main-container" id="main-container">
    {{--@include('partials.sidebar')--}}
    <section>
        <div class="cut cut-top"></div>
        <div class="container">
            <div class="row intro-tables">
                @php $count=0;@endphp
                @foreach($types as $type)
                    @php$count++;@endphp
                    <div class="col-md-4">
                        <div class="intro-table intro-table-1 intro-table-hover custom-image-@php echo $count @endphp">
                            <h5 class="white heading">{{$type->name}}</h5>
                            <div class="bottom">


                                {{--                                {!! link_to_route('actions', $type->name, [$type->id]) !!}--}}

                                {{--<a href="#" class="btn btn-white-fill expand">Go Here</a>--}}
                            </div>
                            <div class="appear-on-hover">
                                @foreach($categories as $category)
                                    @if($category->name != "Event")
                                        <a href="{{'/actions/' . $category->id . '/' . $type->id}}"
                                           class="btn-links-to-actions">
                                            <div class="button-wrap">
                                                <button type="button" class="btn btn-info">{{$category->name}}</button>
                                            </div>
                                        </a>
                                    @endif

                                @endforeach
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
    <section id="services" class="section section-padded">
        <div class="container">
            <div class="row text-center title">
                <h2>Need Help Now?</h2>
                <h4 class="light muted">beep beep beep</h4>
            </div>
            <div class="row services">

                @foreach($categories as $category)
                    @if($category->name == "Event")
                        <div class="col-md-6">
                            <a href="{{'/actions/' . $category->id}}" class="btn-links-to-actions">
                                <div class="service">
                                    <div class="icon-holder">
                                        <img src="img/icons/calendar-alt.svg" alt="" class="icon">
                                    </div>
                                    <h4 class="heading">{{$category->name}}</h4>
                                    <p class="description">Community led events for open participation</p>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
                <div class="col-md-6">
                    <a href="{{'/resources'}}" >
                    <div class="service">
                        <div class="icon-holder">
                            <img src="img/icons/money-bill-alt.svg" alt="" class="icon">
                        </div>
                        <h4 class="heading">Need Help Paying the Bills?</h4>
                        <p class="description">Click here to see a list of resources available to those in need.</p>
                    </div></a>
                </div>
            </div>
        </div>
        <div class="cut cut-bottom"></div>
    </section>
    <section class="section section-padded blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="owl-twitter owl-carousel">
                        <div class="item text-center">
                            <i class="icon fa fa-twitter"></i>
                            <h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
                            <h4 class="light-white light">#health #training #exercise</h4>
                        </div>
                        <div class="item text-center">
                            <i class="icon fa fa-twitter"></i>
                            <h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
                            <h4 class="light-white light">#health #training #exercise</h4>
                        </div>
                        <div class="item text-center">
                            <i class="icon fa fa-twitter"></i>
                            <h4 class="white light">To enjoy the glow of good health, you must exercise.</h4>
                            <h4 class="light-white light">#health #training #exercise</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @yield('content')

    @include('partials.footer')
</div>
</body>
</html>