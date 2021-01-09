window.onload = function(){
    /*--------------------------------------------------------------
    ----------------------------------------------------------------
    DOM Elements
    ----------------------------------------------------------------
    --------------------------------------------------------------*/
    
        var profileSection = document.querySelector('.profile_section');
        var profileTriggerPC = document.querySelector('#profile_section_btn');
        var profileTriggerTab = document.querySelector('#profile_section_btn_res');
        var profileTriggerMobile = document.querySelector('.mobile_profile');
    
        var notificationSection = document.querySelector('.notification_section');
        var notificationTriggerPC = document.querySelector('#notification_section_btn');
        var notificationTriggerTab = document.querySelector('#notification_section_btn_res');
        var notificationTriggerMobile = document.querySelector('.mobile_notification');
    
        var leftSideMenu = document.querySelector('.left_side_menu');
        var leftSideMenuTrigger = document.querySelector('.l_s_m_btn');
        var leftSideMenuClose = document.querySelector('.l_s_m_btn_hide');
        var leftSideMenuCloseCon = document.querySelector('.l_s_m_btn_hide_con');
        var leftSideMenuDownArrow = document.querySelector('.l_s_m_down_arrow');
    
        var rightSideMenu = document.querySelector('.right_side_menu');
        var rightSideMenuTrigger = document.querySelector('.r_s_m_btn');
        var rightSideMenuClose = document.querySelector('.r_s_m_btn_hide');
        var rightSideMenuCloseCon = document.querySelector('.r_s_m_btn_hide_con');
        var rightSideMenuDownArrow = document.querySelector('.r_s_m_down_arrow');
    
        var leftRightSideMenuRes = document.querySelector('.left_right_side_menu_responsive');
        var leftRightSideMenuTrigger = document.querySelector('.ham');
        var leftRightSideMenuDownArrow = document.querySelector('.l_r_s_m_down_arrow');
    
        var leftMenuItems = document.querySelectorAll('.left_side_menu .l_s_m_container nav ul li').length;
        var rightMenuItems = document.querySelectorAll('.right_side_menu .r_s_m_container nav ul li').length;
    
    
    /*--------------------------------------------------------------
    ----------------------------------------------------------------
    Profile and Notification controll
    ----------------------------------------------------------------
    --------------------------------------------------------------*/
        function profileNotifiaction(trigger, container){
            trigger.addEventListener('click', function(){
                if(container.style.display === 'block'){
                    container.style.display = 'none';
                }else{
                    container.style.display = 'block';
                }
            });
        }
        profileNotifiaction(profileTriggerPC, profileSection)
        profileNotifiaction(profileTriggerTab, profileSection)
        profileNotifiaction(profileTriggerMobile, profileSection)
        profileNotifiaction(notificationTriggerPC, notificationSection)
        profileNotifiaction(notificationTriggerTab, notificationSection)
        profileNotifiaction(notificationTriggerMobile, notificationSection)
    
        function profileCtrl(btn){
            btn.addEventListener('click', function(){
                if(notificationSection.style.display === 'block'){
                    notificationSection.style.display = 'none'
                }
                if(rightSideMenuClose.style.opacity === '1'){
                    if(rightMenuItems > 12){
                        rightSideMenuClose.style.opacity = '0';
                        rightSideMenu.style.right = '-200%';
                        rightSideMenuTrigger.style.display = 'block';
                        rightSideMenuDownArrow.style.display = 'none';
                        rightSideMenuCloseCon.style.display = 'none';
                    }else{
                        rightSideMenuClose.style.opacity = '0';
                        rightSideMenu.style.right = '-200%';
                        rightSideMenuTrigger.style.display = 'block';
                        rightSideMenuCloseCon.style.display = 'none';
                    }
                }
            })
        }
        profileCtrl(profileTriggerPC)
        profileCtrl(profileTriggerTab)
    
        profileTriggerMobile.addEventListener('click', function(){
            if(notificationSection.style.display === 'block'){
                notificationSection.style.display = 'none'
            }
            if(leftRightSideMenuDownArrow.style.display == 'block'){
                leftRightSideMenuRes.style.right = '-200%';
                leftRightSideMenuTrigger.classList.remove('active');
                leftRightSideMenuDownArrow.style.display = 'none';
            }
        })
    
        function notificationCtrl(btn){
            btn.addEventListener('click', function(){
                if(profileSection.style.display === 'block'){
                    profileSection.style.display = 'none'
                }
                if(rightSideMenuClose.style.opacity === '1'){
                    if(rightMenuItems > 12){
                        rightSideMenuClose.style.opacity = '0';
                        rightSideMenu.style.right = '-200%';
                        rightSideMenuTrigger.style.display = 'block';
                        rightSideMenuDownArrow.style.display = 'none';
                        rightSideMenuCloseCon.style.display = 'none';
                    }else{
                        rightSideMenuClose.style.opacity = '0';
                        rightSideMenu.style.right = '-200%';
                        rightSideMenuTrigger.style.display = 'block';
                        rightSideMenuCloseCon.style.display = 'none';
                    }
                }
            })
        }
        notificationCtrl(notificationTriggerPC)
        notificationCtrl(notificationTriggerTab)
    
        notificationTriggerMobile.addEventListener('click', function(){
            if(profileSection.style.display === 'block'){
                profileSection.style.display = 'none'
            }
            if(leftRightSideMenuDownArrow.style.display == 'block'){
                leftRightSideMenuRes.style.right = '-200%';
                leftRightSideMenuTrigger.classList.remove('active');
                leftRightSideMenuDownArrow.style.display = 'none';
            }
        })
    
    /*--------------------------------------------------------------
    ----------------------------------------------------------------
    Responsive Menu Sliding
    ----------------------------------------------------------------
    --------------------------------------------------------------*/
        leftRightSideMenuTrigger.addEventListener('click', function(){
            if(profileSection.style.display === 'block'){
                profileSection.style.display = 'none'
            }
            if(notificationSection.style.display === 'block'){
                notificationSection.style.display = 'none'
            }
            if(profileSection.style.display === 'block'){
                profileSection.style.display = 'none'
            }
            if(leftRightSideMenuTrigger.classList.contains('active')){
                leftRightSideMenuRes.style.right = '0';
                setTimeout(function(){
                    leftRightSideMenuDownArrow.style.display = 'block';
                }, 500)
            }else{
                leftRightSideMenuRes.style.right = '-200%';
                leftRightSideMenuDownArrow.style.display = 'none';
            }
        })
    
    /*--------------------------------------------------------------
    ----------------------------------------------------------------
    Menu sliding functions
    ----------------------------------------------------------------
    --------------------------------------------------------------*/
        leftSideMenuTrigger.addEventListener('click', function(){
            if(leftMenuItems > 12){
                this.style.display = 'none';
                leftSideMenu.style.left = '0';
                leftSideMenuCloseCon.style.display = 'flex';
                setTimeout(function(){
                    leftSideMenuClose.style.opacity = '1';
                    leftSideMenuDownArrow.style.display = 'block';
                }, 600)
            }else{
                this.style.display = 'none';
                leftSideMenu.style.left = '0';
                leftSideMenuCloseCon.style.display = 'none';
                setTimeout(function(){
                    leftSideMenuClose.style.opacity = '1';
                }, 600)
            }
        });
        leftSideMenuClose.addEventListener('click', function(){
            if(leftMenuItems > 12){
                this.style.opacity = '0';
                leftSideMenu.style.left = '-200%';
                leftSideMenuTrigger.style.display = 'block';
                leftSideMenuDownArrow.style.display = 'none';
                leftSideMenuCloseCon.style.display = 'none';
            }else{
                this.style.opacity = '0';
                leftSideMenu.style.left = '-200%';
                leftSideMenuTrigger.style.display = 'block';
                leftSideMenuCloseCon.style.display = 'none';
            }
        });
        rightSideMenuTrigger.addEventListener('click', function(){
            if(profileSection.style.display === 'block'){
                profileSection.style.display = 'none'
            }
            if(notificationSection.style.display === 'block'){
                notificationSection.style.display = 'none'
            }
            if(rightMenuItems > 12){
                this.style.display = 'none';
                rightSideMenu.style.right = '0';
                rightSideMenuCloseCon.style.display = 'flex';
                setTimeout(function(){
                    rightSideMenuClose.style.opacity = '1';
                    rightSideMenuDownArrow.style.display = 'block';
                }, 600)
            }else{
                this.style.display = 'none';
                rightSideMenu.style.right = '0';
                rightSideMenuCloseCon.style.display = 'flex';
                setTimeout(function(){
                    rightSideMenuClose.style.opacity = '1';
                }, 600)
            }
        });
        rightSideMenuClose.addEventListener('click', function(){
            if(rightMenuItems > 12){
                this.style.opacity = '0';
                rightSideMenu.style.right = '-200%';
                rightSideMenuTrigger.style.display = 'block';
                rightSideMenuDownArrow.style.display = 'none';
                rightSideMenuCloseCon.style.display = 'none';
            }else{
                this.style.opacity = '0';
                rightSideMenu.style.right = '-200%';
                rightSideMenuTrigger.style.display = 'block';
                rightSideMenuCloseCon.style.display = 'none';
            }
        });
    
        // Arrow Controlling
        function scrollingEvent(trigger, container){
            trigger.addEventListener('scroll', function(){
                if(trigger.scrollTop > 50){
                    container.style.display = 'none';
                }else{
                    container.style.display = 'block';
                }
            })
        }
        scrollingEvent(leftSideMenu, leftSideMenuDownArrow);
        scrollingEvent(rightSideMenu, rightSideMenuDownArrow);
        scrollingEvent(leftRightSideMenuRes, leftRightSideMenuDownArrow);
    
        function clickToScroll(trigger, container){
            trigger.addEventListener('click', function(){
                var position = 0;
                var stop = setInterval(() => {
                    if(container.scrollTop == 100){
                        clearInterval(stop);
                    }else{
                        container.scrollTop = position++;
                    }
                }, 1);
            })
        }
        clickToScroll(leftSideMenuDownArrow, leftSideMenu)
        clickToScroll(rightSideMenuDownArrow, rightSideMenu)
        clickToScroll(leftRightSideMenuDownArrow, leftRightSideMenuRes)
    /*--------------------------------------------------------------
    ----------------------------------------------------------------
    Menu close button hiding
    ----------------------------------------------------------------
    --------------------------------------------------------------*/
    
    
    
    }