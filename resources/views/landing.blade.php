<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EnfoMe</title>

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>

    <!--Favicon and Stylesheet-->
    <link rel="icon" href="{{asset('img/frontend/enfologo.png')}}">
    <link rel="stylesheet" href="{{asset('css/frontend/style.css')}}">


</head>
<body>
    
<!--------------------------------------------------------------------
-----Start:- Menu Section
--------------------------------------------------------------------->

<section class="main_menu_container">
    <div class="main_menu">
        <div class="logo">
            <a href="{{route('home')}}">
                <img src="{{asset('img/frontend/Logo.png')}}" alt="EnfoMe Logo">
            </a>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a class="nav_link" href="{{route('newsfeed')}}">News</a></li>
                    <li><a class="nav_link" href="#about">About</a></li>
                    <li><a class="nav_link" href="#events">Events</a></li>
                    <li><a class="nav_link" href="#survey">Survey</a></li>
                    <li><a class="nav_link" href="#tutorial">Tutorial</a></li>
                    <li><a class="nav_link" href="#team">Team</a></li>
                    <li><a class="nav_link" href="#contact">Contact</a></li>
                    <li><a class="nav_link" href="#download">Download</a></li>
                    <li><a class="nav_link" href="#" onclick="window.location.href='career'" >Career</a></li>
                </ul>
            </nav>
        </div>
        <div class="registration">
            <nav>
                <ul>
                  @auth
                  <li><a href="#">{{Auth::user()->firstName}}</a></li>  
                  <form id="logoutform" action="{{route('logout')}}" method="POST">@csrf</form>
                  <li><a href="#" onclick="document.getElementById('logoutform').submit()">Logout</a></li>
                  @endauth
                  @guest
                  <li><a href="{{route('login')}}">Login</a></li>
                  <li><a href="{{route('register')}}">Signup</a></li>
                  @endguest
                </ul>
            </nav>
        </div>
        <div class="responsiveNav">
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
        </div>
    </div>
</section>

<!--------------------------------------------------------------------
-----End:- Menu Section
--------------------------------------------------------------------->



<!--------------------------------------------------------------------
-----Start:- Menu Section
--------------------------------------------------------------------->

<div class="back_to_top">
  <i class="fas fa-arrow-circle-up"></i>
</div>

<!--------------------------------------------------------------------
-----End:- Menu Section
--------------------------------------------------------------------->



<!--------------------------------------------------------------------
-----Start:- Header Section Slider
--------------------------------------------------------------------->

<section class="header_slider_container">
    <!--Slider Start-->
    <div class="slider-container">
        <div class="slider-control left inactive"></div>
        <div class="slider-control right"></div>
        <ul class="slider-pagi"></ul>
        <div class="slider">
          <div class="slide slide-0 active">
            <div class="slide__bg"></div>
            <div class="slide__content">
              <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="slide__text">
                <h2 class="slide__text-heading">EnfoMe</h2>
                <p class="slide__text-desc">Most advanced multipurpose digital communication platform</p>
                <p class="slide__text-desc">Download our free mobile app today</p>
                <div class="link_con">
                    <a href="#" class="slide__text-link"><i class="fab fa-apple"></i></i></a>
                    <a href="http://play.google.com/store/apps/details?id=info.enfome.enfome&hl=en" class="slide__text-link"><i class="fab fa-google-play"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="slide slide-1 ">
            <div class="slide__bg"></div>
            <div class="slide__content">
              <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="slide__text">
                <h2 class="slide__text-heading">EnfoMe</h2>
                <p class="slide__text-desc">EnfoMe will be a part of digital Bangladesh</p>
                <p class="slide__text-desc">Download our free mobile app today</p>
                <div class="link_con">
                    <a href="#" class="slide__text-link"><i class="fab fa-apple"></i></i></a>
                    <a href="http://play.google.com/store/apps/details?id=info.enfome.enfome&hl=en" class="slide__text-link"><i class="fab fa-google-play"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="slide slide-2">
            <div class="slide__bg"></div>
            <div class="slide__content">
              <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="slide__text">
                <h2 class="slide__text-heading">EnfoMe</h2>
                <p class="slide__text-desc">Technology for Education, Education for all</p>
                <p class="slide__text-desc">Download our free mobile app today</p>
                <div class="link_con">
                    <a href="#" class="slide__text-link"><i class="fab fa-apple"></i></i></a>
                    <a href="http://play.google.com/store/apps/details?id=info.enfome.enfome&hl=en" class="slide__text-link"><i class="fab fa-google-play"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="slide slide-3">
            <div class="slide__bg"></div>
            <div class="slide__content">
              <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="slide__text">
                <h2 class="slide__text-heading">Enfome</h2>
                <p class="slide__text-desc">Be a part of the Future</p>
                <p class="slide__text-desc">Download our free mobile app today</p>
                <div class="link_con">
                    <a href="#" class="slide__text-link"><i class="fab fa-apple"></i></i></a>
                    <a href="http://play.google.com/store/apps/details?id=info.enfome.enfome&hl=en" class="slide__text-link"><i class="fab fa-google-play"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!--Slider End-->
</section>

<!--------------------------------------------------------------------
-----End:- Header Section Slider
--------------------------------------------------------------------->



<!--------------------------------------------------------------------
-----Start:- News Section
--------------------------------------------------------------------->

