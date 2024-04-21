<template>
    <Modal v-if="showModal">
        <EditTodo @closeModal="closeModal()" :todo="todo" />
    </Modal>

    <div class="flex flex-col gap-5 rounded px-4 py-4 bg-white">
        <div class="flex items-center justify-between">
            <input type="text" :class="{ 'line-through font-bold text-green-500': todo.completed }"
                class="border-none w-full text-sm p-0" v-model="todo.title" disabled>
            <ShowOptions @click="showOptions = !showOptions" />
        </div>
        <TodoOptions @editTodo="openModal()" v-if="showOptions" :isCompleted="todo.completed" />
    </div>
</template>

<script setup>
import { ref } from 'vue'

import Modal from '@/Components/Modal.vue'
import EditTodo from '@/Pages/Auth/Partials/EditTodo.vue'
import ShowOptions from '@/Pages/Auth/Partials/ShowOptions.vue'
import TodoOptions from '@/Pages/Auth/Partials/TodoOptions.vue'

const { todo } = defineProps({
    todo: Object
})

const showModal = ref(false)

const openModal = () => showModal.value = true
const closeModal = () => showModal.value = false

const showOptions = ref(false)
</script>