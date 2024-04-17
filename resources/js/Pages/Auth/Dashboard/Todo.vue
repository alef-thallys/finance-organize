<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue'
import { Head } from '@inertiajs/vue3'
import TodoActionsButton from '@/Components/TodoActionsButton.vue'
import TodoOptions from '@/Components/TodoOptions.vue'
import { ref } from 'vue'

const showOptions = ref({
    show: false,
    id: null
})

const enableEdit = ref({
    id: null
})


const toggleOptions = (id) => {
    showOptions.value.show = !showOptions.value.show
    showOptions.value.id = id
}

const toggleEdit = (id) => {
    enableEdit.value.id = id
}

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
        <div class="flex flex-col gap-4 bg-gray-700 text-white px-4 h-full">
            <h1 class="text-xl text-center pt-4">Todos</h1>

            <div class="flex flex-col gap-2 bg-white p-4 rounded">
                <input type="text" placeholder="ex. buy food"
                    class="border px-2 py-1 rounded border-gray-300 text-gray-700">
                <input class="cursor-pointer py-2 rounded bg-gray-700 text-white" type="submit" value="create">
            </div>

            <div class="flex">
                <select class="text-sm py-0.5 px-2 rounded bg-inherit">
                    <option disabled selected>Filter by</option>
                    <option>Oldest</option>
                    <option>Newest</option>
                    <option>Alphabetical</option>
                </select>
            </div>

            <div class="flex flex-col gap-2 pb-4">
                <div v-for="todo in todos" :key="todo.id"
                    class="flex flex-col gap-2 p-3 rounded text-gray-700 bg-white">

                    <div class="flex items-center justify-between">
                        <input type="text" :class="{ 'line-through font-bold text-green-500': todo.completed }"
                            class="border-none w-full text-sm p-0" v-model="todo.title" disabled>
                        <TodoActionsButton @click="toggleOptions(todo.id)" />
                    </div>


                    <TodoOptions :isCompleted="todo.completed" v-if="showOptions.show && showOptions.id === todo.id" />
                </div>
            </div>

        </div>
    </AuthLayout>
</template>