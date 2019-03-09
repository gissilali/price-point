<template>
    <form id="wrapped" method="POST">
        <input id="website" name="website" type="text" value="">
        <!-- Leave for security protection, read docs for details -->
        <div id="middle-wizard">
            <div class="step">
                <h3 class="main_question">{{ currentQuestion.question }}</h3>
                <div class="form-group" v-for="(option, index) in currentQuestion.options">
                    <label v-if="option.hasOwnProperty('name')" class="container_radio">{{ option.name }}
                        <input type="radio" v-model="selectedOption" name="gender" :value="option" class="required">
                        <span class="checkmark"></span>
                    </label>
                    <label v-if="option.hasOwnProperty('option')" class="container_radio">{{ option.option }}
                        <input type="radio" v-model="selectedOption" name="gender" :value="option" class="required">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </div>
        <!-- /middle-wizard -->
        <div id="bottom-wizard">
            <button type="button" v-if="currentStep >= 0" name="backward" class="btn btn-outline-primary" @click="fetchPreviousQuestion">Prev</button>
            <button type="button" v-if="selectedOption != null" name="forward" class="btn btn-primary" @click="submitOption">Next</button>
            <!--<button type="submit" name="process" class="btn btn-primary">Submit</button>-->
        </div>
        <!-- /bottom-wizard -->
    </form>
</template>

<script>
    import {mapGetters, mapMutations} from "vuex";
    import {env} from "../env";

    export default {
        name: "CurrentForm",
        props: ['currentQuestion'],
        computed: {
            ...mapGetters([
                'currentStep',
                'questions',
                'selectedOptions',
                'currentSelectedPlatform'
            ])
        },
        methods: {
            ...mapMutations([
                'nextStep',
                'setCurrentSelectedPlatform',
                'previousStep',
                'setQuestions',
                'setCurrentQuestion',
                'saveOption'
            ]),
            getPlatforms() {
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
            },
            fetchPreviousQuestion() {
                this.previousStep();
                if (this.currentStep === -1) {
                   this.getPlatforms();
                }
            },
            submitOption() {
                if (this.selectedOption == null) {
                    alert("select something bitch!!");
                    return
                }

                if (this.currentStep === -1) {
                    this.setCurrentSelectedPlatform(this.selectedOption);
                    this.getQuestions();
                } else {
                    this.saveOption();
                    this.nextStep()
                }
            },
            getQuestions() {
                axios.get(`${env.baseURL}api/questions/${this.selectedOption.id}`)
                    .then(response => {
                        if (response.data.success) {
                            this.setQuestions(response.data.data);
                            this.nextStep()
                        }
                    })
            }
        },
        data() {
            return {
                selectedOption: null
            }
        },
        created() {
            this.selectedOption = this.currentSelectedPlatform
        }
    }
</script>

<style scoped>

</style>