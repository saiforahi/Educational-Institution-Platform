// Line 1 - 365 is for the menu sliding.....
(function ($) {

    $.fn.menu = function (options) {

        var defaults = $.extend({
            visibleItems: 6,
            itemsToScroll: 1,
            animationSpeed: 300,
            infinite: true,
            navigationTargetSelector: null,
            autoPlay: {
                enable: false,
                interval: 5000,
                pauseOnHover: true
            },
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:769,
                    visibleItems: 3,
                    itemsToScroll: 2
                }, 
                landscape: { 
                    changePoint:0,
                    visibleItems: 2,
                    itemsToScroll: 2
                },
                tablet: { 
                    changePoint:0,
                    visibleItems: 3,
                    itemsToScroll: 3
                }
            },
            loaded: function(){ },
            before: function(){ },
            after: function(){ },
            resize: function(){ }
        }, options);
               
        
        var object = $(this);
        var settings = $.extend(defaults, options);        
        var itemsWidth;
        var canNavigate = true; 
        var itemCount; 
        var itemsVisible = settings.visibleItems; 
        var itemsToScroll = settings.itemsToScroll;
        var responsivePoints = [];
        var resizeTimeout;
        var autoPlayInterval;        
          
        
        var methods = {
                
            init: function() {
                return this.each(function () {
                    methods.appendHTML();
                    methods.setEventHandlers();                  
                    methods.initializeItems();                    
                });
            },           
            
            initializeItems: function() {
                
                var obj = settings.responsiveBreakpoints;
                for(var i in obj) { responsivePoints.push(obj[i]); }
                responsivePoints.sort(function(a, b) { return a.changePoint - b.changePoint; });
                var childSet = object.children();
                itemsWidth = methods.getCurrentItemWidth();
                itemCount = childSet.length;
                childSet.width(itemsWidth);
                if(settings.infinite) {
                    methods.offsetItemsToBeginning(Math.floor((childSet.length / 2)+1)); 
                    object.css({
                        'left': -itemsWidth * Math.floor((childSet.length / 2)+1)
                    }); 
                }
                $(window).trigger('resize');              
                object.fadeIn();
                settings.loaded.call(this, object);
                
            },          
            
            appendHTML: function() {
                
                object.addClass("center-menu-ul");
                object.find("li").addClass("center-menu-item");
                
                if(settings.navigationTargetSelector && $(settings.navigationTargetSelector).length > 0) {
                    $("<div class='center-menu-nav-left'><span><i class='fas fa-arrow-circle-left'></i></span></div><div class='center-menu-nav-right'><span><i class='fas fa-arrow-circle-right'></i></span></div>").appendTo(settings.navigationTargetSelector);
                } else {
                    settings.navigationTargetSelector = object.parent();
                    $("<div class='center-menu-nav-left'><span><i class='fas fa-arrow-circle-left'></i></span></div><div class='center-menu-nav-right'><span><i class='fas fa-arrow-circle-right'></i></span></div>").insertAfter(object);    
                }
                    
                if(settings.infinite) {    
                    var childSet = object.children();
                    var cloneContentBefore = childSet.clone();
                    var cloneContentAfter = childSet.clone();
                    object.prepend(cloneContentBefore);
                    object.append(cloneContentAfter);
                }
                
            },
            setEventHandlers: function() {
                var self = this;
                var childSet = object.children();
                
                $(window).on("resize", function(event){
                    canNavigate = false;
                    clearTimeout(resizeTimeout);
                    resizeTimeout = setTimeout(function(){
                        canNavigate = true;
                        methods.calculateDisplay();
                        itemsWidth = methods.getCurrentItemWidth();
                        childSet.width(itemsWidth);
                        
                        if(settings.infinite) {
                            object.css({
                                'left': -itemsWidth * Math.floor((childSet.length / 2)+1)
                            });        
                        } else {
                            methods.clearDisabled();
                            $(settings.navigationTargetSelector).find(".center-menu-nav-left").addClass('disabled');
                            object.css({
                                'left': 0
                            });
                        }
                        
                        settings.resize.call(self, object);

                    }, 100);
                    
                });                    
                
                $(settings.navigationTargetSelector).find(".center-menu-nav-left").on("click", function (event) {
                    methods.scroll(true);
                });
                
                $(settings.navigationTargetSelector).find(".center-menu-nav-right").on("click", function (event) {
                    methods.scroll(false);
                });
                
                if(settings.autoPlay.enable) {

                    methods.setAutoplayInterval();

                    if (settings.autoPlay.pauseOnHover === true) {
                        object.on({
                            mouseenter : function() {
                                canNavigate = false;
                            },
                            mouseleave : function() {
                                canNavigate = true;
                            }
                        });        
                    }            
                    
                }
                
                object[0].addEventListener('touchstart', methods.touchHandler.handleTouchStart, false);        
                object[0].addEventListener('touchmove', methods.touchHandler.handleTouchMove, false);                
                
            },                 
            
            calculateDisplay: function() {
                var contentWidth = $('html').width();
                var largestCustom = responsivePoints[responsivePoints.length-1].changePoint; 
                
                for(var i in responsivePoints) {
                    
                    if(contentWidth >= largestCustom) { 
                        itemsVisible = settings.visibleItems;
                        itemsToScroll = settings.itemsToScroll;
                        break;
                    }
                    else { 
                    
                        if(contentWidth < responsivePoints[i].changePoint) {
                            itemsVisible = responsivePoints[i].visibleItems;
                            itemsToScroll = responsivePoints[i].itemsToScroll;
                            break;
                        }
                        else {
                            continue;
                        }
                    }
                }
                
            },                             
            
            scroll: function(reverse) {

                if(typeof reverse === 'undefined') { reverse = true }

                if(canNavigate == true) {
                    canNavigate = false;
                    settings.before.call(this, object);
                    itemsWidth = methods.getCurrentItemWidth();
                    
                    if(settings.autoPlay.enable) {
                        clearInterval(autoPlayInterval);
                    }
                    
                    if(!settings.infinite) {
                        
                        var scrollDistance = itemsWidth * itemsToScroll;
                        
                        if(reverse) {                            
                            object.animate({
                                'left': methods.calculateNonInfiniteLeftScroll(scrollDistance)
                            }, settings.animationSpeed, function(){
                                settings.after.call(this, object);
                                canNavigate = true;
                            });                            
                            
                        } else {
                            object.animate({
                                'left': methods.calculateNonInfiniteRightScroll(scrollDistance)
                            },settings.animationSpeed, function(){
                                settings.after.call(this, object);
                                canNavigate = true;
                            });                                    
                        }
                        
                        
                        
                    } else {                    
                        object.animate({
                            'left' : reverse ? "+=" + itemsWidth * itemsToScroll : "-=" + itemsWidth * itemsToScroll
                        }, settings.animationSpeed, function() {
                            settings.after.call(this, object);
                            canNavigate = true;
                            
                            if(reverse) { 
                                methods.offsetItemsToBeginning(itemsToScroll); 
                            } else {
                                methods.offsetItemsToEnd(itemsToScroll);
                            }
                            methods.offsetSliderPosition(reverse); 
                            
                        });
                    }
                    
                    if(settings.autoPlay.enable) {
                        methods.setAutoplayInterval();
                    }
                    
                }
            },
            
            touchHandler: {

                xDown: null,
                yDown: null,
                handleTouchStart: function(evt) {                                         
                    this.xDown = evt.touches[0].clientX;                                      
                    this.yDown = evt.touches[0].clientY;
                }, 
                handleTouchMove: function (evt) {
                    if (!this.xDown || !this.yDown) {
                        return;
                    }

                    var xUp = evt.touches[0].clientX;                                    
                    var yUp = evt.touches[0].clientY;

                    var xDiff = this.xDown - xUp;
                    var yDiff = this.yDown - yUp;
                    if (Math.abs( xDiff ) > 0) {
                        if ( xDiff > 0 ) {
                            methods.scroll(false);
                        } else {
                            methods.scroll(true);
                        }                       
                    }
                    this.xDown = null;
                    this.yDown = null;
                    canNavigate = true;
                }
            },            
            
            getCurrentItemWidth: function() {
                return (object.parent().width())/itemsVisible;
            },            
            
            offsetItemsToBeginning: function(number) {
                if(typeof number === 'undefined') { number = 1 }
                for(var i = 0; i < number; i++) {
                    object.children().last().insertBefore(object.children().first());
                }    
            },                
            
            offsetItemsToEnd: function(number) {
                if(typeof number === 'undefined') { number = 1 }
                for(var i = 0; i < number; i++) {
                    object.children().first().insertAfter(object.children().last()); 
                }
            },            
            
            offsetSliderPosition: function(reverse) {
                var left = parseInt(object.css('left').replace('px', ''));
                if (reverse) { 
                    left = left - itemsWidth * itemsToScroll; 
                } else {
                    left = left + itemsWidth * itemsToScroll;
                }
                object.css({
                    'left': left
                });
            },

            getOffsetPosition: function() {
                return parseInt(object.css('left').replace('px', ''));    
            },
            
            calculateNonInfiniteLeftScroll: function(toScroll) {
                
                methods.clearDisabled();
                if(methods.getOffsetPosition() + toScroll >= 0) {
                    $(settings.navigationTargetSelector).find(".center-menu-nav-left").addClass('disabled');
                    return 0;
                } else {
                    return methods.getOffsetPosition() + toScroll;
                }
            },
            
            calculateNonInfiniteRightScroll: function(toScroll){
                
                methods.clearDisabled();
                var negativeOffsetLimit = ((itemCount * itemsWidth) - (itemsVisible * itemsWidth))+(itemsWidth * 2);
                
                if(methods.getOffsetPosition() - toScroll <= -negativeOffsetLimit) {
                    $(settings.navigationTargetSelector).find(".center-menu-nav-right").addClass('disabled');
                    return -negativeOffsetLimit;        
                } else {
                    return methods.getOffsetPosition() - toScroll;
                }
            },
            
            setAutoplayInterval: function(){
                autoPlayInterval = setInterval(function() {
                    if (canNavigate) {
                        methods.scroll(false);
                    }
                }, settings.autoPlay.interval);                    
            },
            
            clearDisabled: function() {
                var parent = $(settings.navigationTargetSelector);
                parent.find(".center-menu-nav-left").removeClass('disabled');
                parent.find(".center-menu-nav-right").removeClass('disabled');
            }                        
            
        };

        if (methods[options]) {     
            return methods[options].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof options === 'object' || !options) {    
            return methods.init.apply(this);  
        } else {
            $.error(method);
        }        
};

})(jQuery);

