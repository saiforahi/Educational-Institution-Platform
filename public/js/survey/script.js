$(document).ready(function(){

    // Separate input and tick selction
    var inputSerialone = $('.one li input');
    var tickSerialone = $('.tick_con1');
    var inputSerialtwo = $('.two li input');
    var tickSerialtwo = $('.tick_con2');
    var inputSerialthree = $('.three li input');
    var tickSerialthree = $('.tick_con3');
    var inputSerialfour = $('.four li input');
    var tickSerialfour = $('.tick_con4');
    var inputSerialfive = $('.five li input');
    var tickSerialfive = $('.tick_con5');
    var inputSerialsix = $('.six li input');
    var tickSerialsix = $('.tick_con6');
    var inputSerialseven = $('.seven li input');
    var tickSerialseven = $('.tick_con7');
    var inputSerialeight = $('.eight li input');
    var tickSerialeight = $('.tick_con8');
    var inputSerialnine = $('.nine li input');
    var tickSerialnine = $('.tick_con9');
    var inputSerialten = $('.ten li input');
    var tickSerialten = $('.tick_con10');
    var inputSerialeleven = $('.eleven li input');
    var tickSerialeleven = $('.tick_con11');
    var inputSerialtwelve = $('.twelve li input');
    var tickSerialtwelve = $('.tick_con12');
    var inputSerialthirteen = $('.thirteen li input');
    var tickSerialthirteen = $('.tick_con13');
    var inputSerialfourteen = $('.fourteen li input');
    var tickSerialfourteen = $('.tick_con14');
    var inputSerialfifteen = $('.fifteen li input');
    var tickSerialfifteen = $('.tick_con15');
    var inputSerialsixteen = $('.sixteen li input');
    var tickSerialsixteen = $('.tick_con16');
    var inputSerialseventeen = $('.seventeen li input');
    var tickSerialseventeen = $('.tick_con17');
    var inputSerialeighteen = $('.eighteen li input');
    var tickSerialeighteen = $('.tick_con18');
    var inputSerialnineteen = $('.nineteen li input');
    var tickSerialnineteen = $('.tick_con19');
    var inputSerialtwenty = $('.twenty li input');
    var tickSerialtwenty = $('.tick_con20');
    var inputSerialtwentyone = $('.twentyone li input');
    var tickSerialtwentyone = $('.tick_con21');
    var inputSerialtwentytwo = $('.twentytwo li input');
    var tickSerialtwentytwo = $('.tick_con22');
    var inputSerialtwentythree = $('.twentythree li input');
    var tickSerialtwentythree = $('.tick_con23');
    var inputSerialtwentyfour = $('.twentyfour li input');
    var tickSerialtwentyfour = $('.tick_con24');
    var inputSerialtwentyfive = $('.twentyfive li input');
    var tickSerialtwentyfive = $('.tick_con25');
    var inputSerialtwentysix = $('.twentysix li input');
    var tickSerialtwentysix = $('.tick_con26');

    // Tick untick function
    function tickUntick(inputSection, tickSection){
        inputSection.each(function() {
                $(inputSection).on('click', function() {
                    if( $(this).is(":checked")) {
                        $(inputSection).attr("disabled", "disabled");
                    }
                })
        });
        tickSection.each(function() {
                var tick;
                tick = $(this);
                $(tick).on('click', function() {
                    if( $(inputSection).attr("disabled", "disabled") ) {
                        $(inputSection).removeAttr("disabled");
                    }
                })
        });
    }

    // Seperate tick untick function call
    tickUntick(inputSerialone, tickSerialone);
    tickUntick(inputSerialtwo, tickSerialtwo);
    tickUntick(inputSerialthree, tickSerialthree);
    tickUntick(inputSerialfour, tickSerialfour);
    tickUntick(inputSerialfive, tickSerialfive);
    tickUntick(inputSerialsix, tickSerialsix);
    tickUntick(inputSerialseven, tickSerialseven);
    tickUntick(inputSerialeight, tickSerialeight);
    tickUntick(inputSerialnine, tickSerialnine);
    tickUntick(inputSerialten, tickSerialten);
    tickUntick(inputSerialeleven, tickSerialeleven);
    tickUntick(inputSerialtwelve, tickSerialtwelve);
    tickUntick(inputSerialthirteen, tickSerialthirteen);
    tickUntick(inputSerialfourteen, tickSerialfourteen);
    tickUntick(inputSerialfifteen, tickSerialfifteen);
    tickUntick(inputSerialsixteen, tickSerialsixteen);
    tickUntick(inputSerialseventeen, tickSerialseventeen);
    tickUntick(inputSerialeighteen, tickSerialeighteen);
    tickUntick(inputSerialnineteen, tickSerialnineteen);
    tickUntick(inputSerialtwenty, tickSerialtwenty);
    tickUntick(inputSerialtwentyone, tickSerialtwentyone);
    tickUntick(inputSerialtwentytwo, tickSerialtwentytwo);
    tickUntick(inputSerialtwentythree, tickSerialtwentythree);
    tickUntick(inputSerialtwentyfour, tickSerialtwentyfour);
    tickUntick(inputSerialtwentyfive, tickSerialtwentyfive);
    tickUntick(inputSerialtwentysix, tickSerialtwentysix);

    // Next Previous
    $('#active_first').slideDown('slow');
    var questions = $('.sq_question');
    var questionOne = questions[0];
    var questionTwo = questions[1];
    var questionThree = questions[2];
    var questionFour = questions[3];
    var questionFive = questions[4];
    var questionSix = questions[5];
    var questionSeven = questions[6];
    var questionEight = questions[7];
    var questionNine = questions[8];
    var questionTen = questions[9];
    var questionEleven = questions[10];
    var questionTwelve = questions[11];
    var questionThirteen = questions[12];
    var questionFourteen = questions[13];
    var questionFifteen = questions[14];
    var questionSixteen = questions[15];
    var questionSeventeen = questions[16];
    var questionEighteen = questions[17];
    var questionNineteen = questions[18];
    var questionTwenty = questions[19];
    var questionTwentyOne = questions[20];
    var questionTwentyTwo = questions[21];
    var questionTwentyThree = questions[22];
    var questionTwentyFour = questions[23];
    var questionTwentyFive = questions[24];
    var questionTwentySix = questions[25];
    var questionTwentySeven = questions[26];

    $('.btn_container_next').on('click', function(){
        if(questionOne.hasAttribute("id") && $(inputSerialone).is(":checked")){
            $('.btn_container_prev').slideDown('slow');
            $('#active_first').slideUp('fast');
            questionOne.removeAttribute('id');
            questionTwo.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwo.setAttribute('id', 'active_first');
            });
        }else if(questionTwo.hasAttribute("id") && $(inputSerialtwo).is(":checked")){
            $('#active_first').slideUp('fast');
            questionTwo.removeAttribute('id');
            questionThree.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionThree.setAttribute('id', 'active_first');
            });
        }else if(questionThree.hasAttribute("id") && $(inputSerialthree).is(":checked")){
            $('#active_first').slideUp('fast');
            questionThree.removeAttribute('id');
            questionFour.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionFour.setAttribute('id', 'active_first');
            });
        }else if(questionFour.hasAttribute("id") && $(inputSerialfour).is(":checked")){
            $('#active_first').slideUp('fast');
            questionFour.removeAttribute('id');
            questionFive.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionFive.setAttribute('id', 'active_first');
            });
        }else if(questionFive.hasAttribute("id") && $(inputSerialfive).is(":checked")){
            $('#active_first').slideUp('fast');
            questionFive.removeAttribute('id');
            questionSix.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionSix.setAttribute('id', 'active_first');
            });
        }else if(questionSix.hasAttribute("id") && $(inputSerialsix).is(":checked")){
            $('#active_first').slideUp('fast');
            questionSix.removeAttribute('id');
            questionSeven.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionSeven.setAttribute('id', 'active_first');
            });
        }else if(questionSeven.hasAttribute("id") && $(inputSerialseven).is(":checked")){
            $('#active_first').slideUp('fast');
            questionSeven.removeAttribute('id');
            questionEight.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionEight.setAttribute('id', 'active_first');
            });
        }else if(questionEight.hasAttribute("id") && $(inputSerialeight).is(":checked")){
            $('#active_first').slideUp('fast');
            questionEight.removeAttribute('id');
            questionNine.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionNine.setAttribute('id', 'active_first');
            });
        }else if(questionNine.hasAttribute("id") && $(inputSerialnine).is(":checked")){
            $('#active_first').slideUp('fast');
            questionNine.removeAttribute('id');
            questionTen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTen.setAttribute('id', 'active_first');
            });
        }else if(questionTen.hasAttribute("id") && $(inputSerialten).is(":checked")){
            $('#active_first').slideUp('fast');
            questionTen.removeAttribute('id');
            questionEleven.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionEleven.setAttribute('id', 'active_first');
            });
        }else if(questionEleven.hasAttribute("id") && $(inputSerialeleven).is(":checked")){
            $('#active_first').slideUp('fast');
            questionEleven.removeAttribute('id');
            questionTwelve.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwelve.setAttribute('id', 'active_first');
            });
        }else if(questionTwelve.hasAttribute("id") && $(inputSerialtwelve).is(":checked")){
            $('#active_first').slideUp('fast');
            questionTwelve.removeAttribute('id');
            questionThirteen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionThirteen.setAttribute('id', 'active_first');
            });
        }else if(questionThirteen.hasAttribute("id") && $(inputSerialthirteen).is(":checked")){
            $('#active_first').slideUp('fast');
            questionThirteen.removeAttribute('id');
            questionFourteen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionFourteen.setAttribute('id', 'active_first');
            });
        }else if(questionFourteen.hasAttribute("id") && $(inputSerialfourteen).is(":checked")){
            $('#active_first').slideUp('fast');
            questionFourteen.removeAttribute('id');
            questionFifteen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionFifteen.setAttribute('id', 'active_first');
            });
        }else if(questionFifteen.hasAttribute("id") && $(inputSerialfifteen).is(":checked")){
            $('#active_first').slideUp('fast');
            questionFifteen.removeAttribute('id');
            questionSixteen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionSixteen.setAttribute('id', 'active_first');
            });
        }else if(questionSixteen.hasAttribute("id") && $(inputSerialsixteen).is(":checked")){
            $('#active_first').slideUp('fast');
            questionSixteen.removeAttribute('id');
            questionSeventeen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionSeventeen.setAttribute('id', 'active_first');
            });
        }else if(questionSeventeen.hasAttribute("id") && $(inputSerialseventeen).is(":checked")){
            $('#active_first').slideUp('fast');
            questionSeventeen.removeAttribute('id');
            questionEighteen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionEighteen.setAttribute('id', 'active_first');
            });
        }else if(questionEighteen.hasAttribute("id") && $(inputSerialeighteen).is(":checked")){
            $('#active_first').slideUp('fast');
            questionEighteen.removeAttribute('id');
            questionNineteen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionNineteen.setAttribute('id', 'active_first');
            });
        }else if(questionNineteen.hasAttribute("id") && $(inputSerialnineteen).is(":checked")){
            $('#active_first').slideUp('fast');
            questionNineteen.removeAttribute('id');
            questionTwenty.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwenty.setAttribute('id', 'active_first');
            });
        }else if(questionTwenty.hasAttribute("id") && $(inputSerialtwenty).is(":checked")){
            $('#active_first').slideUp('fast');
            questionTwenty.removeAttribute('id');
            questionTwentyOne.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentyOne.setAttribute('id', 'active_first');
            });
        }else if(questionTwentyOne.hasAttribute("id") && $(inputSerialtwentyone).is(":checked")){
            $('#active_first').slideUp('fast');
            questionTwentyOne.removeAttribute('id');
            questionTwentyTwo.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentyTwo.setAttribute('id', 'active_first');
            });
        }else if(questionTwentyTwo.hasAttribute("id") && $(inputSerialtwentytwo).is(":checked")){
            $('#active_first').slideUp('fast');
            questionTwentyTwo.removeAttribute('id');
            questionTwentyThree.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentyThree.setAttribute('id', 'active_first');
            });
        }else if(questionTwentyThree.hasAttribute("id") && $(inputSerialtwentythree).is(":checked")){
            $('#active_first').slideUp('fast');
            questionTwentyThree.removeAttribute('id');
            questionTwentyFour.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentyFour.setAttribute('id', 'active_first');
            });
        }else if(questionTwentyFour.hasAttribute("id") && $(inputSerialtwentyfour).is(":checked")){
            $('#active_first').slideUp('fast');
            questionTwentyFour.removeAttribute('id');
            questionTwentyFive.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentyFive.setAttribute('id', 'active_first');
            });
        }else if(questionTwentyFive.hasAttribute("id") && $(inputSerialtwentyfive).is(":checked")){
            $('#active_first').slideUp('fast');
            questionTwentyFive.removeAttribute('id');
            questionTwentySix.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentySix.setAttribute('id', 'active_first');
            });
        }else if(questionTwentySix.hasAttribute("id") && $(inputSerialtwentysix).is(":checked")){
            $('#active_first').slideUp('fast');
            questionTwentySix.removeAttribute('id');
            questionTwentySeven.style.display = 'flex';
            questionTwentySeven.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentySeven.setAttribute('id', 'active_first');
            });
            $('.btn_container_next').slideUp('fast');
        }
    });
    $('.btn_container_prev').on('click', function(){
        if(questionTwo.hasAttribute("id")){
            $('.btn_container_prev').slideUp('fast');
            $('#active_first').slideUp('fast');
            questionTwo.removeAttribute('id');
            questionOne.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionOne.setAttribute('id', 'active_first');
            });
        }else if(questionThree.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionThree.removeAttribute('id');
            questionTwo.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwo.setAttribute('id', 'active_first');
            });
        }else if(questionFour.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionFour.removeAttribute('id');
            questionThree.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionThree.setAttribute('id', 'active_first');
            });
        }else if(questionFive.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionFive.removeAttribute('id');
            questionFour.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionFour.setAttribute('id', 'active_first');
            });
        }else if(questionSix.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionSix.removeAttribute('id');
            questionFive.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionFive.setAttribute('id', 'active_first');
            });
        }else if(questionSeven.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionSeven.removeAttribute('id');
            questionSix.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionSix.setAttribute('id', 'active_first');
            });
        }else if(questionEight.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionEight.removeAttribute('id');
            questionSeven.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionSeven.setAttribute('id', 'active_first');
            });
        }else if(questionNine.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionNine.removeAttribute('id');
            questionEight.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionEight.setAttribute('id', 'active_first');
            });
        }else if(questionTen.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionTen.removeAttribute('id');
            questionNine.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionNine.setAttribute('id', 'active_first');
            });
        }else if(questionEleven.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionEleven.removeAttribute('id');
            questionTen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTen.setAttribute('id', 'active_first');
            });
        }else if(questionTwelve.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionTwelve.removeAttribute('id');
            questionEleven.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionEleven.setAttribute('id', 'active_first');
            });
        }else if(questionThirteen.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionThirteen.removeAttribute('id');
            questionTwelve.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwelve.setAttribute('id', 'active_first');
            });
        }else if(questionFourteen.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionFourteen.removeAttribute('id');
            questionThirteen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionThirteen.setAttribute('id', 'active_first');
            });
        }else if(questionFifteen.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionFifteen.removeAttribute('id');
            questionFourteen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionFourteen.setAttribute('id', 'active_first');
            });
        }else if(questionSixteen.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionSixteen.removeAttribute('id');
            questionFifteen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionFifteen.setAttribute('id', 'active_first');
            });
        }else if(questionSeventeen.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionSeventeen.removeAttribute('id');
            questionSixteen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionSixteen.setAttribute('id', 'active_first');
            });
        }else if(questionEighteen.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionEighteen.removeAttribute('id');
            questionSeventeen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionSeventeen.setAttribute('id', 'active_first');
            });
        }else if(questionNineteen.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionNineteen.removeAttribute('id');
            questionEighteen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionEighteen.setAttribute('id', 'active_first');
            });
        }else if(questionTwenty.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionTwenty.removeAttribute('id');
            questionNineteen.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionNineteen.setAttribute('id', 'active_first');
            });
        }else if(questionTwentyOne.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionTwentyOne.removeAttribute('id');
            questionTwenty.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwenty.setAttribute('id', 'active_first');
            });
        }else if(questionTwentyTwo.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionTwentyTwo.removeAttribute('id');
            questionTwentyOne.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentyOne.setAttribute('id', 'active_first');
            });
        }else if(questionTwentyThree.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionTwentyThree.removeAttribute('id');
            questionTwentyTwo.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentyTwo.setAttribute('id', 'active_first');
            });
        }else if(questionTwentyFour.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionTwentyFour.removeAttribute('id');
            questionTwentyThree.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentyThree.setAttribute('id', 'active_first');
            });
        }else if(questionTwentyFive.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionTwentyFive.removeAttribute('id');
            questionTwentyFour.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentyFour.setAttribute('id', 'active_first');
            });
        }else if(questionTwentySix.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionTwentySix.removeAttribute('id');
            questionTwentyFive.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentyFive.setAttribute('id', 'active_first');
            });
        }else if(questionTwentySeven.hasAttribute("id")){
            $('#active_first').slideUp('fast');
            questionTwentySeven.removeAttribute('id');
            questionTwentySix.setAttribute('id', 'active');
            $('#active').slideDown('fast', function(){
                questionTwentySix.setAttribute('id', 'active_first');
            });
            $('.btn_container_next').slideDown('fast');
        }
    });
    



});

