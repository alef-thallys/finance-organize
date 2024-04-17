<script setup>

defineProps({
    isCompleted: Boolean
})
</script>

<template>
    <div class="flex justify-end gap-4">
        <input type="button" class="text-sm cursor-pointer text-blue-500" :value="isCompleted ? 'uncomplete' : 'complete'" />
        <input type="button" class="text-sm cursor-pointer text-blue-500" value="edit" />
        <input type="button" class="text-sm cursor-pointer text-blue-500" value="delete" />
    </div>
</template>