<section class="menu">
    <!----------------------------------Left Menu---------------------------------->
    <section class="left_menu">
        <nav>
            <ul>
                <li><a href="#"><img src="./img/IconLogo.png" alt="Logo"></a></li>
                <li><form action="#">
                    <input type="text" placeholder="Search Here">
                    <button><i class="fas fa-search"></i></button>
                </form></li>
            </ul>
        </nav>
        <div class="responsive_right_menu">
            <ul>
                <li id="profile_section_btn_res"><abbr title="Profile"><span><i class="fas fa-id-badge"></i></span></abbr></li>
                <li id="notification_section_btn_res"><abbr title="Notification"><span><i class="fas fa-bell"></i></span></abbr></li>
                <li id="hamburger_menu">
                    <span>
                        <svg class="ham hamRotate ham7" viewBox="0 0 100 100" width="80" onclick="this.classList.toggle('active')">
                            <path
                                  class="line top"
                                  d="m 70,33 h -40 c 0,0 -6,1.368796 -6,8.5 0,7.131204 6,8.5013 6,8.5013 l 20,-0.0013" />
                            <path
                                  class="line middle"
                                  d="m 70,50 h -40" />
                            <path
                                  class="line bottom"
                                  d="m 69.575405,67.073826 h -40 c -5.592752,0 -6.873604,-9.348582 1.371031,-9.348582 8.244634,0 19.053564,21.797129 19.053564,12.274756 l 0,-40" />
                          </svg>
                    </span>
                </li>
            </ul>
        </div>
    </section>
    <!----------------------------------Center Menu---------------------------------->
    <section class="main_menu">
        <ul>
            <li><a href="#">Demo Nav Item</a></li>
            <li><a href="#">Demo Nav Item</a></li>
            <li><a href="#">Demo Nav Item</a></li>
            <li><a href="#">Demo Nav Item</a></li>
            <li><a href="#">Demo Nav Item</a></li>
            <li><a href="#">Demo Nav Item</a></li>
            <li><a href="#">Demo Nav Item</a></li>
            <li><a href="#">Demo Nav Item</a></li>
            <li><a href="#">Demo Nav Item</a></li>
        </ul>
    </section>
    <!----------------------------------Right Menu---------------------------------->
    <section class="right_menu">
        <nav>
            <ul>
                <li id="profile_section_btn"><abbr title="Profile"><span><i class="fas fa-id-badge"></i></span></abbr></li>
                <li id="notification_section_btn"><abbr title="Notification"><span><i class="fas fa-bell"></i></span></abbr></li>
            </ul>
        </nav>
        <!----------------------------------Profile Section---------------------------------->
        <div class="profile_section">
            <a href="#">
                <div class="p_s_con">
                    <div class="p_s_icon">
                        <span><i class="fas fa-user"></i></span>
                    </div>
                    <div class="p_s_text">
                        <p>Md Zahid Ul Islam Saikat</p>
                    </div>
                </div>
            </a>
            <a href="#" onclick="document.getElementById('logoutform').submit()">
                <div class="p_s_con">
                    <div class="p_s_icon">
                        <span><i class="fas fa-lock"></i></span>
                    </div>
                    <div class="p_s_text">
                        <p>Log Out</p>
                    </div>
                </div>
                <form id="logoutform" action="{{route('logout')}}" method="POST">@csrf</form>
            </a>
            <a href="#">
                <div class="p_s_con">
                    <div class="p_s_icon">
                        <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="p_s_text">
                        <p>Rate us</p>
                    </div>
                </div>
            </a>
        </div>
        <!----------------------------------Notification Section---------------------------------->
        <div class="notification_section">
            <!------------------Single Institute------------------>
            <div class="n_s_con">
                <a href="#">
                <div class="institute_name">
                    <p>Institute Name</p>
                </div>
                </a>
                <!------------Notification Body------------>
                <a href="#">
                <div class="notification">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                </div>
                </a>
                <div class="notification_date">
                    <p>Date: 20/02/2020</p>
                </div>
                <!------------Notification Body------------>
                <!------------Notification Body------------>
                <a href="#">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                    </div>
                    </a>
                    <div class="notification_date">
                        <p>Date: 20/02/2020</p>
                    </div>
                    <!------------Notification Body------------>
                <!------------Notification Body------------>
                <a href="#">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                    </div>
                    </a>
                    <div class="notification_date">
                        <p>Date: 20/02/2020</p>
                    </div>
                    <!------------Notification Body------------>
                <!------------Notification Body------------>
                <a href="#">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                    </div>
                    </a>
                    <div class="notification_date">
                        <p>Date: 20/02/2020</p>
                    </div>
                    <!------------Notification Body------------>
            </div>
            <!------------------End of Single Institute------------------>
            <!------------------Single Institute------------------>
            <div class="n_s_con">
                <a href="#">
                <div class="institute_name">
                    <p>Institute Name</p>
                </div>
                </a>
                <!------------Notification Body------------>
                <a href="#">
                <div class="notification">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                </div>
                </a>
                <div class="notification_date">
                    <p>Date: 20/02/2020</p>
                </div>
                <!------------Notification Body------------>
            </div>
            <!------------------End of Single Institute------------------>
            <!------------------Single Institute------------------>
            <div class="n_s_con">
                <a href="#">
                <div class="institute_name">
                    <p>Institute Name</p>
                </div>
                </a>
                <!------------Notification Body------------>
                <a href="#">
                <div class="notification">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                </div>
                </a>
                <div class="notification_date">
                    <p>Date: 20/02/2020</p>
                </div>
                <!------------Notification Body------------>
                <!------------Notification Body------------>
                <a href="#">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                    </div>
                    </a>
                    <div class="notification_date">
                        <p>Date: 20/02/2020</p>
                    </div>
                    <!------------Notification Body------------>
                <!------------Notification Body------------>
                <a href="#">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                    </div>
                    </a>
                    <div class="notification_date">
                        <p>Date: 20/02/2020</p>
                    </div>
                    <!------------Notification Body------------>
                <!------------Notification Body------------>
                <a href="#">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                    </div>
                    </a>
                    <div class="notification_date">
                        <p>Date: 20/02/2020</p>
                    </div>
                    <!------------Notification Body------------>
            </div>
            <!------------------End of Single Institute------------------>
            <!------------------Single Institute------------------>
            <div class="n_s_con">
                <a href="#">
                <div class="institute_name">
                    <p>Institute Name</p>
                </div>
                </a>
                <!------------Notification Body------------>
                <a href="#">
                <div class="notification">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                </div>
                </a>
                <div class="notification_date">
                    <p>Date: 20/02/2020</p>
                </div>
                <!------------Notification Body------------>
            </div>
            <!------------------End of Single Institute------------------>
            <!------------------Single Institute------------------>
            <div class="n_s_con">
                <a href="#">
                <div class="institute_name">
                    <p>Institute Name</p>
                </div>
                </a>
                <!------------Notification Body------------>
                <a href="#">
                <div class="notification">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                </div>
                </a>
                <div class="notification_date">
                    <p>Date: 20/02/2020</p>
                </div>
                <!------------Notification Body------------>
            </div>
            <!------------------End of Single Institute------------------>
            <!------------------Single Institute------------------>
            <div class="n_s_con">
                <a href="#">
                <div class="institute_name">
                    <p>Institute Name</p>
                </div>
                </a>
                <!------------Notification Body------------>
                <a href="#">
                <div class="notification">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                </div>
                </a>
                <div class="notification_date">
                    <p>Date: 20/02/2020</p>
                </div>
                <!------------Notification Body------------>
                <!------------Notification Body------------>
                <a href="#">
                    <div class="notification">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 kjyhudzsgk</p>
                    </div>
                    </a>
                    <div class="notification_date">
                        <p>Date: 20/02/2020</p>
                    </div>
                    <!------------Notification Body------------>
            </div>
            <!------------------End of Single Institute------------------>
        </div>
    </section>
</section>