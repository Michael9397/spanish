<template>

    <div class="p-40 bg-gray-900 text-white">
        <h1>Tense</h1>
        <div>
            <div class="flex items-center h-full">
                <select v-model="selectedTense" key="selectedTense" class="bg-gray-700" @change="initAnswers">
                    <option v-for="(tense, index) in indicativeTense" :value="index">{{ tense }}</option>
                </select>
                <button @click="shuffleVerbs" class="ml-4 bg-gray-700 rounded-lg p-2">Shuffle Verbs</button>
                <label class="pl-4 flex items-center">
                    <input type="checkbox" v-model="includeVosotros">
                    <span class="pl-2">Include vosotros</span>
                </label>
            </div>
            <div v-if="currentTense.length > 0" class="bg-gray-800">
                <h2 class="ml-48 font-extrabold text-3xl">{{currentTense}}</h2>
                <div class="grid" :class="countRows">
                    <div class="text-right">Verb</div>
                    <div v-for="form in indicativeFormsList" class="font-bold ml-5 text-green-200">
                        {{ `${form[0].toUpperCase()}${form.slice(1)}` }}
                    </div>
                </div>
                <div v-for="item in dataLayout" class="grid" :class="countRows">
                    <div class="pt-4 text-right">{{ item.infinitive }}</div>
                    <div v-for="form in indicativeFormsList">
                        <PracticeInput
                            :correct-answer="item[form]"
                            :answer-key="`${item.infinitive}_${form}`"
                            :current-answer="answers[`${item.infinitive}_${form}`]"
                            @change-answer="onUpdateAnswer"
                        ></PracticeInput>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PracticeInput  from "@/Components/PracticeInput"
export default {
    name: "Conjugate",

    props: {
        conjugates: {
            type: Array,
            required: true
        }
    },
    components: { PracticeInput},
    data() {
        return {
            selectedTense: '',
            indicativeTense: ['present', 'preterite', 'imperfect', 'conditional', 'future'],
            indicativeForms: ['yo', 'tu', 'el', 'nosotros', 'vosotros', 'ellos'],
            answers: {},
            includeVosotros: false,
            conjugateList: [],
        }
    },
    created() {
        this.initAnswers()
        this.conjugateList = this.conjugates
    },
    computed: {
        countRows() {
            return this.includeVosotros ? 'grid-cols-7' : 'grid-cols-6'
        },
        currentTense()
        {
            if (this.selectedTense.length === 0) {
                return ''
            }
            const word = this.indicativeTense[this.selectedTense]
            return `Indicative ${word[0].toUpperCase()}${word.slice(1)}`
        },
        dataLayout()
        {
            let dataLayout = [];
            this.conjugateList.forEach(conjugate => {
                let tense = this.indicativeTense[this.selectedTense]
                dataLayout.push({
                    infinitive: conjugate[`infinitive`],
                    yo: conjugate[`indicative_${tense}_yo`],
                    tu: conjugate[`indicative_${tense}_tu`],
                    el: conjugate[`indicative_${tense}_el`],
                    nosotros: conjugate[`indicative_${tense}_nosotros`],
                    vosotros: conjugate[`indicative_${tense}_vosotros`],
                    ellos: conjugate[`indicative_${tense}_ellos`],
                })
            })
            return dataLayout
        },
        indicativeFormsList()
        {
            if (this.includeVosotros) return this.indicativeForms
            return [...this.indicativeForms].filter(form => form !== 'vosotros')
        },
    },
    methods: {
        initAnswers() {
            this.answers = {}
            this.answers = this.conjugates.reduce((acc, item) => {
                for (let form of this.indicativeForms) {
                    acc[`${item.infinitive}_${form}`] = '';
                }
                return acc;
            }, {});
        },
        onUpdateAnswer({key, value}) {
            this.answers[key] = value
        },
        shuffleVerbs() {
            this.conjugateList = this.conjugateList.sort(() => Math.random() - 0.5)
        },
    },
}
</script>

<style scoped>

</style>
