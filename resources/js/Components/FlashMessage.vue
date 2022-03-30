<template>
    <div
        v-if="$page.props.flash.success && !hasBeenClosed.success"
        class="background-success w-full p-4 flex justify-between mb-6 rounded-lg"
    >
        <div>{{ $page.props.flash.success }}</div>
        <div @click="hasBeenClosed.success = true">X</div>
    </div>
    <div
        v-if="$page.props.flash.error && !hasBeenClosed.error"
        class="bg-red-800 w-full p-4 flex justify-between mb-6 rounded-lg"
    >
        <div>{{ $page.props.flash.error }}</div>
        <div @click="hasBeenClosed.error = true">X</div>
    </div>

</template>

<script setup>
    import { reactive, onMounted } from 'vue'

    let hasBeenClosed = reactive({
        success: false,
        'error': false,
    })

    onMounted(()=>  {
        hasBeenClosed.success = true
        hasBeenClosed.error = true
        hasBeenClosed.success = false
        hasBeenClosed.error = false
    })



</script>

<style scoped>
     .background-success {
         /*background: linear-gradient(to right, #00d1b2, #3fdd8f);*/
         background-image: linear-gradient(to right, rgb(74 222 128), rgb(22 163 74));
         background-size: 300%;
         background-position: right;
         animation: .5s ease-out 0s 1 slide-gradient;
         /* rgb(22 101 52) bg-green-800 */
         /* rgb(22 163 74) bg-green-600 */
         /* rgb(74 222 128) bg-green-400 */
     }
     .background-success:hover {
         background-position: left;
     }

     @keyframes slide-gradient {
         0% {
             background-position: right;
         }
         50% {
             background-position: left;
         }
         100% {
             background-position: right;
         }
     }
</style>
