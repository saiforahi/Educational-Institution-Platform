$(document).ready(function(){

$('.tick_con1').click(function(){
    $('.ins_reg').slideToggle();
    $('.cb2_con').toggleClass('display');
    $('.cb3_con').toggleClass('display');
})
$('.tick_con2').click(function(){
    $('.stu_reg').slideToggle();
    $('.cb1_con').toggleClass('display');
    $('.cb3_con').toggleClass('display');
})
$('.tick_con3').click(function(){
    $('.gur_reg').slideToggle();
    $('.cb1_con').toggleClass('display');
    $('.cb2_con').toggleClass('display');
})

})