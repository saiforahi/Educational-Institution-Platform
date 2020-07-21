<!--Body Left Side-->
<div class="n_left_body">
    <div class="m_logo_container">
        <a href="{{route('home')}}"><img src="{{asset('img/logo.png')}}" alt="Logo"></a>
    </div>

    <div class="m_left_menu_container">
        <div class="m_item_container">
            <div class="m_item_icon">
                <i class="fas fa-user"></i>
            </div>
            <div class="m_item_text">
                <p>{{Auth::user()->name}}</p>
            </div>
        </div>
        <div class="m_item_container">
            <div class="m_item_icon">
                <i class="fas fa-lock"></i>
            </div>
            <div class="m_item_text" onclick="document.getElementById('logoutform').submit()">
                <p>Logout</p>
            </div>
            <form id="logoutform" action="{{route('logout')}}" method="POST">@csrf</form>
        </div>
        <div class="m_item_container">
            <div class="m_item_icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="m_item_text">
                <p>Rate Us</p>
            </div>
        </div>
    </div>

    <div class="devider"><span></span></div>

    <div class="m_left_menu_container">
        <div class="m_item_container" id="subToggle">
            <div class="m_item_icon">
                <i class="fas fa-tv"></i>
            </div>
            <a href="{{route('subscribed_institutes')}}">
                <div class="m_item_text">
                    <p>Your Subscribtion</p>
                </div>
            </a>
        </div>
        <div class="sub_institute">
            <div class="m_item_container">
                <div class="m_item_icon">
                    <h3>A</h3>
                </div>
                <div class="m_item_text">
                    <p>Abc</p>
                </div>
            </div>
            <div class="m_item_container">
                <div class="m_item_icon">
                    <h3>E</h3>
                </div>
                <div class="m_item_text">
                    <p>EnfoMe</p>
                </div>
            </div>
            <div class="m_item_container">
                <div class="m_item_icon">
                    <h3>R</h3>
                </div>
                <div class="m_item_text">
                    <p>Relight</p>
                </div>
            </div>
        </div>
        <div class="m_item_container" id="notification_left">
            <div class="m_item_icon">
                <i class="fas fa-bell"></i>
            </div>
            <div class="m_item_text">
                <p>Notification</p>
            </div>
        </div>

        <div class="devider"><span></span></div>

    </div>
</div>

<!--Body Left Side-->