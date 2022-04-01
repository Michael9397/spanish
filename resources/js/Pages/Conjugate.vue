<template>
    <div>
        <Head title="Conjugate Single" />

        <BreezeAuthenticatedLayout>
            <h2 class="my-4 text-2xl text-red-600">Conjugate Single Verb</h2>
            <div class="p-16 bg-gray-800 text-white">
                <div class="flex items-center h-full">
                    <select v-model="selectedVerb" key="selectedVerb" class="bg-gray-700">
                        <option v-for="(verb, index) in conjugates" :value="index">{{ verb['infinitive'] }}</option>
                    </select>
                    <button @click="initAnswers" class="ml-4 bg-gray-700 rounded-lg p-2">Clear Answers</button>
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
                            <div class="font-extrabold mr-5 mt-4">{{ mode.capitalizeEach() }}</div>
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
        </BreezeAuthenticatedLayout>
    </div>
</template>

<script setup>
    import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
    import { conjugateMap } from "@/Partials/ConjugateMap"
    import PracticeInput  from "@/Components/PracticeInput"
    import { ref, computed } from 'vue'
    import Inertia from "@inertiajs/inertia"

    let props = defineProps({
        conjugates: {
            type: Array,
            required: true
        }
    })
    const includeVosotros = ref(Inertia.Inertia.page.props?.auth?.user?.settings?.includeVosotros || false);
    const answers = ref({})
    const initAnswers = ()=> { answers.value = {} }
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
    const onUpdateAnswer = ({key, value})=> {
        answers.value[key] = value
    }
    let elementList = (elements)=> {
        return elements.filter(element => {
            return includeVosotros.value || element !== 'vosotros'
        })
    }
</script>

<style scoped>

</style>
