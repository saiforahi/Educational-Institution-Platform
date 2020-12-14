const jobPostSlider = document.querySelectorAll('.career_slide');
const next = document.querySelector('.career_slide_next');
const prev = document.querySelector('.career_slide_prev');

const sliderContainer = document.querySelector('.career_slider');
const sliderHeight  = document.querySelector('.career_slide').clientHeight;
sliderContainer.style.height = `${sliderHeight}px`;

function goToslide(slider, slide){
    slider.forEach(function(s, i){
        s.style.transform = `translateX(${100 * (i - slide)}%)`;
    });
}

goToslide(jobPostSlider,0);

let curSlide = 0;
const maxSlide = jobPostSlider.length;

var sliding = setInterval(intervalFn, 3000);
function intervalFn(){
    if(curSlide === maxSlide - 1){
        curSlide = 0;
    }else{
        curSlide++
    };
    goToslide(jobPostSlider, curSlide);
}

function NextFn() {
    clearInterval(sliding);
    if(curSlide === maxSlide - 1){
        curSlide = 0;
    }else{
        curSlide++
    };
    goToslide(jobPostSlider, curSlide);
}

function PrevFn() {
    clearInterval(sliding);
    if(curSlide === 0){
        curSlide = maxSlide - 1;
    }else{
        curSlide--;
    };
    goToslide(jobPostSlider,curSlide);
}
next.addEventListener('click', NextFn);
prev.addEventListener('click', PrevFn);


//const slideBtn  = document.querySelectorAll('.career_slide');
// slideBtn.forEach(function(cur){
//     cur.addEventListener('click', (e)=>{
//         const modalTrigger = e.target;
//         const id = modalTrigger.getAttribute('id');
//         const modal = document.querySelector(`.${id}`);
//         if(modalTrigger.classList.contains('modalTrigger')){
//             clearInterval(sliding);
//             modal.classList.remove("out");
//             modal.classList.add('one');
//         }
//         modal.addEventListener('click', (e)=>{
//             if(e.target.classList.contains('modal-background')){
//                 modal.classList.add('out');
//             }
//             if(e.target.classList.contains('applyBtn')){
//                 modal.classList.add('out');
//                 document.querySelector('input').focus();
//             }
//         })
//     })
// });