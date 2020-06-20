<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(Route::current()->getName()=='register')
        <link rel="stylesheet" href="{{asset('css/signup_style.css')}}">
        <link rel="stylesheet" href="{{asset('css/signup_responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/mobile_responsive.css')}}">
        <title>Sign Up Form</title>
    @endif
    @if(Route::current()->getName()=='login')
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="{{asset('css/login_style.css')}}">
        <link rel="stylesheet" href="{{asset('css/login_responsive.css')}}">
        <title>Enfo_ME login</title>
    @endif
</head>
<body>
    @yield('content')

    @if(Route::current()->getName()=='register')
        <script src="{{asset('js/mobile_part.js')}}"></script>
        <script src="{{asset('js/mobile_part_app.js')}}"></script>
        <script src="{{asset('js/particles.min.js')}}"></script>
        <script src="{{asset('js/appSignup.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='login')
        <script src="{{asset('js/particles.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/tab_pa.js')}}"></script>
        <script src="{{asset('js/tab_pa_app.js')}}"></script>
        <script src="{{asset('js/mob_pa.js')}}"></script>
        <script src="{{asset('js/mob_pa_app.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>
    @endif
</body>
</html>
