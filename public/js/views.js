const app = new Vue({
    el: '#newsfeed_body',
    data(){
        return{
            newsData:[]
        }
    },
    methods:{
        update_news_list(data){
            this.newsData.unshift(data);
        }
    },
    mounted(){
        axios.get('/api/news/fetchall').then(response=>{
            this.newsData=response.data.news;
        }).catch(error=>{

        })
    },
    created(){
        if(window.user!=null){
            Echo.private('App.User.'+window.user.id)
            .notification((notification) => {
                axios.get('/api/news/fetchall').then(response=>{
                    this.newsData=response.data.news;
                }).catch(error=>{
        
                })
            });
        }
    }
});

// const nav_desktop= new Vue({
//     el: '#navbar_desktop_vue',
// })
// const nav_mobile= new Vue({
//     el: '#navbar_mobile_vue',
// })


