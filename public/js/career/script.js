const jobPostSlider = document.querySelectorAll('.career_slide');
const jobPostFromSlider = document.querySelectorAll('.career_form_slide');
const next = document.querySelector('.career_slide_next');
const prev = document.querySelector('.career_slide_prev');

function goToslide(slider, slide){
    slider.forEach(function(s, i){
        s.style.transform = `translateX(${100 * (i - slide)}%)`;
    });
}

goToslide(jobPostSlider,0);
goToslide(jobPostFromSlider,0);

let curSlide = 0;
const maxSlide = jobPostSlider.length;

function NextFn() {
    if(curSlide === maxSlide - 1){
        curSlide = 0;
    }else{
        curSlide++
    };
    goToslide(jobPostSlider, curSlide);
    goToslide(jobPostFromSlider, curSlide);
}

function PrevFn() {
    if(curSlide === 0){
        curSlide = maxSlide - 1;
    }else{
        curSlide--;
    };
    goToslide(jobPostSlider,curSlide);
    goToslide(jobPostFromSlider,curSlide);
}
next.addEventListener('click', NextFn);
prev.addEventListener('click', PrevFn);