<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/frontend/slider.css')}}">
</head>
<body>
    <!--Slider-->
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
                <a class="slide__text-link"><i class="fab fa-apple"></i></i></a>
                <a class="slide__text-link"><i class="fab fa-google-play"></i></a>
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
                <a class="slide__text-link"><i class="fab fa-apple"></i></i></a>
                <a class="slide__text-link"><i class="fab fa-google-play"></i></a>
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
                <a class="slide__text-link"><i class="fab fa-apple"></i></i></a>
                <a class="slide__text-link"><i class="fab fa-google-play"></i></a>
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
                <h2 class="slide__text-heading">EnfoMe</h2>
                <p class="slide__text-desc">Be a part of the Future</p>
                <p class="slide__text-desc">Download our free mobile app today</p>
                <a class="slide__text-link"><i class="fab fa-apple"></i></i></a>
                <a class="slide__text-link"><i class="fab fa-google-play"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!--Slider End-->
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{asset('js/frontend/slider.js')}}"></script>
</body>
</html>