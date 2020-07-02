<!DOCTYPE html>
<html>
<head>
<<<<<<< Updated upstream
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
=======
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
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
        <!--script src="https://meet.jit.si/libs/lib-jitsi-meet.min.js"></script-->
        <title>EnfoMe || E-meet</title>
        
    @endif
    @if(Route::current()->getName()=='newsfeed')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/newsfeed.css')}}">
        <title>EnfoMe || Newsfeed</title>
    @endif
    @if(Route::current()->getName()=='institute')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institute.css')}}">
        <title>EnfoMe || Institute</title>
    @endif
    @if(Route::current()->getName()=='language')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/language.css')}}">
        <title>EnfoMe || Language</title>
    @endif
    @if(Route::current()->getName()=='rateus')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/rateus.css')}}">
        <title>EnfoMe || rate us</title>
    @endif
    @if(Route::current()->getName()=='profile')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/profile.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
    @endif
    @if(Route::current()->getName()=='college')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institutepages.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
    @endif
    @if(Route::current()->getName()=='corporate')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institutepages.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
    @endif
    @if(Route::current()->getName()=='diploma')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institutepages.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
    @endif
    @if(Route::current()->getName()=='govt')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institutepages.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
    @endif
    @if(Route::current()->getName()=='national')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institutepages.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
    @endif
    @if(Route::current()->getName()=='private')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institutepages.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
    @endif
    @if(Route::current()->getName()=='school')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institutepages.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
    @endif
    @if(Route::current()->getName()=='university')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institutepages.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
    @endif
    @if(Route::current()->getName()=='notification')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institutepages.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institute_single_page.css')}}">
    @endif
    @if(Route::current()->getName()=='single_institute')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institutepages.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institute_single_page.css')}}">
    @endif
    @if(Route::current()->getName()=='single_news')
        <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institutepages.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/institute_single_page.css')}}">
        <link rel="stylesheet" href="{{asset('css/main/single_news_page.css')}}">
    @endif
>>>>>>> Stashed changes
</head>

<body>
    @yield('content')
<<<<<<< Updated upstream
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
=======
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
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='institute')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='language')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='rateus')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='profile')
    <script src="{{asset('js/main/main.js')}}"></script>
    <script src="{{asset('js/main/function.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='college')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='corporate')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='diploma')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='govt')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='national')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='private')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='school')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='university')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='notification')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='single_institute')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    @if(Route::current()->getName()=='single_news')
        <script src="{{asset('js/main/main.js')}}"></script>
    @endif
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="{{asset('js/views.js')}}" defer></script>
    @yield('js-part')
>>>>>>> Stashed changes
</body>
</html>
