<div class="left_menu" id="menu">
    <!--Profile Section-->
    <div class="logo">
        <img src="{{asset('img/e_meet/logo.png')}}" alt="Logo">
    </div>
    <div class="profile_side">
        <img src="{{asset('img/e_meet/Profile.png')}}" alt="Profile Picture">
        <a href="#">{{Auth::user()->name}}</a>
    </div>
    <div class="logout_right">
        <img src="{{asset('img/e_meet/LogOut.png')}}" alt="LogOut">
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <span></span>
    </div>
    <div class="subscription">
        <img src="{{asset('img/e_meet/Subscribe.png')}}" alt="Subscribe">
        <a href="#">Your Subscription</a>
    </div>
    <!--Subscribe Section-->
    <div class="sub_instNames">
        <div class="sub_profile_img">E</div>
        <a href="#"><p class="insName_line_one"> E-meet </p> <p class="insName_line_two"></p></a>
    </div>
    <div class="sub_instNames">
        <div class="sub_profile_img">D</div>
        <a href="#"> <p class="insName_line_one"> Dhaka University </p><p class="insName_line_two"></p></a>
    </div>
    <div class="sub_instNames">
        <div class="sub_profile_img">R</div>
        <a href="#"> <p class="insName_line_one"> Relight Research </p><p class="insName_line_two"></p></a>
    </div>
    <div class="sub_instNames">
        <div class="sub_profile_img">H</div>
        <a href="#"> <p class="insName_line_one">Holy Cross Girls High School</p>
            <p class="insName_line_two"> and college </p></a>
    </div>
    <div class="sm_btn_cnt">
        <button id="see_more_button">See More</button>
        <span></span>
    </div>
</div>