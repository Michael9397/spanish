<template>

    <div class="p-40 bg-gray-800 text-white">
        <h1>Conjugate</h1>
        <div>
            <select v-model="selectedVerb" key="selectedVerb" class="bg-gray-700">
                <option v-for="(verb, index) in conjugates" :value="index">{{ verb['infinitive'] }}</option>
            </select>
            <div v-if="selectedVerb > -1">
                <h2 class="ml-48 font-extrabold text-3xl">Indicative</h2>
                <div class="grid grid-cols-6">
                    <div></div>
                    <div v-for="tense in indicativeTense" class="font-bold ml-5">
                        {{ `${tense[0].toUpperCase()}${tense.slice(1)}` }}
                    </div>
<!--                    <div v-for="verbForm in indicativeForms">-->
<!--                        {{ `${verbForm[0].toUpperCase()}${verbForm.slice(1)}` }}-->
<!--                        <div v-for="tense in indicativeTense">-->
<!--                            <input type="text" v-model="conjugates[selectedVerb][`indicative_${tense}_${verbForm}`]">-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="text-right mt-4">Yo</div>
                    <div v-for="iCase in indicativeTense">
                        <PracticeInput :correct-answer="conjugates[selectedVerb][`indicative_${iCase}_yo`]"></PracticeInput>
                    </div>
                    <div class="text-right mt-4">Tu</div>
                    <div v-for="iCase in indicativeTense">
                        <PracticeInput :correct-answer="conjugates[selectedVerb][`indicative_${iCase}_tu`]"></PracticeInput>
                    </div>
                    <div class="text-right mt-4">El</div>
                    <div v-for="iCase in indicativeTense">
                        <PracticeInput :correct-answer="conjugates[selectedVerb][`indicative_${iCase}_el`]"></PracticeInput>
                    </div>
                    <div class="text-right mt-4">Nosotros</div>
                    <div v-for="iCase in indicativeTense">
                        <PracticeInput :correct-answer="conjugates[selectedVerb][`indicative_${iCase}_nosotros`]"></PracticeInput>
                    </div>
                    <div class="text-right mt-4">Vosotros</div>
                    <div v-for="iCase in indicativeTense">
                        <PracticeInput :correct-answer="conjugates[selectedVerb][`indicative_${iCase}_vosotros`]"></PracticeInput>
                    </div>
                    <div class="text-right mt-4">Ellos</div>
                    <div v-for="iCase in indicativeTense">
                        <PracticeInput :correct-answer="conjugates[selectedVerb][`indicative_${iCase}_ellos`]"></PracticeInput>
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
            selectedVerb: -1,
            indicativeTense: ['present', 'preterite', 'imperfect', 'conditional', 'future'],
            indicativeForms: ['yo', 'tu', 'el', 'nosotros', 'vosotros', 'ellos']
        }
    },
}
</script>

<style scoped>

</style>
