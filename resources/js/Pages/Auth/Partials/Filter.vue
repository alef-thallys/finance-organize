<template>
    <select @input="submitFilter($event.target.value)" class="border px-2 py-1 rounded bg-inherit border-gray-300">
        <option value="default" disabled :selected="$page.url === `/${componentName}`">
            Filter by
        </option>

        <option v-for="filter in filters" :key="filter" :value="filter"
            :selected="$page.url === `/${componentName}?filter=` + filter">
            {{ filter.slice(0, 1).toUpperCase() + filter.slice(1) }}
        </option>
    </select>
</template>

<script setup>
const { filters, componentName } = defineProps({
    filters: { type: Array, required: true },
    componentName: { type: String, required: true }
})

const emit = defineEmits(['submitFilter'])
const submitFilter = (value) => emit('submitFilter', value)
</script>