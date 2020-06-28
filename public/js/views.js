/*const emeet_body=new Vue({
    el: '#bg_one',
    data(){
        return{
            userID:window.user.id,
            api:{},
            meetingID:'',
            domain : 'meet.jit.si',
            options : {
                room: 'newRoom',
                width: 700,
                height: 700,
                parentNode: document.getElementById('eer'),
                userInfo: {
                    email: window.user.email,
                    displayName: window.user.name                
                }
            }
        }
    },
    mounted(){
        console.log(window.user);
        //document.getElementById('center_div').style.display="none";
        
    },
    methods:{
        startMeeting: function(){
            //console.log(this.options);
            document.getElementById('center_div').style.display="none";
            //this.api=new JitsiMeetExternalAPI(this.domain, this.options);
        }
    }
});*/