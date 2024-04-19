<script setup>
import { Link } from '@inertiajs/vue3'
import ExitIcon from '@/Components/ExitIcon.vue'

defineEmits(['closeDashboard'])
</script>

<template>
    <div
        class="fixed top-[4rem] left-0 flex flex-col w-52 px-4 py-1 rounded-r-3xl shadow-md text-gray-700 bg-white z-10">

        <ExitIcon @click="$emit('closeDashboard')" class="absolute top-3 right-3 cursor-pointer" />

        <Link class="py-2 w-fit" href="/" :class="{ 'underline font-bold': $page.component === 'Auth/Dashboard/Dashboard' }">
        Dashboard
        </Link>

        <Link class="py-2 w-fit" href="/todo"
            :class="{ 'underline font-bold': $page.component === 'Auth/Dashboard/Todo' }">
        Todo List
        </Link>

        <Link class="py-2 w-fit" href="/finance"
            :class="{ 'underline font-bold': $page.component === 'Auth/Dashboard/Finance' }">
        Finance Tracker
        </Link>

        <Link class="py-2 w-fit" href="/chat"
            :class="{ 'underline font-bold': $page.component === 'Auth/Dashboard/Chat' }">
        Chat Room
        </Link>

        <!-- 
        <Link class="py-2" href="/settings"
            :class="{ 'underline font-bold': $page.component === 'Auth/Dashboard/Settings' }">
        Settings
        </Link> -->

        <Link class="py-2 w-fit" href="/logout">
        Logout
        </Link>
    </div>
</template>