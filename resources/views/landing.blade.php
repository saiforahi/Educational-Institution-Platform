<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="{{asset('img/male-user.svg')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.user={!! json_encode(Auth::user()); !!};</script>
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
                <li><a href="https://relightbd.org/#survey" target="_blank">Survey</a></li>
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
                    <li><a href="{{route('newsfeed')}}">Newsfeed</a></li>
                    <li><a href="#a">About</a></li>
                    <li><a href="#e">Events</a></li>
                    <li><a href="https://relightbd.org/#survey" target="_blank">Survey</a></li>
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
                  <img src="{{url('storage/news_image/NEWS-MP.JPG')}}" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    তথ্য প্রযুক্তির উন্নয়নের সুফল পাচ্ছে বাংলাদেশঃ আহমেদ ফিরোজ কবির, এম পি
                  </div>
                  <div class="description">
                    তথ্য প্রযুক্তির উন্নয়নের সুফল পাচ্ছে বাংলাদেশ, বলেন অর্থ এবং ডাক, টেলিযোগাযোগ ও তথ্য প্রযুক্তি বিষয়ক সংসদীয় কমিটির সদস্য আহমেদ ফিরোজ কবির এম পি। Enfome নামে একটি ক্লাউড মিটিং সফটওয়্যার এর থেকে সম্মাননা ক্রেস্ট গ্রহণকালে তিনি এই মন্তব্য করেন। তিনি আরও বলেন, শিক্ষা ব্যাবস্থা এখন সম্পূর্ণ ডিজিটালাইজেশন এর দিকে এগিয়ে যাচ্ছে। এছাড়া বিচার ব্যাবস্থা, বাজার ব্যাবস্থা সব ই নিয়ন্ত্রিত হচ্ছে প্রযুক্তির মাধ্যমে। তাই ডিজিটাল বাংলাদেশ এখন আর স্বপ্ন নয় বাস্তবতা, যা শুধু মাননীয় প্রধানমন্ত্রী শেখ হাসিনার দূরদর্শী নেতৃত্বের কারণে সম্ভব হয়েছে বলে তিনি মন্তব্য করেন।<a href="#">[Read more...]</a>
                  </div>
                  <div class="footer">
                    2020/07/07
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="news_con">
                <div class="img_con">
                  <img src="{{url('storage/news_image/CHARITY.JPG')}}" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    আটঘরিয়ায় মাস্ক গ্লোফস্ হ্যান্ড স্যানিটাইজার বিতরণ করলেন ড.মুসলিমা জাহান
                  </div>
                  <div class="description">
                    করোনা জয়ে স্বীকৃত শেখ হাসিনার নেতৃত্বে করোনা প্রতিরোধে উপকরণ বিতরণ কার্যক্রম শুরু করেছেন ড.মুসলিমা জাহান। পাবনার আটঘরিয়া ও ঈশ্বরদী উপজেলায় তার ব্যাপক ভূমিকা লক্ষ্য করা যাচ্ছে। প্রাণঘাতি করোনা ভাইরাসের এই ক্রান্তিকালে এলাকাবাসির উদ্দেশ্যে স্বাস্থ্যবিধি মেনে চলার জন্য আনুরোধ করছেন ড. মুসলিমা জাহান ময়না।<a href="#">[Read more...]</a>
                  </div>
                  <div class="footer">
                    2020/07/07
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="news_con">
                <div class="img_con">
                  <img src="" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    সম্মাননা স্মারক প্রদান
                  </div>
                  <div class="description">
                      আইসিটি সেক্টরে বিশেষ অবদানের জন্য মাননীয় সংসদ সদস্য (পাবনা-২) এবং সদস্য, সংসদীয় স্থায়ী কমিটি অর্থ , ডাক, টেলিযোগাযোগ ও তথ্য প্রযুক্তি মন্ত্রণালয় জনাব আহমেদ ফিরোজ কবীর কে EnfoMe এর পক্ষ থেকে সম্মাননা স্মারক প্রদান করা হল।<a href="#">[Read more...]</a>
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
                  <img src="{{url('storage/news_image/NEWS-5.JPG')}}" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    EnfoMe is distributing aid and helping general people to raise awareness
                  </div>
                  <div class="description">
                    <!--a href="#">[Read more...]</a-->
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
                  <img src="{{url('storage/news_image/NEWS-6.JPG')}}" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    EnfoMe and voluntary activities in Pabna
                  </div>
                  <div class="description">
                    
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
                  <img src="{{url('storage/news_image/NEWS-7.JPG')}}" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    EnfoMe engaging on social activities.
                  </div>
                  <div class="description">
                    EnfoMe is always engaged with other social activities. In this pandemic,this is our holy duty to grow up the awarness among the common people. <a href="#">[Read more...]</a>
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
                  <img src="{{url('storage/news_image/NEWS-8.JPG')}}" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    EnfoMe and voluntary activities in Pabna.
                  </div>
                  <div class="description">
                    EnfoMe is distributing aid and helping general people to raise awareness...<a href="#">[Read more...]</a>
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
                  <img src="{{url('storage/news_image/NEWS-9.JPG')}}" alt="">
                </div>
                <div class="text_con">
                  <div class="headline">
                    EnfoMe engaging on social activities.
                  </div>
                  <div class="description">
                    In this pandemic,this is our holy duty to grow up the awarness among the common people.<a href="#">[Read more...]</a>
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
                        22
                    </div>
                    <div class="txt">
                        <p id="month">July</p>
                        <p id="year">2020</p>
                    </div>
                </div>
                <div class="event_description_con">
                    <div class="title">
                        <h1>Covid-19 Awareness</h1>
                    </div>
                    <div class="description">
                        In this pandemic,some people must go out for their living.If we can grow awareness among the common people,nothing can be better than this.This July,by the leading of Dr. Muslima Zahan,EnfoMe distributed sanitizing aid & took a part on growing social awareness in Pabna city.
                    </div>
                </div>
            </div>
            <div class="event_full_con">
                <div class="event_date_con">
                    <div class="num">
                        10
                    </div>
                    <div class="txt">
                        <p id="month">September</p>
                        <p id="year">2020</p>
                    </div>
                </div>
                <div class="event_description_con">
                    <div class="title">
                        <h1>EnfoMe Ambassador</h1>
                    </div>
                    <div class="description">
                        Coming Soon...
                    </div>
                </div>
            </div>
            <div class="event_full_con">
                <div class="event_date_con">
                    <div class="num">
                        07
                    </div>
                    <div class="txt">
                        <p id="month">October</p>
                        <p id="year">2020</p>
                    </div>
                </div>
                <div class="event_description_con">
                    <div class="title">
                        <h1>EnfoMe Star</h1>
                    </div>
                    <div class="description">
                        Coming Soon...
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
              <a href="https://relightbd.org/#survey" target="_blank"><h1>Go to Survey</h1></a>
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
            {{-- <li class="item-a">
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
            </li> --}}
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
              <a href="http://play.google.com/store/apps/details?id=info.enfome.enfome&hl=en" target="_blank"><i class="fab fa-google-play"></i> <span>Playstore</span></a>
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
            <a href="https://goo.gl/maps/EvgQ7oFcWVAEwTQA6" target="_blank">
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
                <li><a href="http://www.facebook.com/enfome.info/" target="_blank"><abbr title="Facebook"><i class="fab fa-facebook-f"></i></abbr></a></li>
                <li><a href="https://www.instagram.com/enfomebd/" target="_blank"><abbr title="Instagram"><i class="fab fa-instagram"></i></abbr></a></li>
                <li><a href="https://twitter.com/enfo_me" target="_blank"><abbr title="Twitter"><i class="fab fa-twitter"></i></abbr></a></li>
                <li><a href="#"><abbr title="WhatsApp" target="_blank"><i class="fab fa-whatsapp"></i></abbr></a></li>
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
    
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/views.js')}}" defer></script>
    <script src="{{asset('js/frontend/lightslider.js')}}"></script>
    <script  src="{{asset('js/frontend/team.js')}}"></script>
    <script src="{{asset('js/frontend/news.js')}}"></script>
    <script src="{{asset('js/frontend/script.js')}}"></script>
    
</body>
</html>