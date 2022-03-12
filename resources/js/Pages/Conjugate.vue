<template>
    <div class="p-16 bg-gray-800 text-white">
        <h1>Conjugate Full Verb</h1>
        <div>
            <select v-model="selectedVerb" key="selectedVerb" class="bg-gray-700">
                <option v-for="(verb, index) in conjugates" :value="index">{{ verb['infinitive'] }}</option>
            </select>
            <div v-if="selectedVerb > -1">
                <h2 class="font-extrabold text-3xl">{{ conjugates[selectedVerb].infinitive.capitalize() }}</h2>
                <div v-for="(map, tense) in conjugateMap">
                    <h3 class="font-extrabold text-xl">{{ tense.capitalize() }}</h3>
                    <div class="grid grid-cols-7 gap-0.5">
                        <div></div>
                        <div v-for="form in tenseForms(tense)">{{ form }}</div>
                    </div>
                    <div v-for="(elements, mode) in map">
                        <div class="grid grid-cols-7 gap-0.5">
                            <div class="font-extrabold">{{ mode.capitalize() }}</div>
                            <div v-for="form in elements">
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
    let answers = ref({})
    let selectedVerb = ref(0)
    let tenseForms = (tense)=> {
        return conjugateMap[tense][Object.keys(conjugateMap[tense])[0]]
    }
    let onUpdateAnswer = (key, value)=> {
        answers[key] = value
    }
</script>

<style scoped>

</style>
