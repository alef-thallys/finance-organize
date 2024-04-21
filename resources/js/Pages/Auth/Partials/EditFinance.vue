<template>
    <form class="relative pt-10 flex flex-col gap-4 px-6 py-6 rounded bg-white">
        <ExitMenu @click="$emit('closeModal')" class="absolute top-2 right-2 cursor-pointer text-gray-700" />

        <input type="text" class="border px-2 py-1 rounded border-gray-300 text-gray-700" v-model="finance.name">

        <input type="number" class="border px-2 py-1 rounded border-gray-300 text-gray-700" v-model="finance.amount">

        <input type="submit" class="cursor-pointer py-2 rounded bg-gray-700 text-white" value="update">
    </form>
</template>

<script setup>
import ExitMenu from '@/Components/Menu/ExitMenu.vue'

defineEmits(['closeModal'])

const { finance } = defineProps({
    finance: {
        type: Object,
        required: true
    }
})
</script>