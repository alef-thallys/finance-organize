<script setup>
import { Head } from '@inertiajs/vue3'

import AuthLayout from '@/Layouts/AuthLayout.vue'
import TodoOptions from '@/Components/TodoOptions.vue'
import ExpandIcon from '@/Components/ExpandIcon.vue'

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
        completed: false
    },
    {
        id: 5,
        title: 'Learn Laravel',
        completed: true
    },
    {
        id: 6,
        title: 'Take out trash',
        completed: false
    },
    {
        id: 7,
        title: 'Quack quack',
        completed: true
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

<template>

    <Head title="Todo" />

    <AuthLayout>
        <div class="flex flex-col gap-4 py-4 max-w-sm mx-auto">
            <h1 class="text-xl text-center">Todos</h1>

            <div class="flex flex-col gap-2 bg-white p-4 rounded">
                <input type="text" placeholder="ex. buy food"
                    class="border px-2 py-1 rounded border-gray-300 text-gray-700">
                <input class="cursor-pointer py-2 rounded bg-gray-700 text-white" type="submit" value="create">
            </div>

            <div class="flex">
                <select class="text-sm py-0.5 rounded bg-inherit">
                    <option disabled selected>Filter by</option>
                    <option>Oldest</option>
                    <option>Newest</option>
                    <option>Alphabetical</option>
                </select>
            </div>

            <div class="flex flex-col gap-2 text-gray-700">
                <div v-for="todo in todos" :key="todo.id" class="flex flex-col gap-2 rounded px-4 py-2 bg-white">

                    <div class="flex items-center justify-between">
                        <input type="text" :class="{ 'line-through font-bold text-green-500': todo.completed }"
                            class="border-none w-full text-sm p-0" v-model="todo.title" disabled>
                        <ExpandIcon />
                    </div>

                    <TodoOptions />
                </div>
            </div>
        </div>
    </AuthLayout>
</template>