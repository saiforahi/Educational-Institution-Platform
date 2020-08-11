<template>
<div class="create_news">
    <form>
        <div class="textarea">
            <input v-model="title" type="text" required placeholder="Title">
            <input v-model="body" type="text" required placeholder="Type your news">
        </div>
        <div class="actions">
            <div class="upload_file">
                <label for="up"><i class="fas fa-image"></i></label>
                <input ref="file" v-on:change="handleFileUpload" type="file" id="up" accept="image/png, image/jpg, image/jpeg">
            </div>
            <div v-on:click="create_news" class="up_btn">
                <button type="button">Post</button>
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
            let formData=new FormData();
            formData.append('title',this.title);
            formData.append('body',this.body);
            formData.append('image',this.image_file);
            axios.post('/api/news/create',
            formData,{
                headers: {
                        'Content-Type': 'multipart/form-data'
                }
            }).then(response=>{
                console.log(response.data)
                this.$emit('news_created',response.data.new_news)
            }).catch(error=>{
                console.log(error)
            })
            
        }
    }
}
</script>