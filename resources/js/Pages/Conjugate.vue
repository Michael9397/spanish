<template>
    <div class="p-16 bg-gray-800 text-white">
        <h1>Conjugate Full Verb</h1>
        <div>
            <div class="flex items-center h-full">
                <select v-model="selectedVerb" key="selectedVerb" class="bg-gray-700">
                    <option v-for="(verb, index) in conjugates" :value="index">{{ verb['infinitive'] }}</option>
                </select>
                <button @click="initAnswers" class="ml-4 bg-gray-700 rounded-lg p-2">Clear Answers</button>
                <label class="ml-4 flex items-center">
                    <input type="checkbox" v-model="includeVosotros">
                    <span class="pl-2">Include vosotros</span>
                </label>
            </div>
            <h2 class="font-extrabold text-3xl mt-8">{{ conjugates[selectedVerb].infinitive.capitalize() }}</h2>
            <div v-for="(map, tense) in conjugateMap" class="mb-8">
                <h3 class="font-extrabold text-xl">{{ tense.capitalize() }}</h3>
                <div class="grid gap-0.5" :style="gridRows">
                    <div></div>
                    <div v-for="form in tenseForms(tense)" class="pl-4">{{ form }}</div>
                </div>
                <div v-for="(elements, mode) in map">
                    <div class="grid gap-0.5" :style="gridRows">
                        <div class="font-extrabold mr-5 mt-4">{{ mode.capitalize() }}</div>
                        <div v-for="form in elementList(elements)" class="ml-4">
                            <PracticeInput
                                :correct-answer="conjugates[selectedVerb][`${tense}_${mode}_${form}`]"
                                :answer-key="`${tense}_${mode}_${form}`"
                                :current-answer="answers[`${tense}_${mode}_${form}`]"
                                @change-answer="onUpdateAnswer"
                            ></PracticeInput>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { conjugateMap } from "@/Partials/ConjugateMap"
    import PracticeInput  from "@/Components/PracticeInput"
    import { ref, computed } from 'vue'

    let props = defineProps({
        conjugates: {
            type: Array,
            required: true
        }
    })
    let includeVosotros = ref(false)
    let answers = ref({})
    const initAnswers = ()=> { answers = {} }
    initAnswers()
    let selectedVerb = ref(0)
    let tenseForms = (tense)=> {
        return conjugateMap[tense][Object.keys(conjugateMap[tense])[0]]
            .filter(tense => {
                return includeVosotros.value || tense !== 'vosotros'
            })
    }
    const gridRows = computed(()=> {
        let count = includeVosotros.value ? 7: 6
        return { gridTemplateColumns: `50px repeat(${count}, minmax(200px, 1fr))` }
    })
    let onUpdateAnswer = (key, value)=> {
        answers[key] = value
    }
    let elementList = (elements)=> {
        return elements.filter(element => {
            return includeVosotros.value || element !== 'vosotros'
        })
    }
</script>

<style scoped>

</style>
