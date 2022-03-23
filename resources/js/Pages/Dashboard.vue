<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="text-white bg-grey-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-gray-600 border-gray-200">
                        <h2 class="text-3xl">Suggested method to proceed...</h2>
                        <br>
                        <p>Practice in multiple ways.  This is designed to not get stagnant.</p>
                        <br>
                        <p>I would start with practing with hablar in Indicative Present</p>
                        <br>
                        <p>Once you learn an ar verb (hablar), and er verb (comer), and an ir verb (subir), I would start practing them together on the conjugate multiple verbs pagge.</p>

                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
