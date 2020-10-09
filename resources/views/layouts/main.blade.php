<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
    <title>Dashboard || EnfoMe</title>
    <!-- <link rel="icon" href="./img/enfologo.png"> -->
    <link rel="stylesheet" href="{{asset('css/designs/style.css')}}">
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
        @yield('content')
        
    </main>
    <script src="{{asset('js/scripts/script.js')}}"></script>
</body>
</html>