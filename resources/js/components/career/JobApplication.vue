<template>
<div class="career_form_slider">
    <div class="career_form_slide">
        <form>
            <input v-model="first_name" type="text" name="first_name" placeholder="Enter your first name">
            <input v-model="last_name" type="text" name="last_name" placeholder="Enter your last name">
            <input v-model="email" type="email" required name="email" placeholder="Enter your email">
            <input v-model="phone" type="text" name="phone" placeholder="Enter your number">
            <select v-model="job" name="job">
                <option value="Select" selected>Select Job</option>
                <option v-for="job in jobs" :key="job.id" :value="job.id" >{{job.title}}</option>
            </select>
            <p>Upload your CV</p>
            <div class="file-upload">
                <div class="file-select">
                    <label for="chooseFile">Choose File</label>
                    <input ref="file" v-on:change="handleFileUpload" accept="pdf" type="file" name="chooseFile" id="chooseFile" required alt="Post">
                </div>
            </div>
            <p>Preferred interview schedule</p>
            <div class="preferred_time">
                <input v-model="date" type="date" name="date" placeholder="Date">
                <input v-model="time" type="time" value="22:00" name="time" placeholder="Time">
            </div>
            <button type="button" v-on:click="submit_application()">Submit</button>
        </form>
    </div>
</div>
</template>
<script>
import axios from 'axios';
import swal from 'sweetalert';
    export default {
        data(){
            return{
                first_name:'',
                last_name:'',
                email:'',
                phone:'',
                job:'Select',
                cv:'',
                date:'',
                time:''
            }
        },
        props:{
            jobs:Array
        },
        watch:{
            first_name:function(){
                console.log(this.first_name)
            }
        },
        methods:{
            handleFileUpload:function(){
                this.cv = this.$refs.file.files[0];
            },
            submit_application:function() {
                let formData=new FormData();
                formData.append('first_name',this.first_name);
                formData.append('last_name',this.last_name);
                formData.append('email',this.email);
                formData.append('phone',this.phone);
                formData.append('date',this.date);
                formData.append('time',this.time);
                formData.append('job',this.job);
                formData.append('cv',this.cv);
                console.log(formData)
                axios.post('/api/job/application/submit',
                formData,{
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }).then(response=>{
                    console.log(response.data);
                    this.first_name="";
                    this.last_name="";
                    this.email="";
                    this.phone="";
                    this.job="select";
                    this.cv="";
                    this.date="";
                    this.time="";
                    swal("Application Submitted!", "Your application is submitted successfully!", "success");
                }).catch(error=>{
                    console.log(error)
                })
            }
        },
        mounted(){
            
        }
    }
</script>