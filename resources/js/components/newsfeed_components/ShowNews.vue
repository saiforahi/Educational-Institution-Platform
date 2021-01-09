<template>
    <div>
        <div v-for="item in news_list" v-bind:key="item.id" class="post_container">
            <div class="post_header">
                <a href="#">
                    <div class="post_institute_logo">
                        <h1>A</h1>
                    </div>
                </a>
                <div class="post_institute_name">
                    <h1>AUID</h1>
                </div>
            </div>
            <div class="post_description">
                <div class="post_des_title">
                    <h3>{{item.title}}</h3>
                </div>
                <div class="post_des">
                    <p>{{item.body}}</p>
                </div>
            </div>
            <div class="post_image">
                <img :src="item.link">
            </div>
            <div class="post_footer">
                <div class="comment_button">
                    <h1>Add a comment</h1>
                </div>
                <div class="comment_box">
                    <div class="comment">
                        <a href="#">
                            <div class="comment_institute_logo">
                                <h1>A</h1>
                            </div>
                        </a>
                        <div class="comment_description">
                            <div class="comment_des_institute_name">
                                <h1>AUID</h1>
                            </div>
                            <div class="comment_body">
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a href="#">
                            <div class="comment_institute_logo">
                                <h1>N</h1>
                            </div>
                        </a>
                        <div class="comment_description">
                            <div class="comment_des_institute_name">
                                <h1>NSU</h1>
                            </div>
                            <div class="comment_body">
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment_form">
                        <form action="#">
                            <a href="#">
                                <div class="comment_form_inst_logo">
                                    <h1>A</h1>
                                </div>
                            </a>
                            <input type="text" placeholder="Write your comment here...">
                            <button>Comment</button>
                        </form>
                    </div>
                </div>
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
        console.log("show news rendered")
        
    },
    methods:{
        
    },
    
}
</script>