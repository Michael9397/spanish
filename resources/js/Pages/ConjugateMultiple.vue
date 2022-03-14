<template>

    <div class="2xl:p-40 bg-gray-900 text-white">
        <div>
            <div class="flex items-center h-full">
                <select id="mode-selector" v-model="selectedMode" key="selectedMode" class="bg-gray-700" @change="initAnswers">
                    <option v-for="mode in modes" :value="mode">{{ mode.capitalize() }}</option>
                </select>
                <select id="tense-selector" v-model="selectedTense" key="selectedTense" class="bg-gray-700" @change="initAnswers">
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
                <div v-for="item in dataLayout()" class="grid" :style="gridRows">
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

<script setup>
    import PracticeInput  from "@/Components/PracticeInput"
    import { conjugateMap } from "@/Partials/ConjugateMap"
    import { ref, computed } from "vue"
    let props = defineProps({
        conjugates: {
            type: Array,
            required: true
        }
    })
    let selectedMode = ref('indicative')
    let selectedTense = ref('present')
    let answers = ref({})
    let conjugateList = ref([])
    let includeVosotros = ref(false)
    let modes = ref(Object.keys(conjugateMap))

    const currentTenseList = computed(()=> {
        return Object.keys(conjugateMap[selectedMode.value])
    })

    const onUpdateAnswer = ({key, value})=> {
        answers[key] = value
    }
    const shuffleVerbs = ()=> {
        conjugateList = conjugateList.sort(() => Math.random() - 0.5)
    }
    const initAnswers = ()=> { answers = {} }
    initAnswers()
    conjugateList = props.conjugates

    const currentTenseTitle = computed(()=> {
        return `${selectedMode.value.capitalize()} ${selectedTense.value.capitalize()}`
    })

    let currentFormsList = computed(()=> {
        if (!(
            selectedTense.value in conjugateMap[selectedMode.value]
        )) {
            selectedTense.value = Object.keys(conjugateMap[selectedMode.value])[0]
        }
        return conjugateMap[selectedMode.value][selectedTense.value]
            .filter(form => {
                return includeVosotros.value || form !== 'vosotros'
            })
    })
    const gridRows = computed(()=> {
        return { gridTemplateColumns: `50px repeat(${currentFormsList.value.length}, minmax(200px, 1fr))` }
    })

    let dataLayout = ()=> {
        let dataLayout = []
        let mode = selectedMode.value
        let tense = selectedTense.value
        conjugateList.forEach(conjugate => {
            let row = {
                infinitive: conjugate.infinitive,
            }
            conjugateMap[mode][tense].forEach(form => {
                row[form] = conjugate[`${mode}_${tense}_${form}`]
            })
            dataLayout.push(row)
        })

        return dataLayout
    }
</script>

<style scoped>

</style>
