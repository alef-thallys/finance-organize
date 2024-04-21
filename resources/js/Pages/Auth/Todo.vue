<template>

    <Head title="Todo" />

    <AuthLayout>
        <div class="flex flex-col gap-4 py-4 max-w-md mx-auto">
            <h1 class="text-xl text-center">Todos</h1>

            <CreateTodo />
            <FilterBy :options="filterOptions" />

            <div class="flex flex-col gap-2 text-gray-700">
                <TodoList v-for="todo in todos" :key="todo.id" :todo="todo" />
            </div>
        </div>
    </AuthLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'

import AuthLayout from '@/Layouts/AuthLayout.vue'
import CreateTodo from '@/Pages/Auth/Partials/CreateTodo.vue'
import FilterBy from '@/Pages/Auth/Partials/FilterBy.vue'
import TodoList from '@/Pages/Auth/Partials/TodoList.vue'

const filterOptions = [
    { id: 1, name: 'Recent' },
    { id: 2, name: 'Completed' },
    { id: 3, name: 'Alphabet' }
]

const todos = [
    {
        id: 1,
        title: 'Buy food',
        completed: true
    },
    {
        id: 2,
        title: 'Cook food',
        completed: false
    },
    {
        id: 3,
        title: 'Clear the room',
        completed: true
    },
    {
        id: 4,
        title: 'Learn Vue',
        completed: true
    },
    {
        id: 5,
        title: 'Learn Laravel',
        completed: false
    },
    {
        id: 6,
        title: 'Take out trash',
        completed: false
    },
    {
        id: 7,
        title: 'Quack quack',
        completed: false
    },
    {
        id: 8,
        title: 'Jump up and down',
        completed: false
    },
    {
        id: 9,
        title: 'Climb up a tree',
        completed: true
    },
    {
        id: 10,
        title: 'Dance',
        completed: false
    },
]
</script>