<section class="section_element" id="news">

  <div class="section_header">
    <h1>Newsfeed</h1>
  </div>

  <!-- News container -->
  <div class="news_section_container">
    
    <div class="news_section_header">
      <div class="text_container">
        <p>Latest news from</p>
        <h1>EnfoMe</h1>
      </div>
      <div class="link_container">
        <a href="#" target="_blank">Visit EnfoMe blog</a>
      </div>
    </div>  

    <!-- News Body Container -->
    <div class="news_section_body">

      <div class="news_slider_container">
        <!-- Single News -->
        <div class="news_container">
          <div class="title">
            <h1>1.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
          </div>
          <div class="image">
            <img src="https://cdn.pixabay.com/photo/2020/10/27/09/44/macarons-5690175__340.jpg" alt="">
          </div>
          <div class="description">
            <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing [<a href="#">Read more</a>]</p>
          </div>
        </div>
        <!-- Single News -->
  
        <!-- Single News -->
        <div class="news_container">
          <div class="title">
            <h1>2.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
          </div>
          <div class="image">
            <img src="https://cdn.pixabay.com/photo/2020/10/27/09/44/macarons-5690175__340.jpg" alt="">
          </div>
          <div class="description">
            <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing [<a href="#">Read more</a>]</p>
          </div>
        </div>
        <!-- Single News -->
  
        <!-- Single News -->
        <div class="news_container">
          <div class="title">
            <h1>3.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
          </div>
          <div class="image">
            <img src="https://cdn.pixabay.com/photo/2020/10/27/09/44/macarons-5690175__340.jpg" alt="">
          </div>
          <div class="description">
            <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing [<a href="#">Read more</a>]</p>
          </div>
        </div>
        <!-- Single News -->
  
        <!-- Single News -->
        <div class="news_container">
          <div class="title">
            <h1>4.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
          </div>
          <div class="image">
            <img src="https://cdn.pixabay.com/photo/2020/10/27/09/44/macarons-5690175__340.jpg" alt="">
          </div>
          <div class="description">
            <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing [<a href="#">Read more</a>]</p>
          </div>
        </div>
        <!-- Single News -->
      </div>

      <!-- Previous Next of news -->
      <div class="prev_next">
        <a id="newsPrev"><i class="fas fa-arrow-left"></i> <span>Previous</span></a>
        <a id="newsNext"><span>Next</span> <i class="fas fa-arrow-right"></i></a>
      </div>
      <!-- Previous Next of news -->

    </div>
    <!-- News Body Container -->

  </div>
  <!-- News container -->

</section>

<!--------------------------------------------------------------------
-----End:- News Section
--------------------------------------------------------------------->



<!--------------------------------------------------------------------
-----Start:- About Section
--------------------------------------------------------------------->
<section class="section_element" id="about">

  <div class="section_header">
    <h1>Statements</h1>
  </div>

  <div class="about_body_section">

    <div class="about_container">


      <div class="about_column">
        <div class="about_row">
          <div class="style_text left_align">
            <h1>A</h1>
          </div>
          <div class="icon">
            <i class="fas fa-info-circle"></i>
          </div>
          <div class="text">
            <h1>About us</h1>
          </div>
        </div>
        <div class="about_row">
          <p>EnfoMe is a solution for Educational institutes, Corporate office's unlimited communication for free of charge to save your sms cost. Our app would be beneficial to the whole community. Online classes, Corporate meetings, Doctors, Patients or F&F reunion are just a click away.</p>
        </div>
      </div>


      <div class="about_column">
        <div class="about_row ordering">
          <p>Customer Satisfaction, Standard Services, Low cost, Ease of use, Job creation and social development through technology.</p>
        </div>
        <div class="about_row">
          <div class="style_text right_align">
            <h1>V</h1>
          </div>
          <div class="icon">
            <i class="fas fa-hand-holding-water"></i>
          </div>
          <div class="text">
            <h1>Values</h1>
          </div>
        </div>
      </div>


      <div class="about_column">
        <div class="about_row">
          <div class="style_text left_align">
            <h1>V</h1>
          </div>
          <div class="icon">
            <i class="fas fa-eye"></i>
          </div>
          <div class="text">
            <h1>Vission</h1>
          </div>
        </div>
        <div class="about_row">
          <p>We want to be the best reliable data bank and service provider IT Company that facilitates organizational and institutional communication: from message to database management.</p>
        </div>
      </div>


      <div class="about_column">
        <div class="about_row ordering">
          <p>To establish news-feed, institutional and client's access, and online meeting for lecture and information disbursement.</p>
        </div>
        <div class="about_row">
          <div class="style_text right_align">
            <h1>O</h1>
          </div>
          <div class="icon">
            <i class="fas fa-bullseye"></i>
          </div>
          <div class="text">
            <h1>Objectives</h1>
          </div>
        </div>
      </div>


      <div class="about_column">
        <div class="about_row">
          <div class="style_text left_align">
            <h1>M</h1>
          </div>
          <div class="icon">
            <i class="fas fa-space-shuttle"></i>
          </div>
          <div class="text">
            <h1>Mission</h1>
          </div>
        </div>
        <div class="about_row">
          <p>To adopt environment-friendly, paperless and free unlimited communication in between educational institutions primarily and its all kinds of stakeholders such as students, teachers, staffs etc. at a low monthly fee as well as data management for all kinds of internal and external transactions.</p>
        </div>
      </div>


      <div class="about_column">
        <div class="about_row ordering">
          <p>Technology for Education, Education for all!</p>
        </div>
        <div class="about_row">
          <div class="style_text right_align">
            <h1>M</h1>
          </div>
          <div class="icon">
            <i class="fas fa-hands"></i>
          </div>
          <div class="text">
            <h1>Motto</h1>
          </div>
        </div>
      </div>


      <div class="about_column">
        <div class="about_row">
          <div class="style_text left_align">
            <h1>G</h1>
          </div>
          <div class="icon">
            <i class="fas fa-calendar-check"></i>
          </div>
          <div class="text">
            <h1>Goals</h1>
          </div>
        </div>
        <div class="about_row">
          <p>To gather and manage all data and information of all the educational institutes; schools, colleges, madrasas and universities under one database as well as explore and enjoy the findings a click away.</p>
        </div>
      </div>



    </div>


  </div>

</section>
<!--------------------------------------------------------------------
-----End:- About Section
--------------------------------------------------------------------->


