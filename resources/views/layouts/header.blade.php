<!--Header-->
<div class="main_container">
    <!--Left-->
    <div class="header_container">
    <div class="search">
        <div class="search_container">
        <img src="{{asset('img/e_meet/Menu_back.png')}}" alt="Back" id="EnfoMe_Menu_back">
        <img src="{{asset('img/e_meet/Menu.png')}}" alt="Menu" id="EnfoMe_Menu">
        <img src="{{asset('img/e_meet/Icon.png')}}" alt="Icon" id="EnfoMe_Icon">
        <div class="searchBox">
            <input type="text" placeholder="Search Here">
            <div class="search_icon">
                <i class="fas fa-search"></i>
            </div>
        </div>
        </div>
    </div>
    <!--Left-->
    <!--Menu-->
    <div class="nav">
        <nav class="container">
            <ul>
                 <li> <abbr title="Newsfeed"> <a href="{{route('newsfeed')}}"  id="active">  <i class="fas fa-home"></i> </a> </abbr> </li>
                 <li> <abbr title="Institute"> <a href="{{route('institute')}}">  <i class="fas fa-university"></i> </a> </abbr> </li>
                 <li> <abbr title="E-meet"> <a href="{{route('e_meet')}}">  <i class="fas fa-users"></i> </a> </abbr> </li>
                 <li> <abbr title="Language"> <a href="{{route('language')}}">  <i class="fas fa-language"></i> </a> </abbr> </li>
                 <li> <abbr title="Rate Us"> <a href="{{route('rateus')}}">  <i class="fas fa-star"></i> </a> </abbr> </li>
            </ul>
        </nav>
    </div>
    <!--Menu-->
    <!--Right-->
    <div class="profile_container">
        <div class="profile">
            <img src="{{asset('img/e_meet/Profile.png')}}" alt="Profile">
            <a href="#">{{Auth::user()->name}}</a>
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