<template>
    <Modal v-if="showModal">
        <EditTodo 
        @closeModal="toggleModal()" 
        @updateTitle="updateTitle($event)" 
        @updateTodo="updateTodo(todo.id)"
        :title="todo.title" />
    </Modal>

    <div class="flex flex-col gap-5 rounded px-4 py-4 bg-white">
        <div class="flex items-center justify-between">

            <span :class="{ 'line-through font-bold text-green-500': todo.completed }">
                {{ todo.title }}
            </span>

            <ShowOptions @click="toggleOptions()" />

        </div>

        <TodoOptions v-if="showOptions" 
        @completeTodoToggle="completeTodoToggle(todo.id)" 
        @editTodo="toggleModal()"
        @deleteTodo="deleteTodo(todo.id)" 
        :isCompleted="todo.completed" />
    </div>
</template>

<script setup>
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'

import Modal from '@/Components/Modal.vue'
import EditTodo from '@/Pages/Auth/Partials/EditTodo.vue'
import ShowOptions from '@/Pages/Auth/Partials/ShowOptions.vue'
import TodoOptions from '@/Pages/Auth/Partials/TodoOptions.vue'

const { todo } = defineProps({ todo: Object })

const showOptions = ref(false)
const toggleOptions = () => showOptions.value = !showOptions.value

const showModal = ref(false)
const toggleModal = () => showModal.value = !showModal.value

const updateTitle = (value) => { todo.title = value }

// complete or uncomplete a todo
const completeTodoToggle = (id) => router.put(`/todos/${id}`)

// delete a todo
const deleteTodo = (id) => router.delete(`/todos/${id}`)

// update a todo
const updateTodo = (id) => {
    router.put(`/todos/${id}`, { title: todo.title })
    toggleModal()
}
</script>