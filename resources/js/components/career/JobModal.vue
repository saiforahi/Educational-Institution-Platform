<template>
    <div id="modal-container" class="frontend">
        <div class="modal-background">
            <div class="modal">
                <div class="job_title mr_b">
                    <h1>Frontend Developer</h1>
                    <p>Enfome Private Limited</p>
                </div>
                <div class="job_vacancy mr_b">
                    <h3 class="requirement_h">Vacancy</h3>
                    <div class="requirement_p">
                        <p>03</p>
                    </div>
                </div>
                <div class="job_discription mr_b">
                    <h3 class="requirement_h">Job Context</h3>
                    <div class="requirement_p">
                        <p>Enfome Private Limited is looking for a competent, energetic, dynamic and forward-looking Managing Director.</p>
                    </div>
                </div>
                <div class="job_responsibilities mr_b">
                    <h3 class="requirement_h">Job Responsibilities</h3>
                    <div class="requirement_p">
                        <ul>
                            <li>Leading and administering the operational activities under policies, guidelines and objectives of the Company.</li>
                            <li>Formulating policies & strategies as well as implementing the business plan to achieve the target of the Company.</li>
                            <li>Managing the business operations in compliance with the rules & procedures of the regulatory bodies.</li>
                            <li>Building, as well as directing a cross-functional result-oriented team.</li>
                        </ul>
                    </div>
                </div>
                <div class="job_status mr_b">
                    <h3 class="requirement_h">Job Status</h3>
                    <div class="requirement_p">
                        <p>Full Time</p>
                    </div>
                </div>
                <div class="job_location mr_b">
                    <h3 class="requirement_h">Job Location</h3>
                    <div class="requirement_p">
                        <p>Anywere in the Bangladesh. Work from home.</p>
                    </div>
                </div>
                <div class="educational_requirements mr_b">
                    <h3 class="requirement_h">Educational Requirements</h3>
                    <div class="requirement_p">
                        <ul>
                            <li>MBA/ Masters in Finance, Accounting, Management, Economics, having no 3rd class/ division in any academic result</li>
                        </ul>
                    </div>
                </div>
                <div class="experience_requirements mr_b">
                    <h3 class="requirement_h">Experience Requirements</h3>
                    <div class="requirement_p">
                        <ul>
                            <li>At least 15 year(s)</li>
                        </ul>
                    </div>
                </div>
                <div class="additional_requirements mr_b">
                    <h3 class="requirement_h">Additional Requirements</h3>
                    <div class="requirement_p">
                        <ul>
                            <li>Personal Laptop or PC</li>
                            <li>Age at most 62 years</li>
                            <li>Strong presentation skill.</li>
                        </ul>
                    </div>
                </div>
                <div class="apply_now">
                    <button class="applyBtn">Apply Now</button>
                </div>
              </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{

        }
    },
    props:['job'],
    mounted(){
        console.log(this.job)
    }
}
</script>