<template>
<div class="create_news">
    <form action="#" method="get">
        <div class="textarea">
            <input v-model="title" type="text" required placeholder="Title">
            <input v-model="body" type="text" required placeholder="Type your news">
        </div>
        <div class="actions">
            <div class="upload_file">
                <label for="up"><i class="fas fa-image"></i></label>
                <input ref="file" v-on:change="handleFileUpload" type="file" id="up">
            </div>
            <div v-on:click="create_news" class="up_btn">
                <button>Post</button>
            </div>
        </div>
    </form>
</div>
</template>
<script>
import axios from 'axios'
export default {
    data(){
        return{
            title:'',
            body:'',
            image_file:''
        }
    },
    methods:{
        handleFileUpload(){
            this.image_file = this.$refs.file.files[0];
        },
        create_news(){
            axios.post('/api/news/create',{title:this.title,body:this.body,image:this.image_file}).then(response=>{
                this.laravelData=response.data.notifications;
                this.total_unread_notifications=response.data.total_unread;
            }).catch(error=>{

            })
        }
    }
}
</script>