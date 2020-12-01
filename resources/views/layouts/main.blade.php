<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
    <script>window.user={!! json_encode(Auth::user()); !!};console.log(window.user);</script>
    <title>EnfoMe || Dashboard</title>
    <link rel="icon" href="{{asset('img/enfologo.png')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/views.js')}}" defer></script>
</head>
<body>
    <div id="app">
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
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>