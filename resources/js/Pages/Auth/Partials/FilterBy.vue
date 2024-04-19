<template>
    <div class="flex">
        <select class="text-sm py-0.5 rounded bg-inherit">
            <option disabled selected>Filter by</option>
            <option v-for="option in options" :key="option.id">{{ option.name }}</option>
        </select>
    </div>
</template>

<script setup>
defineProps({
    options: {
        type: Object,
        required: true
    }
})
</script>