<template>

    <div class="p-40 bg-gray-900 text-white">
        <h1>Tense</h1>
        <div>
            <select v-model="selectedTense" key="selectedTense" class="bg-gray-700" @change="initAnswers">
                <option v-for="(tense, index) in indicativeTense" :value="index">{{ tense }}</option>
            </select>
            <div v-if="currentTense.length > 0" class="bg-gray-800">
                <h2 class="ml-48 font-extrabold text-3xl">{{currentTense}}</h2>

                <div class="grid grid-cols-7">
                    <div class="text-right">Verb</div>
                    <div v-for="form in indicativeForms" class="font-bold ml-5">
                        {{ `${form[0].toUpperCase()}${form.slice(1)}` }}
                    </div>
                </div>
                <div v-for="item in dataLayout" class="grid grid-cols-7">
                    <div class="pt-4 text-right">{{ item.infinitive }}</div>
                    <div v-for="form in indicativeForms">
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
        }
    },
    created() {
        this.initAnswers()
    },
    computed: {
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
            this.conjugates.forEach(conjugate => {
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
    },
}
</script>

<style scoped>

</style>
