<!--Header-->

        <!--Mobile View-->

        <div class="mobile_header_container">

            <div class="mobile_menu_container">
                <div class="logo_menu_container">
                    <a href="{{route('home')}}" class="logo_container">
                        <div>
                            <img src="{{asset('img/logo.png')}}" alt="Logo">
                        </div>
                    </a>
                    <div class="hamburger">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="ham_back">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                </div>
                <div class="search_main_container">
                    <div class="search_container">
                    <div class="search_icon">
                        <label for="search_input">
                            <i class="fas fa-search"></i>
                        </label>
                    </div>
                    <div class="search_text">
                        <input type="text" placeholder="Search Here" id="search_input">
                    </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Desktop View-->
        <div class="header_container">

            <!--Left-->

            <div class="left_container">
                <a href="{{route('home')}}">
                    <div class="small_logo">
                        <img src="{{asset('img/Icon.png')}}" alt="Icon">
                    </div>
                </a>
                <div class="search_box">
                    <div class="search_icon">
                        <label for="srch">
                            <i class="fas fa-search"></i>
                        </label>
                    </div>
                    <div class="search_input">
                        <input type="text" placeholder="Search here" id="srch">
                    </div>
                </div>
            </div>

            <!--Center-->

            <div class="center_container">
                <nav>
                    <ul>
                        <li> <abbr title="Newsfeed"> <a href="{{route('newsfeed')}}"  id="active">  <i class="fas fa-home"></i> </a> </abbr> </li>
                        <li> <abbr title="Institute"> <a href="{{route('institute')}}">  <i class="fas fa-university"></i> </a> </abbr> </li>
                        <li> <abbr title="E-meet"> <a href="{{route('e_meet')}}">  <i class="fas fa-users"></i> </a> </abbr> </li>
                        <li> <abbr title="Roll-call"> <a href="{{route('attendance')}}">  <i class="far fa-sticky-note"></i></i> </a> </abbr> </li>
                        <li> <abbr title="Dashboard"> <a href="#">  <i class="fas fa-tachometer-alt"></i> </a> </abbr> </li>
                   </ul>
                </nav>
            </div>

            <!--Right-->

            <div class="right_container">
                <div class="profie_avater" id="pi">
                    <div class="profile_icon_con">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                    <div class="profile_name_con" id="pn">
                        <p>{{Auth::user()->name}}</p>
                    </div>
                <div class="notification" id="notification_desktop">
                    <div class="noti_icon_con">
                        <i class="fas fa-bell"></i>
                    </div>
                </div>
            </div>

            <!--Dropdown-->

            <div class="dropdown_profile" id="dp">
                <a href="{{route('profile')}}">
                    <div class="left_menu_item_container">
                        <div class="item_icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="item_text">
                            <p>Profile</p>
                        </div>
                    </div>
                </a>
                <a href="#" onclick="document.getElementById('logoutform').submit()">
                    <div class="left_menu_item_container">
                        <div class="item_icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="item_text">
                            <p>Logout</p>
                        </div>
                    </div>
                </a>
                <form id="logoutform" action="{{route('logout')}}" method="POST">@csrf</form>
                <a href="#">
                    <div class="left_menu_item_container">
                        <div class="item_icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="item_text">
                            <p>Rate Us</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--Notification For Mobile-->

        <div class="mobile_notification">
            <div class="menu_item_container">
                <ul>
                    <li> <abbr title="Newsfeed"> <a href="{{route('newsfeed')}}"  id="active">  <i class="fas fa-home"></i> </a> </abbr> </li>
                    <li> <abbr title="Institute"> <a href="{{route('institute')}}">  <i class="fas fa-university"></i> </a> </abbr> </li>
                    <li> <abbr title="E-meet"> <a href="{{route('e_meet')}}">  <i class="fas fa-users"></i> </a> </abbr> </li>
                    <li> <abbr title="Roll-call"> <a href="{{route('attendance')}}">  <i class="far fa-sticky-note"></i></i> </a> </abbr> </li>
                    <li> <abbr title="Dashboard"> <a href="{{route('dashboard')}}">  <i class="fas fa-tachometer-alt"></i> </a> </abbr> </li>
               </ul>
            </div>
            <div class="side_menu_item_container">
                <a id="profile">
                    <div class="item_icon_con">
                        <div class="item_icon">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="item_text_con">
                        <p>{{Auth::user()->name}}</p>
                    </div>
                </a>
                <div class="dropdown_profile_mobile">
                    <a href="{{route('profile')}}">
                        <div class="dp_icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="dp_text">
                            <p>Profile</p>
                        </div>
                    </a>
                    <a href="#" onclick="document.getElementById('logoutform').submit()">
                        <div class="dp_icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="dp_text">
                            <p>Logout</p>
                        </div>
                    </a>
                    <form id="logoutform" action="{{route('logout')}}" method="POST">@csrf</form>
                    <a href="#">
                        <div class="dp_icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="dp_text">
                            <p>Rate Us</p>
                        </div>
                    </a>
                </div>
                <a id="sub" href="{{route('subscribed_institutes')}}">
                    <div class="item_icon_con">
                        <div class="item_icon">
                            <i class="fas fa-tv"></i>
                        </div>
                    </div>
                    <div class="item_text_con">
                        <p>Your Subscribtion</p>
                    </div>
                </a>
                <div class="dropdown_sub_mobile">
                    <a href="#">
                        <div class="sub_icon">
                            <p>A</p>
                        </div>
                        <div class="sub_text">
                            <p>Abc</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="sub_icon">
                            <p>E</p>
                        </div>
                        <div class="sub_text">
                            <p>EnfoMe</p>
                        </div>
                    </a>
                    <a href="#">
                        <div class="sub_icon">
                            <p>R</p>
                        </div>
                        <div class="sub_text">
                            <p>Relight</p>
                        </div>
                    </a>
                </div>
                <a id="notification">
                    <div class="item_icon_con">
                        <div class="item_icon">
                            <i class="fas fa-bell"></i>
                        </div>
                    </div>
                    <div class="item_text_con">
                        <p>Notification</p>
                    </div>
                </a>
                
                <!--Main Notification section-->

                <div class="main_notification_container_mobile">

                <!--Single Institute-->

                    <div class="mobile_dropdown_notification">
                        <div class="institute_notification_con">
                            <div class="header">
                                <p>Institute Name</p>
                            </div>
                        <div class="noti_con">
                            <div class="notification">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                                </p>
                            </div>
                            <div class="notification_date">
                                <p>20/02/2020</p>
                            </div>
                        </div>
                        <div class="noti_con">
                            <div class="notification">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                                </p>
                            </div>
                            <div class="notification_date">
                                <p>20/02/2020</p>
                            </div>
                        </div>
                        </div>
                    </div>

                    <!--End Of Signle Institute-->

                    
                    <!--Single Institute-->

                    <div class="mobile_dropdown_notification">
                        <div class="institute_notification_con">
                            <div class="header">
                                <p>Institute Name</p>
                            </div>
                        <div class="noti_con">
                            <div class="notification">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                                </p>
                            </div>
                            <div class="notification_date">
                                <p>20/02/2020</p>
                            </div>
                        </div>
                        <div class="noti_con">
                            <div class="notification">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                                </p>
                            </div>
                            <div class="notification_date">
                                <p>20/02/2020</p>
                            </div>
                        </div>
                        <div class="noti_con">
                            <div class="notification">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                                </p>
                            </div>
                            <div class="notification_date">
                                <p>20/02/2020</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--End Of Signle Institute-->
                

                <!--Single Institute-->

                <div class="mobile_dropdown_notification">
                    <div class="institute_notification_con">
                        <div class="header">
                            <p>Institute Name</p>
                        </div>
                    <div class="noti_con">
                        <div class="notification">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                            </p>
                        </div>
                        <div class="notification_date">
                            <p>20/02/2020</p>
                        </div>
                    </div>
                    </div>
                </div>

                <!--End Of Signle Institute-->
                

                <!--Single Institute-->

                <div class="mobile_dropdown_notification">
                    <div class="institute_notification_con">
                        <div class="header">
                            <p>Institute Name</p>
                        </div>
                    <div class="noti_con">
                        <div class="notification">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                            </p>
                        </div>
                        <div class="notification_date">
                            <p>20/02/2020</p>
                        </div>
                    </div>
                    </div>
                </div>

                <!--End Of Signle Institute-->
                
                </div>
            </div>
        </div>

        <!--Notification For Desktop-->

        <div class="desktop_dropdown_notification">

                <!--Single Institute-->

                <div class="institute_notification_con">
                    <div class="header">
                        <p>Institute Name</p>
                    </div>
                <div class="noti_con">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                        </p>
                    </div>
                    <div class="notification_date">
                        <p>20/02/2020</p>
                    </div>
                </div>
                </div>

                <!--End Of Signle Institute-->

                <!--Single Institute-->

                <div class="institute_notification_con">
                        <div class="header">
                            <p>Institute Name</p>
                        </div>
                    <div class="noti_con">
                        <div class="notification">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                            </p>
                        </div>
                        <div class="notification_date">
                            <p>20/02/2020</p>
                        </div>
                    </div>
                    <div class="noti_con">
                        <div class="notification">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                            </p>
                        </div>
                        <div class="notification_date">
                            <p>20/02/2020</p>
                        </div>
                    </div>
                </div>

                <!--End Of Signle Institute-->

                <!--Single Institute-->

                <div class="institute_notification_con">
                    <div class="header">
                        <p>Institute Name</p>
                    </div>
                <div class="noti_con">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                        </p>
                    </div>
                    <div class="notification_date">
                        <p>20/02/2020</p>
                    </div>
                </div>
                <div class="noti_con">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                        </p>
                    </div>
                    <div class="notification_date">
                        <p>20/02/2020</p>
                    </div>
                </div>
                <div class="noti_con">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                        </p>
                    </div>
                    <div class="notification_date">
                        <p>20/02/2020</p>
                    </div>
                </div>
                </div>

                <!--End Of Signle Institute-->

                <!--Single Institute-->

                <div class="institute_notification_con">
                    <div class="header">
                        <p>Institute Name</p>
                    </div>
                <div class="noti_con">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                        </p>
                    </div>
                    <div class="notification_date">
                        <p>20/02/2020</p>
                    </div>
                </div>
                <div class="noti_con">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                        </p>
                    </div>
                    <div class="notification_date">
                        <p>20/02/2020</p>
                    </div>
                </div>
                <div class="noti_con">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                        </p>
                    </div>
                    <div class="notification_date">
                        <p>20/02/2020</p>
                    </div>
                </div>
                </div>

                <!--End Of Signle Institute-->
                    
        </div>

        </div>

    <!--Header-->