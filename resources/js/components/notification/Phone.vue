<template>
    <div class="main_notification_container_mobile">
    <!--Single Institute-->
        <div class="mobile_dropdown_notification" v-for="(institute,index) in notification_list" :key="index">
            <div class="institute_notification_con">
                <div class="header">
                    <p>{{index}}</p>
                </div>
                <div class="noti_con" v-for="notification in institute" :key="notification.id">
                    <div class="notification">
                        <p>{{notification.data.news_title}}
                        </p>
                    </div>
                    <div class="notification_date">
                        <p>{{new Date(notification.created_at).toLocaleDateString()}}</p>
                    </div>
                </div>
            </div>
        </div>
        <!--End Of Signle Institute-->
    </div>
</template>
<script>
export default {
    data(){
        return{
            notification_list:[],
        }
    },
    mounted(){
        axios.get('/api/notifications/grouped/get').then(response=>{
           this.notification_list=response.data.notifications;
        }).catch(error=>{

        })
    },
    methods:{
        
    },
    created(){
        Echo.private('App.User.'+window.user.id)
        .notification((notification) => {
            axios.get('/api/notifications/'+notification.id).then(response=>{
                this.notification_list.unshift(response.data.notification);
                new Audio('http://soundbible.com/mp3/Air Plane Ding-SoundBible.com-496729130.mp3').play();
            })
            .catch(function (error) {
            //console.log(error);
            });
            
        });
    }
}
</script>