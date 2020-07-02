@extends('layouts.app')

@section('content')
<div class="flex_container">
    <div class="container">
        <svg version="1.1" id="shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 1580 780" style="enable-background:new 0 0 1580 780;" xml:space="preserve">
        <style type="text/css">
            .st0{fill:#6BB392;}
        </style>
        <path class="st0" d="M0,0c0,260,0,520,0,780c272.06,0,544.13,0,816.19,0c-202.96-117.21-248.8-198.5-240.51-255.04
            c14.57-99.39,198.24-134.63,194.55-238.98c-2.03-57.29-58.46-77.29-65.87-160.85C699.63,71.77,717.94,26.94,731.94,0
            C487.96,0,243.98,0,0,0z"/>
        </svg>
        <div class="slider_container">
            <div class="logo">
                <img src="{{asset('img/logo.png')}}" alt="">
            </div>
            <div class="slider">
                <div class="heading_text">
                    Bangladesh's most advanced<br>multipurpose digital communication <br> platform.
                </div>
                <!--
                <div class="subheading_text">
                    Join Us Now
                </div>
                -->
                <a href="{{route('register')}}" target="_blank" class="sign_up"> <span>SIGN UP</span> </a>
                <div class="slider_buttons">
                    <div class="s_but_one"></div>
                    <div class="s_but_two"></div>
                    <div class="s_but_three"></div>
                </div>
            <div class="slider_image">
                <img src="{{asset('img/iso.png')}}" alt="">
            </div>
            </div>
            <div class="footer">
            <div class="footer_text">
                DOWNLOAD OUR FREE APP
            </div>
            <div class="footer_icon">
                    <a href="#" class="playstore">
                        <img src="{{asset('img/playstore.svg')}}" alt="" id="playimg">
                    </a>
                    <a href="#" class="apple">
                        <img src="{{asset('img/apple.svg')}}" alt="" id="appleimg">
                    </a>
            </div>
            </div>
        </div>
        <div class="form_partical_container" id="particles-js">
        </div>
        <form id="desk_login_form" action="{{route('login')}}" method="POST">
            @csrf
            <div class="form">
                <div class="welcome">
                    Welcome
                </div>
                <div class="email">
                    <input type="email" name="email" id="email" class="email_con" required>
                    <label for="email">E-mail</label>
                    <span class="line"></span>
                </div>
                <div class="pass">
                    <input type="password" name="password" id="pass" class="pass_con" required>
                    <label for="pass">Password</label>
                    <span class="line"></span>
                </div>
                <div class="checkbox">
                    <label for="">
                        <input type="checkbox">
                        <span class="btn"></span>
                        <span class="btn_circle"></span>
                        <div class="text">Institute</div>
                    </label>
                    <label id="inst" for="">
                        <input type="checkbox">
                        <span class="btn"></span>
                        <span class="btn_circle"></span>
                        <div class="text">Student / Parent / Staff</div>
                    </label>
                </div>
                    <a href="#" onclick="document.getElementById('desk_login_form').submit();" class="log_in">LOG IN</a>
                <div class="form_footer">
                    <span>Forget Password?</span><a href="#">Recover Password</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!--For tablet responsive-->
<div class="tab_container">
    <div class="main_con">
            <img src="{{asset('img/logo.png')}}" alt="Logo" class="logo">
            <h1>Bangladesh's most advanced<br>multipurpose digital communication <br> platform.</h1>
            <a href="{{route('register')}}" target="_blank" class="sign_up_btn">SIGN UP</a>
            <p>DOWNLOAD OUR FREE APP</p>
            <div class="icon_container">
                <a href="#" class="playstore">
                    <img src="{{asset('img/playstore.svg')}}" alt="" id="playimg">
                </a>
                <a href="#" class="apple">
                    <img src="{{asset('img/apple.svg')}}" alt="" id="appleimg">
                </a>
            </div>
    </div>
    <div class="particle" id="particles-js-tab">

    </div>
    <form id="tab_login_form" action="{{route('login')}}" method="POST">
    @csrf
        <div class="form_container">
            <div class="text">
                Welcome
            </div>
            <div class="email_container">
                <input type="email" name="email" id="email" class="email_cont" required>
                <label for="email">E-mail</label>
                <span class="line"></span>
            </div>
            <div class="pass_container">
                <input type="password" name="password" id="pass" class="pass_cont" required>
                <label for="pass">Password</label>
                <span class="line"></span>
            </div>
            <div class="checkbox_con">
                <label for="">
                    <input type="checkbox">
                    <span class="btn"></span>
                    <span class="btn_circle"></span>
                    <div class="text">Institute</div>
                </label>
                <label id="inst" for="">
                    <input type="checkbox">
                    <span class="btn"></span>
                    <span class="btn_circle"></span>
                    <div class="text">Student / Parent / Staff</div>
                </label>
            </div>
                <a href="#" onclick="document.getElementById('tab_login_form').submit()" class="log_in_btn">LOG IN</a>
            <div class="form_footer_con">
                <span>Forget Password?</span><a href="#">Recover Password</a>
            </div>
        </div>
    </form>
</div>
<!--For Mobile Responsive-->

<div class="mobile_container">
    <div class="form_container_mobile">
        <form id="mob_login_form" action="{{route('login')}}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Enter Your E-mail or Number"><br>
            <input type="password" name="password" placeholder="Enter Your Password"><br>
            <label for="" class="chose">Chose you account type below:</label>
            <input type="checkbox" name="institute" id="institute"><label for="institute">Institute</label><br>
            <input type="checkbox" name="institute" id="student"><label for="student" class="student">Student/Parent?Staff</label><br>
        </form>
        <a href="#" onclick="document.getElementById('mob_login_form').submit()" class="login_for_mobile">LOG IN</a>
        <div class="form_footer_con_mobile">
            <span>Forget Password?</span><a href="#">Recover Password</a>
        </div>
        <div class="form_footer_con_mobile margin_for_signup">
            <span>Don't have an account?</span><a href="{{route('register')}}">Sign Up</a>
        </div>
    </div>
</div>
<div id="particles-js-mob">

</div>
@endsection
