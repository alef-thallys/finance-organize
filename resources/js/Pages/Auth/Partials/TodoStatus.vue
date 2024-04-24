<template>
    <div class="flex flex-col gap-4 text-center rounded px-6 py-4 shadow-md bg-gray-900">
        <h2 class="text-xl">Todos</h2>

        <div class="rounded h-2 bg-blue-500">
            <div class="rounded h-2 bg-green-500" :style="`width: ${todoStats.percentage}%`"></div>
        </div>

        <div class="flex flex-col gap-1">
            <span>Completed: {{ todoStats.completed }} / {{ todoStats.total }} </span>

            <span v-if="todoStats.lastTodoCreation">
                Last todo creation: {{ todoStats.lastTodoCreation }}
            </span>

            <span v-else>No todos created</span>
        </div>
    </div>
</template>

<script setup>
const { todoStats } = defineProps({
    todoStats: Object
})
</script>