<!--------------------------------------------------------------------
-----Start:- Event Section
--------------------------------------------------------------------->
<section class="section_element" id="events">
  <div class="section_header">
    <h1>Events</h1>
  </div>

  <div class="events_section_body">

    <div class="events_container">
      <div class="events_card">
        <div class="event_date_month">
          <div class="date">
            <h1>26</h1>
          </div>
          <div class="month">
            <p>Novembar</p>
          </div>
        </div>
        <div class="event_title">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
        <div class="event_des_trigger">
          <p>View Event Details</p>
          <i class="fas fa-plus-circle"></i>
        </div>
        <div class="event_description">
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>
        </div>
      </div>


      <div class="events_card">
        <div class="event_date_month">
          <div class="date">
            <h1>29</h1>
          </div>
          <div class="month">
            <p>Decembar</p>
          </div>
        </div>
        <div class="event_title">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
        <div class="event_des_trigger">
          <p>View Event Details</p>
          <i class="fas fa-plus-circle"></i>
        </div>
        <div class="event_description">
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>
        </div>
      </div>


      <div class="events_card">
        <div class="event_date_month">
          <div class="date">
            <h1>01</h1>
          </div>
          <div class="month">
            <p>January</p>
          </div>
        </div>
        <div class="event_title">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
        <div class="event_des_trigger">
          <p>View Event Details</p>
          <i class="fas fa-plus-circle"></i>
        </div>
        <div class="event_description">
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>
        </div>
      </div>


    </div>

  </div>

</section>
<!--------------------------------------------------------------------
-----End:- Event Section
--------------------------------------------------------------------->



