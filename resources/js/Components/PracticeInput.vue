<template>
    <div :class="backgroundColor" class="p-4 text-gray-200 flex" >
        <input v-if="showCurrentAnswer" v-model="currentAnswer" class="w-2/3 mr-4 bg-gray-700" @click:.prevent @keyup="changeAnswer">
        <div v-else class="w-2/3 mr-4 bg-gray-900">{{ this.correctAnswer }}</div>
        <span class="text-gray-200" v-if="showCurrentAnswer" @click="toggleAnswer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
        </span>
        <span class="text-gray-200" v-else @click="toggleAnswer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
        </span>
    </div>
</template>

<script>
export default {
    name: "PracticeInput",
    props: {
        correctAnswer: {
            type: String,
            required: true
        },
        answerKey: {
            type: String,
            required: true
        },
        currentAnswer: {
            type: String,
            default: ''
        },
    },
    data() {
        return {
            showCurrentAnswer: true,
        }
    },
    methods: {
        changeAnswer(e) {
            this.$emit('change-answer', {key: this.answerKey, value: e.target.value})
        },
        toggleAnswer() {
            this.showCurrentAnswer = !this.showCurrentAnswer;
        },
        normalizedWord(word) {
            return word.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        }
    },
    computed: {
        isCorrect() {
            return this.currentAnswer === this.correctAnswer;
        },
        backgroundColor() {
            if (this.isCorrect) return "bg-green-900";
            if (this.normalizedWord(this.correctAnswer) === this.normalizedWord(this.currentAnswer)) return "bg-red-900";
            return '';
        },
    }
}
</script>

<style scoped>
</style>
