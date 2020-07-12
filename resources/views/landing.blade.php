<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
    <title>EnfoMe</title>
    <link rel="icon" href="{{asset('img/frontend/enfologo.png')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/lightslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/team.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/news.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/menu_responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/statement_responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/events.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/survey.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/tutorial.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/download.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/team.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/contact.css')}}">
</head>
<body>
    <!--Desktop Menu-->
    <div class="main_menu_container_desktop">
        <div class="logo_container_desktop">
            <a href="{{route('home')}}"><img src="{{asset('img/frontend/Logo.png')}}" alt="Logo"></a>
        </div>
        <div class="menu_container">
            <ul>
                <li><a href="{{route('newsfeed')}}">Newsfeed</a></li>
                <li><a href="#a">About</a></li>
                <li><a href="#e">Events</a></li>
                <li><a href="#s">Survey</a></li>
                <li><a href="#t">Tutorial</a></li>
                <li><a href="#o">Team</a></li>
                <li><a href="#d">Download</a></li>
                <li><a href="#c">Contact</a></li>
            </ul>
        </div>
        @auth
        <div class="login_signup">
            <div class="login">
                <a href="#">{{Auth::user()->name}}</a>
            </div>
            <div class="signup">
                <form id="logoutform" action="{{route('logout')}}" method="POST">@csrf</form>
                <a href="#" onclick="document.getElementById('logoutform').submit()">Logout</a>
            </div>
        </div>
        @endauth
        @guest
        <div class="login_signup">
            <div class="login">
                <a href="{{route('login')}}">Login</a>
            </div>
            <div class="signup">
                <a href="{{route('register')}}">SignUp</a>
            </div>
        </div>
        @endguest
        
        <!--Tab & Mobile Menu-->
        <div class="menu_container_mobile">
            <div class="hamburger">
                <i class="fas fa-bars" id="bar"></i>
                <i class="fas fa-times" id="cros"></i>
            </div>
            <nav class="menu_bar" id="menu_bar">
                <ul>
                    <li><a href="#n">Newsfeed</a></li>
                    <li><a href="#a">About</a></li>
                    <li><a href="#e">Events</a></li>
                    <li><a href="#s">Survey</a></li>
                    <li><a href="#t">Tutorial</a></li>
                    <li><a href="#o">Team</a></li>
                    <li><a href="#d">Download</a></li>
                    <li><a href="#c">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!--Responsive Tool-->
        <div class="res" id="res"></div>
    </div>
    <!--Slider Call-->
      <div class="slider_container">
        <iframe src="{{url('landingSlider')}}" frameborder="0" id="slider"></iframe>
      </div>
      <!--Slider Call-->
    <!--News Section-->
    <div class="news_container" id="n">
        <div class="header_container">
                <h1>Newsfeed</h1>
        </div>
        
        <div class="news_feed">
            <a id="previous"></a>
            <a id="next"></a>
    <div id="slideshow">
        <ul id="slides">
            <li class="slideActive">
              <div class="news_con">
                <div class="img_con">
                  <img src="https://images.pexels.com/photos/1123982/pexels-photo-1123982.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                  </div>
                  <div class="description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap <a href="#">[Read more...]</a>
                  </div>
                  <div class="footer">
                    2020/02/25
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="news_con">
                <div class="img_con">
                  <img src="https://images.pexels.com/photos/4739934/pexels-photo-4739934.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                  </div>
                  <div class="description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap <a href="#">[Read more...]</a>
                  </div>
                  <div class="footer">
                    2020/02/25
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="news_con">
                <div class="img_con">
                  <img src="https://images.pexels.com/photos/4738081/pexels-photo-4738081.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                  </div>
                  <div class="description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap <a href="#">[Read more...]</a>
                  </div>
                  <div class="footer">
                    2020/02/25
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="news_con">
                <div class="img_con">
                  <img src="https://images.pexels.com/photos/4754134/pexels-photo-4754134.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                  </div>
                  <div class="description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap <a href="#">[Read more...]</a>
                  </div>
                  <div class="footer">
                    2020/02/25
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="news_con">
                <div class="img_con">
                  <img src="https://images.pexels.com/photos/4449614/pexels-photo-4449614.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                  </div>
                  <div class="description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap <a href="#">[Read more...]</a>
                  </div>
                  <div class="footer">
                    2020/02/25
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="news_con">
                <div class="img_con">
                  <img src="https://images.pexels.com/photos/425160/pexels-photo-425160.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                  </div>
                  <div class="description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap <a href="#">[Read more...]</a>
                  </div>
                  <div class="footer">
                    2020/02/25
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="news_con">
                <div class="img_con">
                  <img src="https://images.pexels.com/photos/4328298/pexels-photo-4328298.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.
                  </div>
                  <div class="description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap <a href="#">[Read more...]</a>
                  </div>
                  <div class="footer">
                    2020/02/25
                  </div>
                </div>
              </div>
            </li>
        </ul>
        <div class="pager">
            <ul>
                <li id="first"></li>
                <li id="second"></li>
                <li id="third"></li>
                <li id="fourth"></li>
                <li id="fifth"></li>
                <li id="sixth"></li>
                <li id="seventh"></li>
            </ul>
        </div>
        <div class="progressbar">
            <div class="full">
                <div class="progress"></div>
            </div>
        </div>
    </div>
        </div>
             
        </div>
        <!--News Section-->
        <!--StateMents Section-->
        <div class="statement_container" id="a">
            <div class="header_container">
                <h1>Statements</h1>
            </div>
            <div class="state_con">
            <div class="state_bg about">
                <div class="statement ab_st">
                    <div class="text_head">
                        <h1>About</h1>
                    </div>
                    <div class="text">
                        <p>EnfoMe is a solution for Educational institutes, Corporate
                          office's unlimited communication for free of charge to
                          save your sms cost. Our app would be beneficial to the
                          whole community. Online classes, Corporate meetings,
                          Doctors, Patients or F&F reunion are just a click away.</p>
                    </div>
                </div>
            </div>
            <div class="state_bg vision">
                <div class="statement">
                    <div class="text_head">
                        <h1>Vision</h1>
                    </div>
                    <div class="text">
                        <p>We want to be the best reliable data bank and service
                          provider IT Company that facilitates organizational and
                          institutional communication: from message to database
                          management.</p>
                    </div>
                </div>
            </div>
            <div class="state_bg mission">
                <div class="statement">
                    <div class="text_head">
                        <h1>Mission</h1>
                    </div>
                    <div class="text">
                        <p>To adopt environment-friendly, paperless and free
                          unlimited communication in between educational
                          institutions primarily and its all kinds of stakeholders
                          such as students, teachers, staffs etc. at a low monthly
                          fee as well as data management for all kinds of internal
                          and external transactions.</p>
                    </div>
                </div>
            </div>
            <div class="state_bg values">
                <div class="statement">
                    <div class="text_head">
                        <h1>Values</h1>
                    </div>
                    <div class="text">
                        <p>Customer Satisfaction, Standard Services, Low cost,
                          Ease of use, Job creation and social development
                          through technology.</p>
                    </div>
                </div>
            </div>
            <div class="state_bg objectives">
                <div class="statement">
                    <div class="text_head">
                        <h1>Objectives</h1>
                    </div>
                    <div class="text">
                        <p>To establish news-feed, institutional and client's
                          access, and online meeting for lecture and
                          information disbursement.</p>
                    </div>
                </div>
            </div>
            <div class="state_bg goals">
                <div class="statement">
                    <div class="text_head">
                        <h1>Goals</h1>
                    </div>
                    <div class="text">
                        <p>To gather and manage all data and information of all the
                          educational institutes; schools, colleges, madrasas and
                          universities under one database as well as explore and
                          enjoy the findings a click away.</p>
                    </div>
                </div>
            </div>
            <div class="state_bg motto">
                <div class="statement">
                    <div class="text_head">
                        <h1>Motto</h1>
                    </div>
                    <div class="text">
                        <p>Technology for Education, Education for all!</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!--StateMents Section-->
    <!--Events-->
    <div class="event_container" id="e">
        <div class="header_container">
            <h1>Events</h1>
        </div>
        <div class="events_con">
            <div class="event_full_con">
                <div class="event_date_con">
                    <div class="num">
                        25
                    </div>
                    <div class="txt">
                        <p id="month">July</p>
                        <p id="year">2020</p>
                    </div>
                </div>
                <div class="event_description_con">
                    <div class="title">
                        <h1>Lorem Ipsum</h1>
                    </div>
                    <div class="description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                </div>
            </div>
            <div class="event_full_con">
                <div class="event_date_con">
                    <div class="num">
                        25
                    </div>
                    <div class="txt">
                        <p id="month">July</p>
                        <p id="year">2020</p>
                    </div>
                </div>
                <div class="event_description_con">
                    <div class="title">
                        <h1>Lorem Ipsum</h1>
                    </div>
                    <div class="description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                </div>
            </div>
            <div class="event_full_con">
                <div class="event_date_con">
                    <div class="num">
                        25
                    </div>
                    <div class="txt">
                        <p id="month">July</p>
                        <p id="year">2020</p>
                    </div>
                </div>
                <div class="event_description_con">
                    <div class="title">
                        <h1>Lorem Ipsum</h1>
                    </div>
                    <div class="description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Events-->
    <!--Survey-->
    <div class="survey_container" id="s">
        <div class="header_container">
            <h1>Survey</h1>
        </div>
        <div class="survey">
          <div class="text">
              <h1>Coming Soon</h1>
          </div>
        </div>
    </div>
    <!--Survey-->
    <!--Tutorial-->
    <div class="tutorial_container" id="t">
        <div class="header_container">
            <h1>Tutorial</h1>
        </div>
        <div class="tutorial">
          <div class="text">
              <h1>Coming Soon</h1>
          </div>
        </div>
    </div>
    <!--Tutorial-->
    <!--Team-->
    <div class="team_container" id="o">
        <div class="header_container">
            <h1>Our Team</h1>
        </div>
        <div class="team">
          <ul id="autoWidth" class="cs-hidden">
            <li class="item-a">
              <div class="team_card">
                <div class="team_image">
                  <img src="{{asset('img/frontend/M A S Prince.jpg')}}">
                </div>
                <div class="n_r">
                  <div class="name">
                    <p>M A S Prince</p>
                    <p>CEO(EnfoMe)</p>
                  </div>
                  <div class="reg">
                    <p>Chairman: M Fashion Group</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="item-a">
              <div class="team_card">
                <div class="team_image">
                  <img src="{{asset('img/frontend/Dr. Muslima Zahan.jpg')}}">
                </div>
                <div class="n_r">
                  <div class="name">
                    <p>Dr. Muslima Zahan</p>
                  </div>
                  <div class="reg">
                    <p>Chief Advisor</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="item-a">
              <div class="team_card">
                <div class="team_image">
                  <img src="{{asset('img/frontend/Samawati Khan.jpg')}}" alt="Saikat">
                </div>
                <div class="n_r">
                  <div class="name">
                    <p>Samawati Khan</p>
                  </div>
                  <div class="reg">
                    <p>Brand Ambassador Jr.</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="item-a">
              <div class="team_card">
                <div class="team_image">
                  <img src="{{asset('img/frontend/Kaniz Fatema Khan.jpg')}}" alt="Saikat">
                </div>
                <div class="n_r">
                  <div class="name">
                    <p>Kaniz Fatema Khan</p>
                  </div>
                  <div class="reg">
                    <p>General Manager</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="item-a">
              <div class="team_card">
                <div class="team_image">
                  <img src="{{asset('img/frontend/saif.jpg')}}" alt="Saikat">
                </div>
                <div class="n_r">
                  <div class="name">
                    <p>Saif Azad</p>
                  </div>
                  <div class="reg">
                    <p>Web Developer Senior</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="item-a">
              <div class="team_card">
                <div class="team_image">
                  <img src="{{asset('img/frontend/sunny.jpg')}}" alt="Saikat">
                </div>
                <div class="n_r">
                  <div class="name">
                    <p>Faruk A Sunny</p>
                  </div>
                  <div class="reg">
                    <p>Web Developer Jr.</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="item-a">
              <div class="team_card">
                <div class="team_image">
                  <img src="{{asset('img/frontend/rabeya.jpg')}}" alt="Saikat">
                </div>
                <div class="n_r">
                  <div class="name">
                    <p>Rabaya Aktar Rabu</p>
                  </div>
                  <div class="reg">
                    <p>Market Analyst Jr.</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="item-a">
              <div class="team_card">
                <div class="team_image">
                  <img src="{{asset('img/frontend/saikat.jpg')}}" alt="Saikat">
                </div>
                <div class="n_r">
                  <div class="name">
                    <p>Md Zahid Ul Islam</p>
                    <p>Saikat</p>
                  </div>
                  <div class="reg">
                    <p>Web Developer Jr.</p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
    </div>
    <!--Team-->
    <!--Download-->
    <div class="download_container" id="d">
      <div class="header_container">
          <h1>Download</h1>
      </div>
      <div class="download">
          <div class="text">
              <h1>Download Our Free App</h1>
          </div>
          <div class="download_btn apple">
              <a href="#"><i class="fab fa-apple"></i> <span>Appstore</span></a>
          </div>
          <div class="download_btn play">
              <a href="#"><i class="fab fa-google-play"></i> <span>Playstore</span></a>
          </div>
      </div>
  </div>
  <!--Download-->
    <!--Contact-->
    <div class="contact_container" id="c">
        <div class="header_container">
            <h1>Contact Us</h1>
        </div>
        <div class="contact">
          <div class="contact_info">
            <div class="info">
              <h1>Contact Info</h1>
            </div>
            <a href="tel:+8801319714358" target="_blank">
            <div class="call">
              <div class="icon">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div class="text">
                <p class="bold">Call Us</p>
                <p>+8801319714358</p>
              </div>
            </div>
            </a>
            <a href="mailto:enfomein@enfome.info" target="_blank">
            <div class="mail">
              <div class="icon">
                <i class="far fa-envelope"></i>
              </div>
              <div class="text">
                <p class="bold">Send Us Email</p>
                <p>enfomein@enfome.info</p>
              </div>
            </div>
            </a>
            <a href="http://maps.google.com/?q=Location,125BusinessEvenue,Huston,USA" target="_blank">
            <div class="location">
              <div class="icon">
                <i class="fas fa-search-location"></i>
              </div>
              <div class="text">
                <p class="bold">Location</p>
                <p>Bashundhara Residential Area</p>
                <p>Dhaka, Bangladesh 1229.</p>
              </div>
            </div>
            </a>
            <div class="social_container">
              <ul>
                <li><a href="#"><abbr title="Facebook"><i class="fab fa-facebook-f"></i></abbr></a></li>
                <li><a href="#"><abbr title="Instagram"><i class="fab fa-instagram"></i></abbr></a></li>
                <li><a href="#"><abbr title="Twitter"><i class="fab fa-twitter"></i></abbr></a></li>
                <li><a href="#"><abbr title="WhatsApp"><i class="fab fa-whatsapp"></i></abbr></a></li>
            </ul>
            </div>
          </div>


          <!--Main Form-->
          <form action="#">
            <h1>Contact US</h1>
            <div class="n">
              <input type="text" id="fullname" required>
              <label for="fullname">Full-name</label>
            </div>
            <div class="e">
              <input type="email" id="email" required>
              <label for="email">E-mail</label>
            </div>
            <div class="p">
              <input type="tel" id="num" required>
              <label for="num">Number</label>
            </div>
            <div class="m">
              <input type="text" id="msg" required>
              <label for="msg">Enter Your Message</label>
            </div>
            <div class="btn">
              <button>Send</button>
            </div>
          </form>
          <!--Main Form-->
        </div>
    </div>
    <!--Contact-->
    <!--Footer-->
    <div class="footer">
      <p>© Copyright 2020 || EnfoMe </p>
    </div>
    <!--Footer-->

    <script src="{{asset('js/frontend/JQuery3.3.1.js')}}"></script>
    <script src="{{asset('js/frontend/lightslider.js')}}"></script>
    <script  src="{{asset('js/frontend/team.js')}}"></script>
    <script src="{{asset('js/frontend/news.js')}}"></script>
    <script src="{{asset('js/frontend/script.js')}}"></script>
</body>
</html>