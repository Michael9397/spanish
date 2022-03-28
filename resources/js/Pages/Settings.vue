<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3'
import {Inertia} from "@inertiajs/inertia"
import { reactive } from 'vue'

let { form } = defineProps({
    form: {
        type: Object,
        default: () => ({
            ar: 'hablar',
            er: 'comer',
            ir: 'subir',
        })
    }
})


const submit = () => {
    Inertia.post('/settings', {form})
}

</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <h2 class="text-white text-3xl">Settings</h2>
        <label>
            <h3>AR verb</h3>
            <select
                id="ar-verb"
                v-model="form.ar"
                class="text-gray-800"
            >
                <option value="random">Alternate through all AR verbs</option>
                <option value="ayudar">Ayudar</option>
                <option value="escuchar">Escuchar</option>
                <option value="hablar">Hablar</option>
                <option value="mirar">Mirar</option>
            </select>
        </label>
        <label>
            <h3>ER verb</h3>
            <select
                id="er-verb"
                v-model="form.er"
                class="text-gray-800"
            >
                <option value="random">Alternate through all ER verbs</option>
                <option value="comer">Comer</option>
                <option value="aprender">Aprender</option>
                <option value="deber">Deber</option>
                <option value="vender">Vender</option>
            </select>
        </label>
        <label>
            <h3>IR verb</h3>
            <select
                id="ir-verb"
                v-model="form.ir"
                class="text-gray-800"
            >
                <option value="random">Alternate through all IR verbs</option>
                <option value="subir">Subir</option>
                <option value="vivir">Vivir</option>
                <option value="permitir">Permitir</option>
                <option value="recibir">Recibir</option>
                <option value="abrir">Abrir</option>
            </select>
        </label>
        <br>
        <button
            id="save-settings"
            @click="submit"
            class="border border-white rounded-md mt-4 px-4 py-2 font-bold"
        >Save</button>
    </BreezeAuthenticatedLayout>
</template>

<script>
export default {
    name: "Settings"
}
</script>

<style scoped>
    h3 {
        margin-top: 1rem;
    }
</style>
