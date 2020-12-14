// DOM Elements
var nav = document.querySelector('.main_menu_container');
var resposnsiveNav = document.querySelector('.menu');
var registration = document.querySelector('.registration');
var responsiveNavTrigger = document.querySelector('.ham');
var slider = document.querySelector('.header_slider_container');
var backToTop = document.querySelector('.back_to_top');

var allNews = document.querySelectorAll('.news_container');
var newsPrev = document.querySelector('#newsPrev');
var newsNext = document.querySelector('#newsNext');

// Navbar Scroll Effect
window.addEventListener('scroll', function(){
    var sliderHeight = (slider.offsetHeight)/2;
    if(window.scrollY >= sliderHeight){
        nav.classList.add('headerScroll');
        nav.style.height = "120px";
        resposnsiveNav.style.top = "120px";
        registration.style.top = '119px';
        backToTop.style.display = "block";
        if(document.documentElement.clientWidth <= 768){
            resposnsiveNav.style.top = "203px";
        }else{
            resposnsiveNav.style.top = "120px";
        }
    }else{
        nav.style.height = "150px";
        nav.classList.remove('headerScroll');
        registration.style.top = '149px';
        backToTop.style.display = "none";
        if(document.documentElement.clientWidth <= 768){
            resposnsiveNav.style.top = "233px";
        }else{
            resposnsiveNav.style.top = "150px";
        }
    }
})

// Responsive Nav
responsiveNavTrigger.addEventListener('click', function(){
    if(responsiveNavTrigger.classList.contains('active')){
        resposnsiveNav.style.right = '0';
        registration.style.right = '0';
    }else{
        resposnsiveNav.style.right = '-200%';
        registration.style.right = '-200%';
    }
});

// Whole page surfing animation Effect
document.querySelector('.menu').addEventListener('click', function (e) {
    e.preventDefault();
  
    // Matching strategy
    if (e.target.classList.contains('nav_link')) {

        if(responsiveNavTrigger.classList.contains('active')){
            responsiveNavTrigger.classList.remove('active')
            resposnsiveNav.style.right = '-200%';
            registration.style.right = '-200%';
        }

        const id = e.target.getAttribute('href');
        if(id == '#career'){
            window.open('https://www.enfome.info/career');
        }else{
            const section = document.querySelector(id);
            const sectionTop = section.getBoundingClientRect();
            window.scrollTo({
                left: sectionTop.left + window.pageXOffset,
                top: sectionTop.top + window.pageYOffset - 120,
                behavior: 'smooth',
            });
        }
    }

});

// Back to top
backToTop.addEventListener('click', () => {
    window.scrollTo({
        left: 0,
        top: 0,
        behavior: 'smooth',
      });
});

// News next previous 
const sliderContainer = document.querySelector('.news_slider_container');
const sliderHeight  = document.querySelector('.news_container').clientHeight;
sliderContainer.style.height = `${sliderHeight}px`;

// Slider Function
function goToslide(slider, slide){
    slider.forEach(function(s, i){
        s.style.transform = `translateX(${100 * (i - slide)}%)`;
        s.style.opacity = (i === 0? 1: (i - slide)+1)
    });
    if((slide+1) === slider.length){
        slider[0].style.opacity = 0;
    }else{
        slider[slide+1].style.opacity = 0;
    }
}


goToslide(allNews, 0);
let curSlide = 0;
const maxSlide = allNews.length;

var newsAutoSlide = setInterval(() => {
    if(curSlide === maxSlide - 1){
        curSlide = 0;
    }else{
        curSlide++
    };
    goToslide(allNews, curSlide);
}, 3000);

function newsNextFn() {
    if(curSlide === maxSlide - 1){
        curSlide = 0;
    }else{
        curSlide++
    };
    goToslide(allNews, curSlide);
    clearInterval(newsAutoSlide);
}

function newsPrevFn() {
    if(curSlide === 0){
        curSlide = maxSlide - 1;
    }else{
        curSlide--;
    };
    goToslide(allNews, curSlide);
    clearInterval(newsAutoSlide);
}
newsNext.addEventListener('click', newsNextFn);
newsPrev.addEventListener('click', newsPrevFn);

// Survey
const allQuestionArray = document.querySelectorAll('.sq_question');
const nextBtn = document.querySelector('.btn_container_next');
var questionCounter = 1;

function tick(count){
    var activeQuestionInput = document.querySelectorAll(`.counter-${count} input`);
    var activeQuestionInputTrigger = document.querySelectorAll(`.counter-${count} .tick_con`);
    activeQuestionInput.forEach(function(curInput){
        curInput.addEventListener('click', function(){
            if(curInput.checked == true){
                activeQuestionInput.forEach(function(curInput){
                    curInput.disabled = true;
                });
                nextBtn.addEventListener('click', surveyQuesNext);
            }else{
                nextBtn.removeEventListener('click', surveyQuesNext);
            }
        })
    })
    activeQuestionInputTrigger.forEach(function(curTrigger){
        curTrigger.addEventListener('click', function(){
            activeQuestionInput.forEach(function(curInput){
                curInput.disabled = false;
            });
        })
    })

}tick(questionCounter)

function surveyQuesNext(){
    nextBtn.removeEventListener('click', surveyQuesNext);
    if(questionCounter === allQuestionArray.length - 1){
        questionCounter = 1;
    }else{
        questionCounter++;
    }
    tick(questionCounter);
    $('.btn_container_prev').slideDown('slow');
    const currentSurveyQ = document.querySelector('.activeSurveyQuestion');
    const nextSurveyQ = currentSurveyQ.nextElementSibling;
    currentSurveyQ.classList.remove('activeSurveyQuestion');
    nextSurveyQ.classList.add('activeSurveyQuestion');
}

