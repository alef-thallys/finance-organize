<template>

    <Head title="Todo" />

    <AuthLayout>
        <div class="flex flex-col gap-4 py-4 max-w-md mx-auto">
            <h1 class="text-xl text-center">Todos</h1>

            <CreateTodo @updateTitle="updateTitle($event)" @createTodo="createTodo()" :title="form.title" />

            <div v-if="errors && errors.title" class="text-sm py-2 text-center rounded bg-red-100 text-red-500">
                {{ errors.title }}
            </div>

            <div class="flex flex-col gap-2 text-gray-700">
                <TodoList v-for="todo in todos" :key="todo.id" :todo="todo" />
            </div>
        </div>
    </AuthLayout>
</template>

<script setup>
import { Head, router } from '@inertiajs/vue3'
import { reactive } from 'vue'

import AuthLayout from '@/Layouts/AuthLayout.vue'
import CreateTodo from '@/Pages/Auth/Partials/CreateTodo.vue'
import TodoList from '@/Pages/Auth/Partials/TodoList.vue'

const { todos, errors } = defineProps({ todos: Array, errors: Object })
const form = reactive({ title: '' })

const updateTitle = (value) => form.title = value

// create a todo
const createTodo = () => {
    router.post('/todos', form)
    form.title = ''
}
</script>
