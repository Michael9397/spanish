<template>

    <div class="p-40 bg-gray-900 text-white">
        <div>
            <div class="flex items-center h-full">
                <select v-model="selectedMode" key="selectedMode" class="bg-gray-700" @change="initAnswers">
                    <option v-for="mode in modes" :value="mode">{{ mode.capitalize() }}</option>
                </select>
                <select v-model="selectedTense" key="selectedTense" class="bg-gray-700" @change="initAnswers">
                    <option v-for="tense in currentTenseList" :value="tense">{{ tense.capitalize() }}</option>
                </select>
                <button @click="shuffleVerbs" class="ml-4 bg-gray-700 rounded-lg p-2">Shuffle Verbs</button>
                <button @click="initAnswers" class="ml-4 bg-gray-700 rounded-lg p-2">Clear Answers</button>
                <label class="pl-4 flex items-center">
                    <input type="checkbox" v-model="includeVosotros">
                    <span class="pl-2">Include vosotros</span>
                </label>
            </div>
            <div class="bg-gray-800 p-6">
                <h2 class="font-extrabold text-3xl">{{ currentTenseTitle }}</h2>
                <div class="grid" :style="gridRows">
                    <div class="text-right max-w-xs"></div>
                    <div v-for="form in currentFormsList" class="font-bold ml-5 font-extrabold">
                        {{ form }}
                    </div>
                </div>
                <div v-for="item in dataLayout" class="grid" :style="gridRows">
                    <div class="pt-4 text-right font-extrabold max-w-xs">{{ item.infinitive }}</div>
                    <div v-for="form in currentFormsList">
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
import { conjugateMap } from "@/Partials/ConjugateMap"

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
            selectedMode: 'indicative',
            selectedTense: 'present',
            answers: {},
            conjugateList: [],
            includeVosotros: false,
            modes: Object.keys(conjugateMap),
        }
    },
    created() {
        this.initAnswers()
        this.conjugateList = this.conjugates
    },
    computed: {
        currentTenseTitle()
        {
            if (this.selectedTense.length === 0) {
                return ''
            }
            return `${this.selectedMode.capitalize()} ${this.selectedTense.capitalize()}`
        },
        currentTenseList()
        {
            if (this.selectedMode.length === 0) {
                return []
            }
            return Object.keys(conjugateMap[this.selectedMode])
        },
        currentFormsList()
        {
          if (!(this.selectedTense in conjugateMap[this.selectedMode])) {
              this.selectedTense = Object.keys(conjugateMap[this.selectedMode])[0]
          }
          return conjugateMap[this.selectedMode][this.selectedTense]
            .filter(form => {
                return this.includeVosotros || form !== 'vosotros'
            })
        },
        dataLayout()
        {
            let dataLayout = []
            let mode = this.selectedMode
            let tense = this.selectedTense
            this.conjugateList.forEach(conjugate => {
                let row = {
                    infinitive: conjugate.infinitive,
                }
                conjugateMap[mode][tense].forEach(form => {
                    row[form] = conjugate[`${mode}_${tense}_${form}`]
                })
                dataLayout.push(row)
            })
            return dataLayout
        },
        gridRows() {
            return { gridTemplateColumns: `50px repeat(${this.currentFormsList.length}, 1fr)` }
//            return `grid-cols-${this.currentFormsList.length + 1}`
        },
    },
    methods: {
        initAnswers() {
            this.answers = {}
//            this.answers = this.conjugates.reduce((acc, item) => {
//                for (let form of this.currentFormsList) {
//                    acc[`${item.infinitive}_${form}`] = '';
//                }
//                return acc;
//            }, {});
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
