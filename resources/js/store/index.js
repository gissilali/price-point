import Vue from 'vue'

import Vuex from 'vuex'

Vue.use(Vuex);
export const store = new Vuex.Store({
    state: {
        currentStep : localStorage.getItem('current-step') || -1,
        currentQuestion: JSON.parse(localStorage.getItem('current-question')),
        questions: JSON.parse(localStorage.getItem('questions')),
        selectedOptions: JSON.parse(localStorage.getItem('selected-options')) || [],
        currentSelectedPlatform: JSON.parse(localStorage.getItem('current-selected-platform'))
    },
    mutations: {
        nextStep(state) {
            state.currentStep =  parseInt(state.currentStep) + 1;
            if (state.currentStep >= 0) {
                state.currentQuestion = state.questions[state.currentStep];
            }
            localStorage.setItem("current-step", state.currentStep)
        },
        previousStep(state) {
            state.currentStep = parseInt(state.currentStep) - 1;
            if (state.currentStep >= 0) {
                state.currentQuestion = state.questions[state.currentStep];
            }
            localStorage.setItem("current-step", state.currentStep)
        },
        setCurrentSelectedPlatform(state, platform) {
            localStorage.setItem('current-selected-platform', JSON.stringify(platform))
        },
        setCurrentQuestion(state, question) {
            state.currentQuestion = question
        },
        setQuestions(state, questions) {
            state.questions = questions;
            localStorage.setItem('questions', JSON.stringify(state.questions));
        },
        saveOption(state, option) {
            localStorage.setItem("selected-options", JSON.stringify(state.selectedOptions))
        }
    },
    getters: {
        currentStep: state => state.currentStep,
        currentQuestion: state => state.currentQuestion,
        questions: state => state.questions,
        selectedOptions: state => state.selectedOptions,
        currentSelectedPlatform: state => state.currentSelectedPlatform
    }
});