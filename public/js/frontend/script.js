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
        const section = document.querySelector(id);
        const sectionTop = section.getBoundingClientRect();
        window.scrollTo({
            left: sectionTop.left + window.pageXOffset,
            top: sectionTop.top + window.pageYOffset - 120,
            behavior: 'smooth',
        });

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

function goToslide(slide){
    allNews.forEach(function(s, i){
        s.style.transform = `translateX(${100 * (i - slide)}%)`;
        s.style.opacity = (i === 0? 1: (i - slide)+1)
    });
    if((slide+1) === allNews.length){
        allNews[0].style.opacity = 0;
    }else{
        allNews[slide+1].style.opacity = 0;
    }
}

goToslide(0);
let curSlide = 0;
const maxSlide = allNews.length;

function newsNextFn() {
    if(curSlide === maxSlide - 1){
        curSlide = 0;
    }else{
        curSlide++
    };
    console.log(curSlide)
    goToslide(curSlide);
}

function newsPrevFn() {
    if(curSlide === 0){
        curSlide = maxSlide - 1;
    }else{
        curSlide--;
    };
    goToslide(curSlide);
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

// Jquery
$(document).ready(function(){

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