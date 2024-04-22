<template>
    <div class="fixed top-[4rem] left-0 flex flex-col w-52 px-4 py-1 rounded-r-3xl shadow-md z-50 bg-white">
        <ExitMenu @click="$emit('closeMenu')" class="absolute top-3 right-3 cursor-pointer" />

        <Link v-for="option in menuOpions" :href="option.link" class="py-2 w-fit"
            :class="{ 'font-bold text-blue-500': $page.component == option.path }">
        {{ option.name }}
        </Link>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ExitMenu from '@/Components/Menu/ExitMenu.vue'

const menuOpions = [
    {
        name: 'Dashboard',
        path: 'Auth/Dashboard',
        link: '/'
    },
    {
        name: 'Todo',
        path: 'Auth/Todo',
        link: '/todos'
    },
    {
        name: 'Finance',
        path: 'Auth/Finance',
        link: '/finances'
    },
    {
        name: 'Chat',
        path: 'Auth/Chat',
        link: '/chats'
    },
    {
        name: 'Logout',
        link: '/users/logout'
    }
]
</script>