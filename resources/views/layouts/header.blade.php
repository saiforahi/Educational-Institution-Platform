<!--Header-->
<div class="main_container">
    @include('layouts.nav')
    <!--Right-->
    <div class="profile_container">
        <div class="profile">
            <div class="profile_img_top">
                <img src="{{asset('img/e_meet/Profile.png')}}" alt="Profile">
            </div>
            <a href="{{route('profile')}}">{{Auth::user()->name}}</a>
        </div>
        <div class="logout_right">
            <img src="{{asset('img/e_meet/LogOut.png')}}" alt="LogOut">
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
    </div>
    <!--Right-->
<!--Header-->