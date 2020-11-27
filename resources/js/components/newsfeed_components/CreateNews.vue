<template>
<div class="post_form_container">
    <form>
        <input v-model="title" type="text" placeholder="Enter Post Title" class="input">
        <input v-model="body" type="text" placeholder="Enter Post Description" class="input">
        <div class="file-select">
            <label for="chooseFile">Choose File</label>
            <input ref="file" type="file" v-on:change="handleFileUpload" name="chooseFile" id="chooseFile" required alt="Post" accept="image/jpg, image/jpeg, image/png">
        </div>
        <button type="button" v-on:click="create_news">Post</button>
    </form>
</div>
</template>
<script>
import axios from 'axios';
import swal from 'sweetalert';
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
                console.log(response.data);
                this.$emit('news_created',response.data.new_news);
                this.title="";
                this.body="";
                this.image_file="";
                swal("Post Created!", "Your Post created and published successfully!", "success");
            }).catch(error=>{
                console.log(error)
            })
            
        }
    }
}
</script>