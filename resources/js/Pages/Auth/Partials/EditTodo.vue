<template>
    <form @submit.prevent="submit" class="relative py-10 flex flex-col gap-5 px-6 rounded w-full mx-5 bg-white">
        <ExitMenu @click="closeModal" class="absolute top-2 right-2 cursor-pointer text-gray-700" />

        <input type="text" class="border px-2 py-1 rounded border-gray-300 text-gray-700" v-model="form.title">

        <input type="submit" class="cursor-pointer py-2 rounded bg-gray-700 text-white" value="update">
    </form>
</template>

<script setup>
import ExitMenu from '@/Components/Menu/ExitMenu.vue'

const { form } = defineProps({
    form: { type: Object, required: true }
})

const emit = defineEmits(['closeModal', 'updateTodo'])

const submit = () => emit('updateTodo')
const closeModal = () => emit('closeModal')
</script>