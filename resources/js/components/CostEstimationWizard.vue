<template>
    <div>
        <div id="top-wizard">
            <div id="progressbar"></div>
        </div>
        <!-- /top-wizard -->
        <current-form v-if="currentQuestion != null" :current-question="currentQuestion"></current-form>
    </div>
</template>

<script>
    import {env} from "../env";
    import {mapGetters} from 'vuex'
    import {mapMutations} from 'vuex'
    import CurrentForm from "./CurrentForm";

    export default {
        name: "CostEstimationWizard",
        components: {CurrentForm},
        data() {
            return {

            }
        },
        methods: {
            ...mapMutations([
                'setCurrentQuestion'
            ])
        },
        created() {
            if (parseInt(this.currentStep) === -1) {
                axios.get(`${env.baseURL}/api/platforms`)
                    .then(response => {
                        if (response.data.success) {
                            this.platforms = response.data.data;
                            let question = {
                                question : "What kind of app do want?",
                                options :  this.platforms
                            };
                            this.setCurrentQuestion(question)
                        }
                    })
                    .catch(error => {
                        console.log(error)
                    })
            } else {
                let questions = this.questions;
                this.setCurrentQuestion(questions[parseInt(this.currentStep)])
            }
        },
        computed: {
            ...mapGetters([
                'currentStep',
                'questions',
                'currentQuestion'
            ])
        }
    }
</script>

<style scoped>

</style>