// Team 
const teamSlides = document.querySelectorAll('.team_card_slide');
const teamNext = document.querySelector('.team_next_btn');
const teamPrev = document.querySelector('.team_prev_btn');

goToslide(teamSlides, 0);
let curTeamSlide = 0;
const maxTeamSlide = teamSlides.length;

var teamAutoSlide = setInterval(() => {
    if(curTeamSlide === maxTeamSlide - 1){
        curTeamSlide = 0;
    }else{
        curTeamSlide++
    };
    goToslide(teamSlides, curTeamSlide);
}, 3000);

function teamNextFn() {
    if(curTeamSlide === maxTeamSlide - 1){
        curTeamSlide = 0;
    }else{
        curTeamSlide++
    };
    goToslide(teamSlides, curTeamSlide);
    clearInterval(teamAutoSlide);
}

function teamPrevFn() {
    if(curTeamSlide === 0){
        curTeamSlide = maxTeamSlide - 1;
    }else{
        curTeamSlide--;
    };
    goToslide(teamSlides, curTeamSlide);
    clearInterval(teamAutoSlide);
}
teamNext.addEventListener('click', teamNextFn);
teamPrev.addEventListener('click', teamPrevFn);


// Jquery
$(document).ready(function(){

    // Header Slider
    var $slider = $(".slider"),
        $slideBGs = $(".slide__bg"),
        diff = 0,
        curSlide = 0,
        numOfSlides = $(".slide").length-1,
        animating = false,
        animTime = 500,
        autoSlideTimeout,
        autoSlideDelay = 6000,
        $pagination = $(".slider-pagi");
    
    function createBullets() {
      for (var i = 0; i < numOfSlides+1; i++) {
        var $li = $("<li class='slider-pagi__elem'></li>");
        $li.addClass("slider-pagi__elem-"+i).data("page", i);
        if (!i) $li.addClass("active");
        $pagination.append($li);
      }
    };
    
    createBullets();
    
    function manageControls() {
      $(".slider-control").removeClass("inactive");
      if (!curSlide) $(".slider-control.left").addClass("inactive");
      if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
    };
    
    function autoSlide() {
      autoSlideTimeout = setTimeout(function() {
        curSlide++;
        if (curSlide > numOfSlides) curSlide = 0;
        changeSlides();
      }, autoSlideDelay);
    };
    
    autoSlide();
    
    function changeSlides(instant) {
      if (!instant) {
        animating = true;
        manageControls();
        $slider.addClass("animating");
        $slider.css("top");
        $(".slide").removeClass("active");
        $(".slide-"+curSlide).addClass("active");
        setTimeout(function() {
          $slider.removeClass("animating");
          animating = false;
        }, animTime);
      }
      window.clearTimeout(autoSlideTimeout);
      $(".slider-pagi__elem").removeClass("active");
      $(".slider-pagi__elem-"+curSlide).addClass("active");
      $slider.css("transform", "translate3d("+ -curSlide*100 +"%,0,0)");
      $slideBGs.css("transform", "translate3d("+ curSlide*50 +"%,0,0)");
      diff = 0;
      autoSlide();
    }
  
    function navigateLeft() {
      if (animating) return;
      if (curSlide > 0) curSlide--;
      changeSlides();
    }
  
    function navigateRight() {
      if (animating) return;
      if (curSlide < numOfSlides) curSlide++;
      changeSlides();
    }
  
    $(document).on("mousedown touchstart", ".slider", function(e) {
      if (animating) return;
      window.clearTimeout(autoSlideTimeout);
      var startX = e.pageX || e.originalEvent.touches[0].pageX,
          winW = $(window).width();
      diff = 0;
      
      $(document).on("mousemove touchmove", function(e) {
        var x = e.pageX || e.originalEvent.touches[0].pageX;
        diff = (startX - x) / winW * 70;
        if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
        $slider.css("transform", "translate3d("+ (-curSlide*100 - diff) +"%,0,0)");
        $slideBGs.css("transform", "translate3d("+ (curSlide*50 + diff/2) +"%,0,0)");
      });
    });
    
    $(document).on("mouseup touchend", function(e) {
      $(document).off("mousemove touchmove");
      if (animating) return;
      if (!diff) {
        changeSlides(true);
        return;
      }
      if (diff > -8 && diff < 8) {
        changeSlides();
        return;
      }
      if (diff <= -8) {
        navigateLeft();
      }
      if (diff >= 8) {
        navigateRight();
      }
    });
    
    $(document).on("click", ".slider-control", function() {
      if ($(this).hasClass("left")) {
        navigateLeft();
      } else {
        navigateRight();
      }
    });
    
    $(document).on("click", ".slider-pagi__elem", function() {
      curSlide = $(this).data("page");
      changeSlides();
    });

    // Event Sliding effect
    $('.event_des_trigger').click(function(){
        $(this).siblings().slideToggle('slow');
        $(this).toggleClass('activeEvent');
        if($(this).hasClass('activeEvent')){
            $(this).html('<p>Close Event Details</p><i class="fas fa-minus-circle"></i>');
        }else{
            $(this).html('<p>View Event Details</p><i class="fas fa-plus-circle"></i>');
        }
    });

});