// Main jQuery
$(document).ready(function() {

    var menu = $("#center-menu");
    var profileBtn = $(".profile_section");
    var notificationBtn = $(".notification_section");
    var leftMenuItem = $('.left_side_menu .l_s_m_container nav ul li').length;
    var rightMenuItem = $('.right_side_menu .r_s_m_container nav ul li').length;

    var profileBtnPC = $("#profile_section_btn");
    var profileBtnTab = $("#profile_section_btn_res");

    var notificationBtnPC = $("#notification_section_btn");
    var notificationBtnTab = $("#notification_section_btn_res");

    // Menu Sliding, Profile & Notification Controlling
    menu.menu({
        infinite: false
    });
    if(menu.children().length <= 6){
        $(".center-menu-nav-left").css({
            'display':'none'
        });
        $(".center-menu-nav-right").css({
            'display':'none'
        });
    }
    function profileSectionCtrl(btn){
        btn.click(function(){
            if($('.right_side_menu').width() > 0){
                $(".r_s_m_btn_hide").fadeOut( 10 , function(){
                    $(".r_s_m_down_arrow").fadeOut( 100 , function(){
                        $(".right_side_menu").animate({
                            width: 0
                        }, 10 , function(){
                            $(".r_s_m_btn").fadeIn("slow");
                            profileBtn.slideToggle();
                        })
                    });
                })
            }else{
                notificationBtn.slideUp(function(){
                    profileBtn.slideToggle();
                })
            }
        });
    }
    profileSectionCtrl(profileBtnPC);
    profileSectionCtrl(profileBtnTab);

    function notificationSectionCtrl(btn){
        btn.click(function(){
            if($('.right_side_menu').width() > 0){
                $(".r_s_m_btn_hide").fadeOut( 10 , function(){
                    $(".r_s_m_down_arrow").fadeOut( 100 , function(){
                        $(".right_side_menu").animate({
                            width: 0
                        }, 10 , function(){
                            $(".r_s_m_btn").fadeIn("slow");
                            notificationBtn.slideToggle();
                        })
                    });
                })
            }else{
                profileBtn.slideUp(function(){
                    notificationBtn.slideToggle();
                })
            }
        });
    }
    notificationSectionCtrl(notificationBtnPC);
    notificationSectionCtrl(notificationBtnTab);

    // Side Menu Slide Controlling
    $(".l_s_m_btn").click(function(){
        $(this).fadeOut("fast", function(){
            if(leftMenuItem > 12){
                $(".left_side_menu").animate({
                    width: 370
                }, function(){
                    $(".l_s_m_down_arrow").fadeIn("slow");
                    $(".l_s_m_btn_hide").fadeIn("slow");
                });
            }else{
                $(".left_side_menu").animate({
                    width: 370
                }, function(){
                    $(".l_s_m_btn_hide").fadeIn("slow");
                });
            }
        })
    });
    $(".l_s_m_btn_hide").click(function(){
        $(this).fadeOut("fast", function(){
            if(leftMenuItem > 12){
                $(".l_s_m_down_arrow").fadeOut("fast", function(){
                    $(".left_side_menu").animate({
                        width: 0
                    }, function(){
                        $(".l_s_m_btn").fadeIn("slow");
                    });
                });
            }else{
                $(".left_side_menu").animate({
                    width: 0
                }, function(){
                    $(".l_s_m_btn").fadeIn("slow");
                });
            }
        })
    });
    $(".r_s_m_btn").click(function(){
            profileBtn.slideUp();
        $(this).fadeOut("fast", function(){
            if(rightMenuItem > 12){
                $(".right_side_menu").animate({
                    width: 370
                }, function(){
                    $(".r_s_m_down_arrow").fadeIn("slow");
                    $(".r_s_m_btn_hide").fadeIn("slow");
                });
            }else{
                $(".right_side_menu").animate({
                    width: 370
                }, function(){
                    $(".r_s_m_btn_hide").fadeIn("slow");
                });
            }
        })
    });
    $(".r_s_m_btn_hide").click(function(){
        $(this).fadeOut("fast", function(){
            if(rightMenuItem > 12){
                $(".r_s_m_down_arrow").fadeOut("fast", function(){
                    $(".right_side_menu").animate({
                        width: 0
                    }, function(){
                        $(".r_s_m_btn").fadeIn("slow");
                    });
                });
            }else{
                $(".right_side_menu").animate({
                    width: 0
                }, function(){
                    $(".r_s_m_btn").fadeIn("slow");
                });
            }
        })
    });     

    // Arrow Controlling
    $('.left_side_menu').scroll(function(){
        if($( this ).scrollTop() > 50){
            $(".l_s_m_down_arrow").fadeOut("fast");
        }else{
            $(".l_s_m_down_arrow").fadeIn("slow");
        }
    })
    $('.right_side_menu').scroll(function(){
        if($( this ).scrollTop() > 50){
            $(".r_s_m_down_arrow").fadeOut("fast");
        }else{
            $(".r_s_m_down_arrow").fadeIn("slow");
        }
    })
    $('.left_right_side_menu_responsive').scroll(function(){
        if($( this ).scrollTop() > 50){
            $(".l_r_s_m_down_arrow").fadeOut("fast");
        }else{
            $(".l_r_s_m_down_arrow").fadeIn("slow");
        }
    })
    $('.l_s_m_down_arrow').click(function(){
        $(".left_side_menu").animate({
            scrollTop : "100"
        });
    })
    $('.r_s_m_down_arrow').click(function(){
        $(".right_side_menu").animate({
            scrollTop : "100"
        });
    })
    $('.l_r_s_m_down_arrow').click(function(){
        $(".left_right_side_menu_responsive").animate({
            scrollTop : "100"
        });
    })

    // Responsive Menu controll
    $('.ham').click(function(){
        if($('.ham').hasClass('active')){
            $('.left_right_side_menu_responsive').animate({
                right: 0
            }, 500)
            $('.l_r_s_m_down_arrow').css({
                'display': 'block'
            })
        }else{
            $('.left_right_side_menu_responsive').animate({
                right: '-200%'
            }, 500)
            $('.l_r_s_m_down_arrow').css({
                'display': 'none'
            })
        }
    })

    // Search Box Responsive
    $('.search-icon').click(function(){
        if($('.search-wrapper').hasClass('active')){
            $('#hamburger_menu').css({
                'display':'none'
            })
        }
    })
    $('.close').click(function(){
        $('#hamburger_menu').css({
            'display':'block'
        })
    })
});

// Search Box Animation
function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            container.find('.search-input').val('');
        }
}