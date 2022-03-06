<template>
    <div class="pl-4">
        <div :class="backgroundColor" class="pt-4 text-gray-200 flex" >
            <input :id="labelId" v-if="showCurrentAnswer" v-model="currentAnswer" class="w-2/3 mr-4 bg-gray-700" @click:.prevent @keyup="changeAnswer">
            <div :id="`${labelId}-correct-answer`" v-else class="w-2/3 mr-4 bg-gray-900">{{ this.correctAnswer }}</div>
        </div>
        <div class="flex pt-2" :class="backgroundColor">
            <span :id="`${labelId}-correct-svg`" class="text-gray-200" v-if="currentAnswer === correctAnswer || correctAnswer === '-'">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
            </span>
            <span :id="`${labelId}-toggle-current-answer`" class="text-gray-200" v-else-if="showCurrentAnswer" @click="toggleAnswer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </span>
            <span :id="`${labelId}-hide-current-answer`" class="text-gray-200" v-else @click="toggleAnswer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg>
            </span>
            <span :id="`${labelId}-speak-answer`" class="text-gray-200 ml-3" @click="speakAnswer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-volume-2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
            </span>
        </div>
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
            if (this.correctAnswer === '_') {
                this.showCurrentAnswer = true
                return
            }
            this.showCurrentAnswer = !this.showCurrentAnswer;
        },
        normalizedWord(word) {
            return word.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
        },
        speakAnswer() {
            var synth = window.speechSynthesis;
            let voices = synth.getVoices();
            let utterThis = new SpeechSynthesisUtterance(this.correctAnswer);
//            utterThis.voice = voices.find(voice => voice.name === 'Google español de Estados Unidos');
            utterThis.voice = voices.find(voice => voice.lang === 'es-MX');
            utterThis.pitch = 1;
            utterThis.rate = 1;
            synth.speak(utterThis);
        },
    },
    computed: {
        isCorrect() {
            return this.currentAnswer === this.correctAnswer || this.correctAnswer === '-'
        },
        backgroundColor() {
            if (this.isCorrect) return "bg-green-900";
            if (this.normalizedWord(this.correctAnswer) === this.normalizedWord(this.currentAnswer)) return "bg-red-900";
            return '';
        },
        labelId() {
            return this.answerKey.replace(/[_]/g, '-');
        },
    }
}
</script>

<style scoped>
</style>
