<template>
    <div class="career_details_container">
        <div class="career_slider">
            <div v-for="job in jobs" v-bind:key="job.id" class="career_slide">
                <div class="career_slide_header">
                    <p>{{job.title}}</p>
                </div>
                <div class="career_slide_body">
                    <p>{{job.description}}</p>
                </div>
                <div class="career_slide_footer">
                    <button class='modalTrigger' v-on:click="show_detail(job)">View Details</button>
                </div>
            </div>
        </div>
        <div class="career_slide_next">
            <i class="fas fa-arrow-right"></i>
        </div>
        <div class="career_slide_prev">
            <i class="fas fa-arrow-left"></i>
        </div>
        <job-modal :job="selected_job"></job-modal>
    </div>
</template>

<script>
import JobModal from './JobModal.vue'
export default {
  components: { JobModal },
    data(){
        return{
            selected_job:{}
        }
    },
    props:['jobs'],
    mounted(){
        console.log(this.jobs)
    },
    watch:{
        selected_job:function(){

        }
    },
    methods:{
        show_detail:function(job){
            console.log('detail button pressed')
            this.selected_job=job;
            //document.getElementById('modal-container').style.display='block';
            const slideBtn  = document.querySelectorAll('.career_slide');
            slideBtn.forEach(function(cur){
                cur.addEventListener('click', (e)=>{
                    const modalTrigger = e.target;
                    const id = modalTrigger.getAttribute('id');
                    const modal = document.querySelector(`.${id}`);
                    if(modalTrigger.classList.contains('modalTrigger')){
                        clearInterval(sliding);
                        modal.classList.remove("out");
                        modal.classList.add('one');
                    }
                    modal.addEventListener('click', (e)=>{
                        if(e.target.classList.contains('modal-background')){
                            modal.classList.add('out');
                        }
                        if(e.target.classList.contains('applyBtn')){
                            modal.classList.add('out');
                            document.querySelector('input').focus();
                        }
                    })
                })
            });
        }
    }
}
</script>