<!--------------------------------------------------------------------
-----Start:- Survey Section
--------------------------------------------------------------------->
<section class="section_element" id="survey">
  <div class="section_header">
    <h1>Survey</h1>
  </div>

  <div class="survey_body_section">
    <div class="main_survey_container">
      <div class="survey_text_con">
          <div class="s_header">
              <div class="s_header_icon">
                  <i class="fas fa-poll"></i>
              </div>
              <div class="s_header_text">
                  Survey
              </div>
          </div>
          <div class="s_description">
              করোনাকালে স্কুল, শিক্ষক, শিক্ষার্থী ও অভিভাবকদের সাথে যোগাযোগের সবচেয়ে সহজ উপায় তথ্য প্রযুক্তি। আমরা স্কুলগুলোকে প্রযুক্তিগত সহায়তা দিতে বদ্ধ পরিকর যাতে তারা তথ্য ও যোগাযোগ ব্যবস্থাপনায় আমূল উন্নয়ন সাধন করে ছাত্রদের সাথে যোগাযোগ ও শিক্ষা-কার্যক্রম নিরবিচ্ছন্নভাবে চালিয়ে যেতে পারে। সাথে সাথে শিক্ষার্থী, শিক্ষক ও কর্মচারীদের তথ্য ব্যবস্থাপনায় ডিজিটাল সিষ্টেম প্রয়োগ করে স্কুলগুলো নিজেদের আরো সমৃদ্ধ, নির্ভরযোগ্য, উদ্বেগমুক্ত, ও সাসটেইনেবল করে তুলতে পারে যা অভিভাবক এবং সমাজের কাছে তাদের ভাবমূর্তি আরো উজ্জ্বল করবে। আর এজন্য স্কুল সম্পর্কিত কিছু তথ্য আমাদের জানা দরকার।
          </div>
      </div>
      <div class="survey_question_con">
          <div class="sq_header">
              <div class="top">
                  <h3>Please answer the below questions</h3>
              </div>
          </div>
          <form action="#" method="post">

          <!-- Question 1-->
          <div class="sq_question counter-1 activeSurveyQuestion">
              <div class="sq_question_header">
                  <h3>১. স্কুলের ধরন:</h3>
              </div>
              <ul class="sq_question_con one">
                  <li class="answer">
                      <input type="checkbox" id="cb1">
                      <label for="cb1" class="recheck"><div class="tick_con tick_con1"><div class="tick"></div></div></label>
                      <p>সহশিক্ষা হাইস্কুল</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb2">
                      <label for="cb2" class="recheck"><div class="tick_con tick_con1"><div class="tick"></div></div></label>
                      <p>সহশিক্ষা কলেজ</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb3">
                      <label for="cb3" class="recheck"><div class="tick_con tick_con1"><div class="tick"></div></div></label>
                      <p>বালিকা হাইস্কুল</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb4">
                      <label for="cb4" class="recheck"><div class="tick_con tick_con1"><div class="tick"></div></div></label>
                      <p>বালক হাইস্কুল</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb5">
                      <label for="cb5" class="recheck"><div class="tick_con tick_con1"><div class="tick"></div></div></label>
                      <p>স্কুল এন্ড কলেজ</p>
                  </li>
              </ul>
          </div>

          <!-- Question 2-->
          <div class="sq_question counter-2">
              <div class="sq_question_header">
                  <h3>২. স্কুলের কার্যক্রম কাল:</h3>
              </div>
              <ul class="sq_question_con two">
                  <li class="answer">
                      <input type="checkbox" id="cb6">
                      <label for="cb6" class="recheck"><div class="tick_con tick_con2"><div class="tick"></div></div></label>
                      <p>অনধিক পাঁচ বছর</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb7">
                      <label for="cb7" class="recheck"><div class="tick_con tick_con2"><div class="tick"></div></div></label>
                      <p>অনধিক দশ বছর</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb8">
                      <label for="cb8" class="recheck"><div class="tick_con tick_con2"><div class="tick"></div></div></label>
                      <p>অনধিক পনের বছর</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb9">
                      <label for="cb9" class="recheck"><div class="tick_con tick_con2"><div class="tick"></div></div></label>
                      <p>অনধিক বিশ বছর</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb10">
                      <label for="cb10" class="recheck"><div class="tick_con tick_con2"><div class="tick"></div></div></label>
                      <p>স্কুল এন্ড কলেজ</p>
                  </li>
              </ul>
          </div>
          <!-- Question 3-->
          <div class="sq_question counter-3">
              <div class="sq_question_header">
                  <h3>৩. ছাত্র-ছাত্রীর সংখ্যা:</h3>
              </div>
              <ul class="sq_question_con three">
                  <li class="answer">
                      <input type="checkbox" id="cb11">
                      <label for="cb11" class="recheck"><div class="tick_con tick_con3"><div class="tick"></div></div></label>
                      <p>অনধিক ২০০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb12">
                      <label for="cb12" class="recheck"><div class="tick_con tick_con3"><div class="tick"></div></div></label>
                      <p>অনধিক ৫০০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb13">
                      <label for="cb13" class="recheck"><div class="tick_con tick_con3"><div class="tick"></div></div></label>
                      <p>অনধিক ১০০০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb14">
                      <label for="cb14" class="recheck"><div class="tick_con tick_con3"><div class="tick"></div></div></label>
                      <p>অনধিক ২০০০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb15">
                      <label for="cb15" class="recheck"><div class="tick_con tick_con3"><div class="tick"></div></div></label>
                      <p>অনধিক ৫০০০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb16">
                      <label for="cb16" class="recheck"><div class="tick_con tick_con3"><div class="tick"></div></div></label>
                      <p>৫০০০+</p>
                  </li>
              </ul>
          </div>
          <!-- Question 4-->
          <div class="sq_question counter-4">
              <div class="sq_question_header">
                  <h3>৪. শিক্ষকের সংখ্যা:</h3>
              </div>
              <ul class="sq_question_con four">
                  <li class="answer">
                      <input type="checkbox" id="cb17">
                      <label for="cb17" class="recheck"><div class="tick_con tick_con4"><div class="tick"></div></div></label>
                      <p>অনধিক ৫০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb18">
                      <label for="cb18" class="recheck"><div class="tick_con tick_con4"><div class="tick"></div></div></label>
                      <p>অনধিক ১০০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb19">
                      <label for="cb19" class="recheck"><div class="tick_con tick_con4"><div class="tick"></div></div></label>
                      <p>অনধিক ২০০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb20">
                      <label for="cb20" class="recheck"><div class="tick_con tick_con4"><div class="tick"></div></div></label>
                      <p>অনধিক ৫০০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb21">
                      <label for="cb21" class="recheck"><div class="tick_con tick_con4"><div class="tick"></div></div></label>
                      <p>৫০০+</p>
                  </li>
              </ul>
          </div>
          <!-- Question 5-->
          <div class="sq_question counter-5">
              <div class="sq_question_header">
                  <h3>৫. শিক্ষক, অভিভাবক ও শিক্ষার্থীদের সাধারন নোটিশ পাঠানেোর মাধ্যম -</h3>
              </div>
              <ul class="sq_question_con five">
                  <li class="answer">
                      <input type="checkbox" id="cb22">
                      <label for="cb22" class="recheck"><div class="tick_con tick_con5"><div class="tick"></div></div></label>
                      <p>স্কুল ওয়েবসাইট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb23">
                      <label for="cb23" class="recheck"><div class="tick_con tick_con5"><div class="tick"></div></div></label>
                      <p>সোশাল মিডিয়া</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb24">
                      <label for="cb24" class="recheck"><div class="tick_con tick_con5"><div class="tick"></div></div></label>
                      <p>এসএমএস</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb25">
                      <label for="cb25" class="recheck"><div class="tick_con tick_con5"><div class="tick"></div></div></label>
                      <p>মোবাইল কল</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb26">
                      <label for="cb26" class="recheck"><div class="tick_con tick_con5"><div class="tick"></div></div></label>
                      <p>কাগজের নোটিস</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb27">
                      <label for="cb27" class="recheck"><div class="tick_con tick_con5"><div class="tick"></div></div></label>
                      <p>নোটিশ বোর্ড</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb28">
                      <label for="cb28" class="recheck"><div class="tick_con tick_con5"><div class="tick"></div></div></label>
                      <p>অন্যান্য</p>
                  </li>
              </ul>
          </div>
          <!-- Question 6-->
          <div class="sq_question counter-6">
              <div class="sq_question_header">
                  <h3>৬. সাধারণ নোটিশ পাঠানোর ক্ষেত্রে বর্তমানে যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করতে আপনার প্রতিষ্ঠানের প্রতিমাসে কত খরচ হয়?</h3>
              </div>
              <ul class="sq_question_con six">
                  <li class="answer">
                      <input type="checkbox" id="cb29">
                      <label for="cb29" class="recheck"><div class="tick_con tick_con6"><div class="tick"></div></div></label>
                      <p>মাসিক প্রায় ৫০০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb30">
                      <label for="cb30" class="recheck"><div class="tick_con tick_con6"><div class="tick"></div></div></label>
                      <p>মাসিক প্রায় ১০০০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb31">
                      <label for="cb31" class="recheck"><div class="tick_con tick_con6"><div class="tick"></div></div></label>
                      <p>মাসিক প্রায় ১৫০০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb32">
                      <label for="cb32" class="recheck"><div class="tick_con tick_con6"><div class="tick"></div></div></label>
                      <p>মাসিক প্রায় ২০০০</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb33">
                      <label for="cb33" class="recheck"><div class="tick_con tick_con6"><div class="tick"></div></div></label>
                      <p>২০০০+</p>
                  </li>
              </ul>
          </div>
          <!-- Question 7-->
          <div class="sq_question counter-7">
              <div class="sq_question_header">
                  <h3>৭. সাধারণ নোটিশ পাঠানোর ক্ষেত্রে বর্তমানে যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করতে আপনার প্রতিষ্ঠানের প্রতিমাসে কত খরচ হয়?</h3>
              </div>
              <ul class="sq_question_con seven">
                  <li class="answer">
                      <input type="checkbox" id="cb34">
                      <label for="cb34" class="recheck"><div class="tick_con tick_con7"><div class="tick"></div></div></label>
                      <p>০ - ২০ ভাগ</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb35">
                      <label for="cb35" class="recheck"><div class="tick_con tick_con7"><div class="tick"></div></div></label>
                      <p>২০ - ৪০ ভাগ</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb36">
                      <label for="cb36" class="recheck"><div class="tick_con tick_con7"><div class="tick"></div></div></label>
                      <p>৪০ - ৬০ ভাগ</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb37">
                      <label for="cb37" class="recheck"><div class="tick_con tick_con7"><div class="tick"></div></div></label>
                      <p>৪০ - ৬০ ভাগ</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb38">
                      <label for="cb38" class="recheck"><div class="tick_con tick_con7"><div class="tick"></div></div></label>
                      <p>৮০ - ১০০ ভাগ</p>
                  </li>
              </ul>
          </div>
          <!-- Question 8-->
          <div class="sq_question counter-8">
              <div class="sq_question_header">
                  <h3>৮. বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (A)ব্যবহার উপযোগিতা -</h3>
              </div>
              <ul class="sq_question_con eight">
                  <li class="answer">
                      <input type="checkbox" id="cb39">
                      <label for="cb39" class="recheck"><div class="tick_con tick_con8"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট নয়</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb40">
                      <label for="cb40" class="recheck"><div class="tick_con tick_con8"><div class="tick"></div></div></label>
                      <p>মোটামুটি সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb41">
                      <label for="cb41" class="recheck"><div class="tick_con tick_con8"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb42">
                      <label for="cb42" class="recheck"><div class="tick_con tick_con8"><div class="tick"></div></div></label>
                      <p>মোটামুটি অসন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb43">
                      <label for="cb43" class="recheck"><div class="tick_con tick_con8"><div class="tick"></div></div></label>
                      <p>একেবারেই অসন্তুষ্ট</p>
                  </li>
              </ul>
          </div>
          <!-- Question 9-->
          <div class="sq_question counter-9">
              <div class="sq_question_header">
                  <h3>৮. বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (B)খরচ -</h3>
              </div>
              <ul class="sq_question_con nine">
                  <li class="answer">
                      <input type="checkbox" id="cb44">
                      <label for="cb44" class="recheck"><div class="tick_con tick_con9"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট নয়</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb45">
                      <label for="cb45" class="recheck"><div class="tick_con tick_con9"><div class="tick"></div></div></label>
                      <p>মোটামুটি সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb46">
                      <label for="cb46" class="recheck"><div class="tick_con tick_con9"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb47">
                      <label for="cb47" class="recheck"><div class="tick_con tick_con9"><div class="tick"></div></div></label>
                      <p>মোটামুটি অসন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb48">
                      <label for="cb48" class="recheck"><div class="tick_con tick_con9"><div class="tick"></div></div></label>
                      <p>একেবারেই অসন্তুষ্ট</p>
                  </li>
              </ul>
          </div>
          <!-- Question 10-->
          <div class="sq_question counter-10">
              <div class="sq_question_header">
                  <h3>৮. বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (C)কার্যকারীতা -</h3>
              </div>
              <ul class="sq_question_con ten">
                  <li class="answer">
                      <input type="checkbox" id="cb49">
                      <label for="cb49" class="recheck"><div class="tick_con tick_con10"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট নয়</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb50">
                      <label for="cb50" class="recheck"><div class="tick_con tick_con10"><div class="tick"></div></div></label>
                      <p>মোটামুটি সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb51">
                      <label for="cb51" class="recheck"><div class="tick_con tick_con10"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb52">
                      <label for="cb52" class="recheck"><div class="tick_con tick_con10"><div class="tick"></div></div></label>
                      <p>মোটামুটি অসন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb53">
                      <label for="cb53" class="recheck"><div class="tick_con tick_con10"><div class="tick"></div></div></label>
                      <p>একেবারেই অসন্তুষ্ট</p>
                  </li>
              </ul>
          </div>
          <!-- Question 11-->
          <div class="sq_question counter-11">
              <div class="sq_question_header">
                  <h3>৯. শিক্ষক, শিক্ষার্থী, ও অভিভাবকদের সাথে যোগাযোগের ক্ষেত্রে একাধিক যোগাযোগ মাধ্যম ব্যবহারের করতে গিয়ে কি কি সমস্যার সম্মুখীন হয়েছেন?</h3>
              </div>
              <ul class="sq_question_con eleven">
                  <li class="answer">
                      <input type="checkbox" id="cb54">
                      <label for="cb54" class="recheck"><div class="tick_con tick_con11"><div class="tick"></div></div></label>
                      <p>সময় বেশি লাগে</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb55">
                      <label for="cb55" class="recheck"><div class="tick_con tick_con11"><div class="tick"></div></div></label>
                      <p>খরচ বেশি</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb56">
                      <label for="cb56" class="recheck"><div class="tick_con tick_con11"><div class="tick"></div></div></label>
                      <p>কর্মঘন্টা বেশি</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb57">
                      <label for="cb57" class="recheck"><div class="tick_con tick_con11"><div class="tick"></div></div></label>
                      <p>লোকবল বেশি</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb58">
                      <label for="cb58" class="recheck"><div class="tick_con tick_con11"><div class="tick"></div></div></label>
                      <p>তথ্য সন্নিবেশিত থাকে না</p>
                  </li>
              </ul>
          </div>
          <!-- Question 12-->
          <div class="sq_question counter-12">
              <div class="sq_question_header">
                  <h3>১০. আপনার শিক্ষা প্রতিষ্ঠানের কি নিজস্ব ওয়েবসাইট আছে?</h3>
              </div>
              <ul class="sq_question_con twelve">
                  <li class="answer">
                      <input type="checkbox" id="cb59">
                      <label for="cb59" class="recheck"><div class="tick_con tick_con12"><div class="tick"></div></div></label>
                      <p>হ্যাঁ</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb60">
                      <label for="cb60" class="recheck"><div class="tick_con tick_con12"><div class="tick"></div></div></label>
                      <p>না</p>
                  </li>
              </ul>
          </div>
          <!-- Question 13-->
          <div class="sq_question counter-13">
              <div class="sq_question_header">
                  <h3>১১. ১০ নং উত্তর হাঁ হলে- ওয়েবসাইটটিতে কি শিক্ষক, শিক্ষার্থী ও অভিভাবকদের জন্য আলাদা আলাদা লগ-ইনের ব্যবস্থা আছে?</h3>
              </div>
              <ul class="sq_question_con thirteen">
                  <li class="answer">
                      <input type="checkbox" id="cb61">
                      <label for="cb61" class="recheck"><div class="tick_con tick_con13"><div class="tick"></div></div></label>
                      <p>হ্যাঁ</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb62">
                      <label for="cb62" class="recheck"><div class="tick_con tick_con13"><div class="tick"></div></div></label>
                      <p>না</p>
                  </li>
              </ul>
          </div>
          <!-- Question 14-->
          <div class="sq_question counter-14">
              <div class="sq_question_header">
                  <h3>১২. আপনার শিক্ষা প্রতিষ্ঠানে শিক্ষক, শিক্ষার্থী, কর্মচারী ও অভিভাবকদের তথ্য কিভাবে জমা রাখা হয়?</h3>
              </div>
              <ul class="sq_question_con fourteen">
                  <li class="answer">
                      <input type="checkbox" id="cb63">
                      <label for="cb63" class="recheck"><div class="tick_con tick_con14"><div class="tick"></div></div></label>
                      <p>কাগজের ফাইলে</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb64">
                      <label for="cb64" class="recheck"><div class="tick_con tick_con14"><div class="tick"></div></div></label>
                      <p>অফিস পিসিতে</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb65">
                      <label for="cb65" class="recheck"><div class="tick_con tick_con14"><div class="tick"></div></div></label>
                      <p>অফিস ম্যানেজমেন্ট সিষ্টেমে (কমপ্লিট ডাটাবেজ ম্যানেজমেন্ট সিষ্টেম)</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb66">
                      <label for="cb66" class="recheck"><div class="tick_con tick_con14"><div class="tick"></div></div></label>
                      <p>ক্লাউড শেয়ারিং</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb67">
                      <label for="cb67" class="recheck"><div class="tick_con tick_con14"><div class="tick"></div></div></label>
                      <p>অন্যান্য</p>
                  </li>
              </ul>
          </div>
          <!-- Question 15-->
          <div class="sq_question counter-15">
              <div class="sq_question_header">
                  <h3>১৩. বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (A)নতুন তথ্য সংযোজনে (নিউ এন্ট্রি) -</h3>
              </div>
              <ul class="sq_question_con fifteen">
                  <li class="answer">
                      <input type="checkbox" id="cb68">
                      <label for="cb68" class="recheck"><div class="tick_con tick_con15"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট নয়</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb69">
                      <label for="cb69" class="recheck"><div class="tick_con tick_con15"><div class="tick"></div></div></label>
                      <p>মোটামুটি সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb70">
                      <label for="cb70" class="recheck"><div class="tick_con tick_con15"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb71">
                      <label for="cb71" class="recheck"><div class="tick_con tick_con15"><div class="tick"></div></div></label>
                      <p>মোটামুটি অসন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb72">
                      <label for="cb72" class="recheck"><div class="tick_con tick_con15"><div class="tick"></div></div></label>
                      <p>একেবারেই অসন্তুষ্ট</p>
                  </li>
              </ul>
          </div>
          <!-- Question 16-->
          <div class="sq_question counter-16">
              <div class="sq_question_header">
                  <h3>১৩. বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (B)সময় ক্ষেপনের ভিত্তিতে -</h3>
              </div>
              <ul class="sq_question_con sixteen">
                  <li class="answer">
                      <input type="checkbox" id="cb73">
                      <label for="cb73" class="recheck"><div class="tick_con tick_con16"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট নয়</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb74">
                      <label for="cb74" class="recheck"><div class="tick_con tick_con16"><div class="tick"></div></div></label>
                      <p>মোটামুটি সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb75">
                      <label for="cb75" class="recheck"><div class="tick_con tick_con16"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb76">
                      <label for="cb76" class="recheck"><div class="tick_con tick_con16"><div class="tick"></div></div></label>
                      <p>মোটামুটি অসন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb77">
                      <label for="cb77" class="recheck"><div class="tick_con tick_con16"><div class="tick"></div></div></label>
                      <p>একেবারেই অসন্তুষ্ট</p>
                  </li>
              </ul>
          </div>
          <!-- Question 17-->
          <div class="sq_question counter-17">
              <div class="sq_question_header">
                  <h3>১৩. বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (C)দ্রুততার সাথে তথ্যের প্রাপ্তিতা -</h3>
              </div>
              <ul class="sq_question_con seventeen">
                  <li class="answer">
                      <input type="checkbox" id="cb78">
                      <label for="cb78" class="recheck"><div class="tick_con tick_con17"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট নয়</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb79">
                      <label for="cb79" class="recheck"><div class="tick_con tick_con17"><div class="tick"></div></div></label>
                      <p>মোটামুটি সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb80">
                      <label for="cb80" class="recheck"><div class="tick_con tick_con17"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb81">
                      <label for="cb81" class="recheck"><div class="tick_con tick_con17"><div class="tick"></div></div></label>
                      <p>মোটামুটি অসন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb82">
                      <label for="cb82" class="recheck"><div class="tick_con tick_con17"><div class="tick"></div></div></label>
                      <p>একেবারেই অসন্তুষ্ট</p>
                  </li>
              </ul>
          </div>
          <!-- Question 18-->
          <div class="sq_question counter-18">
              <div class="sq_question_header">
                  <h3>১৩. বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (D)খরচের ভিত্তিতে -</h3>
              </div>
              <ul class="sq_question_con eighteen">
                  <li class="answer">
                      <input type="checkbox" id="cb83">
                      <label for="cb83" class="recheck"><div class="tick_con tick_con18"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট নয়</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb84">
                      <label for="cb84" class="recheck"><div class="tick_con tick_con18"><div class="tick"></div></div></label>
                      <p>মোটামুটি সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb85">
                      <label for="cb85" class="recheck"><div class="tick_con tick_con18"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb86">
                      <label for="cb86" class="recheck"><div class="tick_con tick_con18"><div class="tick"></div></div></label>
                      <p>মোটামুটি অসন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb87">
                      <label for="cb87" class="recheck"><div class="tick_con tick_con18"><div class="tick"></div></div></label>
                      <p>একেবারেই অসন্তুষ্ট</p>
                  </li>
              </ul>
          </div>
          <!-- Question 19-->
          <div class="sq_question counter-19">
              <div class="sq_question_header">
                  <h3>১৩. বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (E)লোকবল ও ইউটেনসিলস্ এর ভিত্তিতে -</h3>
              </div>
              <ul class="sq_question_con nineteen">
                  <li class="answer">
                      <input type="checkbox" id="cb88">
                      <label for="cb88" class="recheck"><div class="tick_con tick_con19"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট নয়</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb89">
                      <label for="cb89" class="recheck"><div class="tick_con tick_con19"><div class="tick"></div></div></label>
                      <p>মোটামুটি সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb90">
                      <label for="cb90" class="recheck"><div class="tick_con tick_con19"><div class="tick"></div></div></label>
                      <p>সন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb91">
                      <label for="cb91" class="recheck"><div class="tick_con tick_con19"><div class="tick"></div></div></label>
                      <p>মোটামুটি অসন্তুষ্ট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb92">
                      <label for="cb92" class="recheck"><div class="tick_con tick_con19"><div class="tick"></div></div></label>
                      <p>একেবারেই অসন্তুষ্ট</p>
                  </li>
              </ul>
          </div>
          <!-- Question 20-->
          <div class="sq_question counter-20">
              <div class="sq_question_header">
                  <h3>১৪. শিক্ষক ও শিক্ষার্থীদের পরিপূর্ণ তথ্য সংরক্ষন ও ব্যবহার, ডিজিটাল ম্যানেজমেন্ট সিস্টেম প্রয়োগে আপনারা কি প্রস্তুত?</h3>
              </div>
              <ul class="sq_question_con twenty">
                  <li class="answer">
                      <input type="checkbox" id="cb93">
                      <label for="cb93" class="recheck"><div class="tick_con tick_con20"><div class="tick"></div></div></label>
                      <p>হ্যাঁ</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb94">
                      <label for="cb94" class="recheck"><div class="tick_con tick_con20"><div class="tick"></div></div></label>
                      <p>না</p>
                  </li>
              </ul>
          </div>
          <!-- Question 21-->
          <div class="sq_question counter-21">
              <div class="sq_question_header">
                  <h3>১৫. শিক্ষা-মন্ত্রনালয়ের ডিজিটাল টেকনোলজী অনুসরণ করে আপনারা কোন এ্যাপ কি ব্যবহার করেছেন যা দিয়ে খুব কম খরচে কিংবা বিনা খরচে সকল ছাত্র-ছাত্রী, অভিভাবক ও শিক্ষকের সাথে যোগাযোগ করা যায়‍?</h3>
              </div>
              <ul class="sq_question_con twentyone">
                  <li class="answer">
                      <input type="checkbox" id="cb95">
                      <label for="cb95" class="recheck"><div class="tick_con tick_con21"><div class="tick"></div></div></label>
                      <p>হ্যাঁ</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb96">
                      <label for="cb96" class="recheck"><div class="tick_con tick_con21"><div class="tick"></div></div></label>
                      <p>না</p>
                  </li>
              </ul>
          </div>
          <!-- Question 22-->
          <div class="sq_question counter-22">
              <div class="sq_question_header">
                  <h3>১৬. আপনার কি অনলাইন ক্লাস নিয়েছেন?</h3>
              </div>
              <ul class="sq_question_con twentytwo">
                  <li class="answer">
                      <input type="checkbox" id="cb97">
                      <label for="cb97" class="recheck"><div class="tick_con tick_con22"><div class="tick"></div></div></label>
                      <p>হ্যাঁ</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb98">
                      <label for="cb98" class="recheck"><div class="tick_con tick_con22"><div class="tick"></div></div></label>
                      <p>না</p>
                  </li>
              </ul>
          </div>
          <!-- Question 23-->
          <div class="sq_question counter-23">
              <div class="sq_question_header">
                  <h3>১৭. ১৬-এর উত্তর হাঁ হলে মাধ্যম কি ছিল -</h3>
              </div>
              <ul class="sq_question_con twentythree">
                  <li class="answer">
                      <input type="checkbox" id="cb99">
                      <label for="cb99" class="recheck"><div class="tick_con tick_con23"><div class="tick"></div></div></label>
                      <p>গুগল মীট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb100">
                      <label for="cb100" class="recheck"><div class="tick_con tick_con23"><div class="tick"></div></div></label>
                      <p>ইনফোমী</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb101">
                      <label for="cb101" class="recheck"><div class="tick_con tick_con23"><div class="tick"></div></div></label>
                      <p>জুম</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb102">
                      <label for="cb102" class="recheck"><div class="tick_con tick_con23"><div class="tick"></div></div></label>
                      <p>মেসেন্জার</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb103">
                      <label for="cb103" class="recheck"><div class="tick_con tick_con23"><div class="tick"></div></div></label>
                      <p>অন্যান্য</p>
                  </li>
              </ul>
          </div>
          <!-- Question 24-->
          <div class="sq_question counter-24">
              <div class="sq_question_header">
                  <h3>১৮. ১৬-এর উত্তর না হলে নেবার পরিকল্পনা করেছেন ?</h3>
              </div>
              <ul class="sq_question_con twentyfour">
                  <li class="answer">
                      <input type="checkbox" id="cb104">
                      <label for="cb104" class="recheck"><div class="tick_con tick_con24"><div class="tick"></div></div></label>
                      <p>হ্যাঁ</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb105">
                      <label for="cb105" class="recheck"><div class="tick_con tick_con24"><div class="tick"></div></div></label>
                      <p>না</p>
                  </li>
              </ul>
          </div>
          <!-- Question 25-->
          <div class="sq_question counter-25">
              <div class="sq_question_header">
                  <h3>১৯. ১৮-এর উত্তর হাঁ হলে মাধ্যম কী হবে ভেবেছেন -</h3>
              </div>
              <ul class="sq_question_con twentyfive">
                  <li class="answer">
                      <input type="checkbox" id="cb106">
                      <label for="cb106" class="recheck"><div class="tick_con tick_con25"><div class="tick"></div></div></label>
                      <p>গুগল মীট</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb107">
                      <label for="cb107" class="recheck"><div class="tick_con tick_con25"><div class="tick"></div></div></label>
                      <p>ইনফোমী</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb108">
                      <label for="cb108" class="recheck"><div class="tick_con tick_con25"><div class="tick"></div></div></label>
                      <p>জুম</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb109">
                      <label for="cb109" class="recheck"><div class="tick_con tick_con25"><div class="tick"></div></div></label>
                      <p>মেসেন্জার</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb110">
                      <label for="cb110" class="recheck"><div class="tick_con tick_con25"><div class="tick"></div></div></label>
                      <p>অন্যান্য</p>
                  </li>
              </ul>
          </div>
          <!-- Question 26-->
          <div class="sq_question counter-26">
              <div class="sq_question_header">
                  <h3>২০. ছাত্র-শিক্ষক-কর্মচারী সবার জন্য তথ্য সংরক্ষনে ডাটাবজ ও তার ব্যবস্থাপনা, সবাইকে বিনামূল্যে, দ্রুততা ও নির্ভরশীলতার সাথে সমস্ত প্রয়োজনীয় বার্তাপ্রদান, এবং অনলাইন ক্লাস কার্যক্রম পরিচালনা—সবকিছুর জন্য যদি আপনাকে একটি মাত্র অ্যাপ ব্যবহার করার সুবিধা দেয়া হয় তা ব্যবহারে আপনি কি আগ্রহী?</h3>
              </div>
              <ul class="sq_question_con twentysix">
                  <li class="answer">
                      <input type="checkbox" id="cb111">
                      <label for="cb111" class="recheck"><div class="tick_con tick_con26"><div class="tick"></div></div></label>
                      <p>হ্যাঁ</p>
                  </li>
                  <li class="answer">
                      <input type="checkbox" id="cb112">
                      <label for="cb112" class="recheck"><div class="tick_con tick_con26"><div class="tick"></div></div></label>
                      <p>না</p>
                  </li>
              </ul>
          </div>
          <!-- Question 27-->
          <div class="sq_question info_form">
              <input type="text" class="form_input" placeholder="Full Name" required>
              <input type="tel" class="form_input" placeholder="Mobile Number" required>
              <input type="email" class="form_input" placeholder="Email" required>
              <input type="text" class="form_input" placeholder="Institute Name" required>
              <input type="text" class="form_input" placeholder="Type your message ....." required>
              <button class="form_btn_final">Submit</button>
          </div>
          <!-- Question -->
          </form>
          <div class="sq_footer">
              <div class="btn_container_next">
                  <div class="next"><p>Next</p></div>
              </div>
          </div>
      </div>
  </div>
  </div>
