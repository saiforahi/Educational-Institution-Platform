<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
    <script>window.user={!! json_encode(Auth::user()); !!};console.log(window.user);</script>
    <title>EnfoMe || Dashboard</title>
    <!-- <link rel="icon" href="./img/enfologo.png"> -->
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <main>
        <!----------------------------------Header Menu Section---------------------------------->
        @include('includes.header')
        <!----------------------------------Left Side Menu---------------------------------->
        @include('includes.body_left')
        <!----------------------------------Right Side Menu---------------------------------->
        @include('includes.body_right')
        <!----------------------------------Left & Right Side Menu Responsive---------------------------------->
        @include('includes.responsive_right_left')
        <!----------------------------------Body---------------------------------->
        <section class="body_area">
            @yield('content')
        </section>
    </main>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/views.js')}}" defer></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>