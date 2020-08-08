<template>
    <!--News-->
    <div class="n_news_container" >
        <div v-for="item in news_list" v-bind:key="item.id">
            <div class="n_header">
                <div class="institute_name_con">
                    <div class="institute_icon">
                        <h3>E</h3>
                    </div>
                    <div class="institute_name">
                        <p>EnfoMe</p>
                    </div>
                </div>
            </div>
            <div class="n_headline_con">
                <!--If letter is more than 300 Read More will appear-->
                <p>{{item.title}}<a href="#">[Read more]</a> </p>
            </div>
            <div class="n_image_con">
                <a>
                    <img :src="item.link">
                </a>
            </div>
            <div class="n_newsline_con">
                <!--If letter is more than 600 Read More will appear-->
                <p>{{item.body}}<a href="#">[Read More]</a></p>
            </div>
        </div>
        
    </div>
    <!--News-->
</template>
<script>
import axios from 'axios'
export default {
    data(){
        return{
            
        }
    },
    props:['news_list'],
    mounted(){
        
        
    },
    methods:{
        
    },
    
}
</script>