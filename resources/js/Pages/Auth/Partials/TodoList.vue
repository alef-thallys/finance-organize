<template>
    <Modal v-if="showModal">
        <EditTodo @closeModal="toggleModal" @updateTodo="updateTodo" :form="form" />
    </Modal>

    <div class="flex flex-col gap-4 rounded px-4 py-4 bg-white">
        <div class="flex items-center justify-between">

            <span :class="{ 'line-through font-bold text-green-500': todo.completed }">
                {{ todo.title }}
            </span>

            <ShowOptions @click="toggleOptions" />

        </div>

        <TodoOptions v-if="showOptions" 
        @completeTodoToggle="completeTodoToggle" 
        @editTodo="toggleModal" 
        @deleteTodo="deleteTodo" 
        :isCompleted="todo.completed" />
    </div>
</template>

<script setup>
import { reactive, ref } from 'vue'
import { router } from '@inertiajs/vue3'

import Modal from '@/Components/Modal.vue'
import EditTodo from '@/Pages/Auth/Partials/EditTodo.vue'
import ShowOptions from '@/Pages/Auth/Partials/ShowOptions.vue'
import TodoOptions from '@/Pages/Auth/Partials/TodoOptions.vue'

const { todo } = defineProps({
    todo: { type: Object, required: true }
})

const form = reactive({ title: todo.title })

const showOptions = ref(false)
const toggleOptions = () => showOptions.value = !showOptions.value

const showModal = ref(false)
const toggleModal = () => showModal.value = !showModal.value

// complete or uncomplete a todo
const completeTodoToggle = () => router.put(`/todos/${todo.id}`)

// update a todo
const updateTodo = () => {
    router.put(`/todos/${todo.id}`, form)
    toggleModal()
}

// delete a todo
const deleteTodo = () => router.delete(`/todos/${todo.id}`)
</script>