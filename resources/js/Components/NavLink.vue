<script setup>
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href', 'active']);

</script>

<template>
    <Link
        :href="href"
        class="inline-flex items-center px-1 pt-1 text-sm leading-5 text-red-500 hover:text-red-400 focus:outline-none focus:border-indigo-300 transition  duration-150 ease-in-out"
    >
        <slot />
    </Link>
</template>
