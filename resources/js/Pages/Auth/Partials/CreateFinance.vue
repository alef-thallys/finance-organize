<template>
    <form @submit.prevent="createFinance" class="flex flex-col gap-2 px-6 py-6 rounded bg-white">
        <input type="text" placeholder="ex. water bill" class="border px-2 py-1 rounded border-gray-300 text-gray-700" v-model="form.title">

        <input type="text" class="border px-2 py-1 rounded border-gray-300 text-gray-700" v-model="form.value">

        <input class="cursor-pointer py-2 rounded bg-gray-700 text-white" type="submit" value="create">
    </form>
</template>

<script setup>
const emit = defineEmits(['createFinance'])

const { form } = defineProps({
    form: { type: Object, required: true }
})

const createFinance = () => emit('createFinance')
</script>