/*

    var t = $($('.sq_question_con')[0]);
    var y = t.children().children();
    console.log(y);
function tickUntick(con, tickCon){
    con.each(function() {
        var item;
        item = $(this);
        $(item).on('click', function() {
            if( $('.one li input:checked').length > 0 ) {
                con.attr("disabled", "disabled");
            }
        })
    });
    tickCon.each(function() {
        var tick;
        tick = $(this);
        $(tick).on('click', function() {
            console.log(con);
            if( con.attr("disabled", "disabled") ) {
                con.removeAttr("disabled");
            }
        })
    });
}
tickUntick(a, c);
tickUntick(b, d);
let tick = document.getElementsByClassName('.tick');
let box = document.getElementsByTagName('input[name="ckbox"]');
for(i = 0; i < tick.length; i++){
    if(tick[i].style.transform === 'scale(1)'){
        tick[i].on('click', function(){
            box[i].removeAttribute("disabled");
        
    })
}
}
console.log(tick)
function(){
                if(questions[1].hasAttribute("id")){
                    $('#btn_next').on('click', function(){
                        var questionTwo = questions[1];
                        questionTwo.removeAttribute('id');
                        $('#active').slideUp('slow' , function(){
                            questionThree.setAttribute('id', 'active');
                            $('#active').slideDown('slow');
                        });
                    });
                }
            }
if(questions[1].hasAttribute("id")){
    $('#btn_next_two').on('click', function(){
        $(this).attr('id', 'btn_next_three');
        $('#active').slideUp('slow', function(){
            questionTwo.removeAttribute('id');
            questionThree.setAttribute('id', 'active');
            $('#active').slideDown('slow');
        });
    });
    
}
$('#btn_next_one').on('click', function(){
        $(this).attr('id', 'btn_next_two');
        $('#active_first').slideUp('slow');
        questionTwo.removeAttribute('id');
        questionThree.setAttribute('id', 'active');
        $('#active').slideDown('slow', function(){
            questionThree.setAttribute('id', 'active_first');
        });
    });
var questions = $('.sq_question');
var questionOne = questions[0];
console.log(questionOne) 
*/
