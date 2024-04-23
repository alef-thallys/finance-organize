<template>

    <Head title="Todo" />

    <AuthLayout>
        <div class="flex flex-col gap-4 py-4 max-w-md mx-auto">
            <h1 class="text-xl text-center">Todos</h1>

            <CreateTodo @createTodo="createTodo()" :form="form" />

            <Filter @submitFilter="submitFilter($event)" componentName="todos" :filters="filters" />

            <div v-if="todos.length === 0" class="text-sm py-2 text-center rounded bg-blue-100 text-blue-500">
                There are no
                <span v-if="$page.url.split('=')[1] !== 'all'">
                    {{ $page.url.split('=')[1] }}
                </span>
                todos to show
            </div>

            <div v-if="errors && errors.title" class="text-sm py-2 text-center rounded bg-red-100 text-red-500">
                {{ errors.title }}
            </div>

            <div class="flex flex-col gap-2 text-[16px] text-gray-700">
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
import Filter from '@/Pages/Auth/Partials/Filter.vue'

const { todos, errors } = defineProps({
    todos: { type: Object, required: true },
    errors: { type: Object, required: false }
})

const form = reactive({ title: '' })

// create a todo
const createTodo = () => {
    router.post('/todos', form)
    form.title = ''
}

const filters = ['all', 'active', 'completed', 'alphabetical']

const submitFilter = (value) => {
    router.get('/todos', { filter: value })
}
</script>
