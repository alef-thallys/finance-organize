<template>
    <div class="flex flex-col gap-5 rounded px-4 py-4 bg-white">
        <div class="flex items-center justify-between">
            <input type="text" :class="{ 'line-through font-bold text-green-500': todo.completed }"
                class="border-none w-full text-sm p-0" v-model="todo.title" disabled>
            <ShowOptions @click="showOptions = !showOptions" />
        </div>
        <TodoOptions v-if="showOptions" :isCompleted="todo.completed" />
    </div>
</template>

<script setup>
import ShowOptions from '@/Pages/Auth/Partials/ShowOptions.vue'
import TodoOptions from '@/Pages/Auth/Partials/TodoOptions.vue'

import { ref } from 'vue'

defineProps({
    todo: Object
})

const showOptions = ref(false)
</script>