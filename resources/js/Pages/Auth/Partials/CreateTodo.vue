<template>
    <form @submit.prevent="createTodo" class="flex flex-col gap-2 px-6 py-6 rounded bg-white">
        <input type="text" placeholder="ex. buy food" class="border px-2 py-1 rounded border-gray-300 text-gray-700"
            v-model="form.title">

        <input type="submit" class="cursor-pointer py-2 rounded bg-gray-700" value="create">
    </form>
</template>

<script setup>
const emit = defineEmits(['createTodo', 'updateTitle'])
const { form } = defineProps({
    form: { type: Object, required: true }
})

const createTodo = () => emit('createTodo');
</script>