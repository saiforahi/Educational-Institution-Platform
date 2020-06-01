<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>EnfoMe | Homepage</title>
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Titillium+Web:wght@300;400;600;700;900&display=swap" rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    @yield('content')
    <script src="{{asset('js\jquery.js')}}"></script>
    <script src="{{asset('js\popper.min.js')}}"></script>
    <script src="{{asset('js\jquery.scrollTo.js')}}"></script>
    <script src="{{asset('js\bootstrap.min.js')}}"></script>
    <script src="{{asset('js\jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js\jquery.fancybox.js')}}"></script>
    <script src="{{asset('js\appear.js')}}"></script>
    <script src="{{asset('js\swiper.min.js')}}"></script>
    <script src="{{asset('js\element-in-view.js')}}"></script>
    <script src="{{asset('js\jquery.paroller.min.js')}}"></script>
    <script src="{{asset('js\parallax.min.js')}}"></script>
    <script src="{{asset('js\tilt.jquery.min.js')}}"></script>
    <!--Master Slider-->
    <script src="{{asset('js\jquery.easing.min.js')}}"></script>
    <script src="{{asset('js\owl.js')}}"></script>
    <script src="{{asset('js\wow.js')}}"></script>
    <script src="{{asset('js\jquery-ui.js')}}"></script>
    <script src="{{asset('js\script.js')}}"></script>
</body>
</html>