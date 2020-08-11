<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script>window.user={!! json_encode(Auth::user()); !!}; //console.log(window.user);</script>
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="{{asset('js/views.js')}}" defer></script>
    
    
    <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/responsive.css')}}">
    <link rel="icon" href="{{asset('img/enfologo.png')}}">
    
</head>
<body>
    @yield('content')

    
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
                    roomName: document.getElementById("roomName").value,
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
                //var div=document.getElementsByClassName('watermark leftwatermark');
                //div[0].style.background-image='none';
            }
            window.onload = function(){
                
            }
        </script>
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
    
    <script src="{{asset('js/main/main.js')}}"></script>
    @yield('js-part')
</body>
</html>
