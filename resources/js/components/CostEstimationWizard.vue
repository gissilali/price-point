<template>
    <div>
        <div id="top-wizard">
            <div id="progressbar"></div>
        </div>
        <!-- /top-wizard -->
        <form id="wrapped" method="POST">
            <input id="website" name="website" type="text" value="">
            <!-- Leave for security protection, read docs for details -->
            <div id="middle-wizard">
                <div class="step">
                    <h3 class="main_question">What kind of software do you want?</h3>
                    <div class="form-group" v-for="(platform, index) in platforms">
                        <label class="container_radio">{{ platform.name }}
                            <input type="radio" v-model="selected" name="gender" :value="platform.id" class="required">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /middle-wizard -->
            <div id="bottom-wizard">
                <button type="button" name="backward" class="btn btn-outline-primary">Prev</button>
                <button type="button" name="forward" class="btn btn-primary">Next</button>
                <!--<button type="submit" name="process" class="btn btn-primary">Submit</button>-->
            </div>
            <!-- /bottom-wizard -->
        </form>
    </div>
</template>

<script>
    import {env} from "../env";
    export default {
        name: "CostEstimationWizard",
        data() {
            return {
                platforms: [],
                selected: ''
            }
        },
        created() {
            axios.get(env.baseURL + 'api/platforms')
                .then(response => {
                    if (response.data.success) {
                        console.log(response.data);
                        this.platforms = response.data.data
                    }
                })
                .catch(error => {
                    alert("error")
                })
        }
    }
</script>

<style scoped>

</style>