<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.user={!! json_encode(Auth::user()); !!}</script>
    @if(Route::current()->getName()=='register' || Route::current()->getName()=='mobile_reg')
        <link rel="stylesheet" href="{{asset('css/signup/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/signup/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/signup/mobile_responsive.css')}}">
        <title>EnfoMe || Registration</title>
    @endif
    @if(Route::current()->getName()=='login')
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="{{asset('css/login/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/login/responsive.css')}}">
        <title>EnfoMe || Login</title>
    @endif
    @if(Route::current()->getName()=='e_meet')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/e_meet/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/e_meet/responsive.css')}}">
        <!--script src="https://meet.jit.si/libs/lib-jitsi-meet.min.js"></script-->
        <title>EnfoMe || E-meet</title>
        
    @endif
    @if(Route::current()->getName()=='newsfeed')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/e_meet/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/e_meet/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/e_meet/newsfeed.css')}}">
        <title>EnfoMe || Newsfeed</title>
    @endif
    @if(Route::current()->getName()=='institute')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/e_meet/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/e_meet/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/e_meet/institute.css')}}">
        <title>EnfoMe || Institute</title>
    @endif
    @if(Route::current()->getName()=='language')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/e_meet/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/e_meet/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/e_meet/language.css')}}">
        <title>EnfoMe || Language</title>
    @endif
    @if(Route::current()->getName()=='rateus')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/e_meet/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/e_meet/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/e_meet/rateus.css')}}">
        <title>EnfoMe || rate us</title>
    @endif

</head>
<body>
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
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
    @if(Route::current()->getName()=='e_meet')
        <script src="{{asset('js/e_meet/main.js')}}"></script>
        <script src='https://meet.jit.si/external_api.js'></script>
        <script>
            function joinMeeting(){
                var roomName=document.getElementById('meetingID').value;
                window.location.href = 'https://meet.jit.si/'+roomName;
            }
            function startMeeting(){
                document.getElementById('center_div').style.display='none';
                const domain = 'meet.jit.si';
                const options = {
                    roomName: "trial",
                    //height: document.getElementById("bg_one").getBoundingClientRect().height,
                    //width: document.getElementById("bg_one").getBoundingClientRect().width,
                    height: 400,
                    width: 700,
                    userInfo: {
                        email: window.user.email,
                        displayName: window.user.name                
                    },
                    audioInput: '<deviceLabel>',
                    audioOutput: '<deviceLabel>',
                    videoInput: '<deviceLabel>',
                    parentNode: document.getElementById("meeting"),
                    configOverwrite: { startWithAudioMuted: true },
                    
                }
                window.api = new JitsiMeetExternalAPI(domain, options);
                window.api.addEventListener('readyToClose', function(){
                    window.api.dispose();
                    document.getElementById('center_div').style.display='block';
                });
            }
            window.onload = function(){
                
            }
            
            
        </script>
    @endif
    @if(Route::current()->getName()=='newsfeed')
        <script src="{{asset('js/e_meet/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='institute')
        <script src="{{asset('js/e_meet/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='language')
        <script src="{{asset('js/e_meet/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='rateus')
        <script src="{{asset('js/e_meet/main.js')}}"></script>
    @endif
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="{{asset('js/views.js')}}" defer></script>
    @yield('js-part')
</body>
</html>
