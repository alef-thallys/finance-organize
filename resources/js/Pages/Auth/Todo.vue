<template>

    <Head title="Todo" />

    <AuthLayout>
        <div class="flex flex-col gap-4 py-4 max-w-md mx-auto">
            <h1 class="text-xl text-center">Todos</h1>

            <CreateTodo @updateTitle="updateTitle($event)" @createTodo="createTodo()" :title="form.title" />

            <select @input="filterTodos($event.target.value)"
                class="border px-2 py-1 rounded bg-inherit border-gray-300">
                <option value="default" disabled :selected="$page.url === '/todos'">
                    Filter by
                </option>

                <option v-for="filter in filters" :key="filter" :value="filter"
                    :selected="$page.url === '/todos?filter=' + filter">
                    {{ filter.slice(0, 1).toUpperCase() + filter.slice(1) }}
                </option>
            </select>

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

const filters = ['all', 'active', 'completed', 'alphabetical']

const filterTodos = (value) => {
    router.get('/todos', { filter: value })
}
</script>