</section>
<!--------------------------------------------------------------------
-----End:- Survey Section
--------------------------------------------------------------------->



<!--------------------------------------------------------------------
-----Start:- Tutorial Section
--------------------------------------------------------------------->
<section class="section_element" id="tutorial">
  <div class="section_header">
    <h1>Tutorial</h1>
  </div>

  <div class="tutorial_section_container">
    <div class="tutorial_container">
      <h1>Coming Soon</h1>
    </div>
  </div>

</section>
<!--------------------------------------------------------------------
-----End:- Tutorial Section
--------------------------------------------------------------------->

<section class="section_element" id="team">
  <div class="section_header">
    <h1>Our Team</h1>
  </div>

  <div class="tutorial_section_container">
    <div class="tutorial_container">
      <h1>Under Construction</h1>
    </div>
  </div>
</section>
<section class="section_element" id="contact">
  <div class="section_header">
    <h1>Contact Us</h1>
  </div>

  <div class="tutorial_section_container">
    <div class="tutorial_container">
      <h1>Under Construction</h1>
    </div>
  </div>
</section>


<!--------------------------------------------------------------------
-----Start:- Download Section
--------------------------------------------------------------------->
<section class="section_element" id="download">
  <div class="section_header">
    <h1>Download</h1>
  </div>

  <div class="download_section_container">
    <div class="download_container">
      <div class="dl_header">
        <h1>Download Our Free App</h1>
      </div>
      <div class="dl_btn_container">
        <a href="#">
          <i class="fab fa-apple"></i>
          <p>Apple Store</p>
        </a>
        <a href="#">
          <i class="fab fa-google-play"></i>
          <p>Play Store</p>
        </a>
      </div>
    </div>
  </div>

</section>
<!--------------------------------------------------------------------
-----End:- Download Section
--------------------------------------------------------------------->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script src=".{{asset('js/frontend/slide.js')}}"></script>
  <script src="{{asset('js/frontend/script.js')}}"></script>

</body>
</html>