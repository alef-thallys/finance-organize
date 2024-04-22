<template>
    <form @submit.prevent="submit" class="relative pt-10 flex flex-col gap-4 px-6 py-6 rounded bg-white">
        <ExitMenu @click="closeModal" class="absolute top-2 right-2 cursor-pointer text-gray-700" />

        <input type="text" class="border px-2 py-1 rounded border-gray-300 text-gray-700"
            @input="updateTitle($event.target.value)" :value="title">

        <input type="submit" class="cursor-pointer py-2 rounded bg-gray-700 text-white" value="update">
    </form>
</template>

<script setup>
import ExitMenu from '@/Components/Menu/ExitMenu.vue'

const { title } = defineProps({ title: String })
const emit = defineEmits(['closeModal', 'updateTitle', 'updateTodo'])

const submit = () => emit('updateTodo')
const closeModal = () => emit('closeModal')
const updateTitle = (value) => emit('updateTitle', value);
</script>