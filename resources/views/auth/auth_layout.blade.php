<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @if(Route::current()->getName()=='register' || Route::current()->getName()=='mobile_reg')
        <link rel="stylesheet" href="{{asset('css/signup/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/signup/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/signup/mobile_responsive.css')}}">
        <title>{{config('app.name', 'Laravel')}} || Registration</title>
    @endif
    @if(Route::current()->getName()=='login')
        <link rel="stylesheet" href="{{asset('css/login/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/login/responsive.css')}}">
        <title>{{config('app.name', 'Laravel')}} || Login</title>
    @endif
    <link rel="icon" href="{{asset('img/enfologo.png')}}">
    
</head>
<body>
    @yield('content')
    
    @if(Route::current()->getName()=='register' || Route::current()->getName()=='mobile_reg')
        <script src="{{asset('js/signup/mobile_part.js')}}"></script>
        <script src="{{asset('js/signup/mobile_part_app.js')}}"></script>
        <script src="{{asset('js/signup/particles.min.js')}}"></script>
        <script src="{{asset('js/signup/app.js')}}"></script>
        <script src="{{asset('js/signup/main.js')}}"></script>
        <script src="{{asset('js/signup/validationForStudent.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='login')
        <script src="{{asset('js/login/particles.min.js')}}"></script>
        <script src="{{asset('js/login/app.js')}}"></script>
        <script src="{{asset('js/login/tab_pa.js')}}"></script>
        <script src="{{asset('js/login/tab_pa_app.js')}}"></script>
        <script src="{{asset('js/login/mob_pa.js')}}"></script>
        <script src="{{asset('js/login/mob_pa_app.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
    @endif
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="{{asset('js/main/main.js')}}"></script>
    @yield('js-part')
</body>
</html>
