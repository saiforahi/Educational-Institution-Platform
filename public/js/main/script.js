$(document).ready(function(){
    $('#pn').click(function(){
        $('#dp').slideToggle('slow');
    });
    $('#pi').click(function(){
        $('#dp').slideToggle('slow');
    });
    $('.dropdown_profile_mobile').slideUp('fast');
    $('#profile').click(function(){
        $('.dropdown_profile_mobile').slideToggle('slow');
    });
    $('.main_notification_container_mobile').slideUp('fast');
    $('#notification').click(function(){
        $('.main_notification_container_mobile').slideToggle('slow');
    });
    $('.dropdown_sub_mobile').slideUp('fast');
    $('#sub').click(function(){
        $('.dropdown_sub_mobile').slideToggle('slow');
    });
    $('.hamburger').click(function(){
        $( this ).css('display', 'none');
        $('.ham_back').css('display', 'block');
        $('.mobile_notification').css('left', '0px');
    });
    $('.ham_back').click(function(){
        $( this ).css('display', 'none');
        $('.hamburger').css('display', 'block');
        $('.mobile_notification').css('left', '-999999px');
    });
    $('#notification_desktop').click(function(){
            $('.desktop_dropdown_notification').slideToggle('slow');
    });
    $('#subToggle').click(function(){
        $('.sub_institute').slideToggle('slow');
    });
    $('#notification_left').click(function(){
        $('.desktop_dropdown_notification').slideToggle('slow');
    });
    $('#toggle_btn').click(function(){
        $('#list_con_h').slideToggle('slow');
    });
    $('#sub_a').click(function(){
        $('#sub_links').slideToggle('slow');
    });
    $('#notify_a').click(function(){
        $('.desktop_dropdown_notification').slideToggle('slow');
    });
});