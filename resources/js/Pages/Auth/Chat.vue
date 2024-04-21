<template>

    <Head title="Chat Room" />

    <AuthLayout :showFooter="false">
        <div class="flex flex-col gap-4 py-4 max-w-md mx-auto h-[calc(100vh-52px)]">
            <h1 class="text-xl text-center ">Chat Room</h1>

            <div class="flex flex-grow flex-col gap-4 py-4 px-2 overflow-scroll border-y border-gray-500">
                <MessageDiv v-for="message in messages" :key="message.id" :message="message" />
            </div>

            <div class="flex gap-1">
                <input type="text" class="w-full px-2 py-1 rounded border-gray-300 text-gray-700"
                    placeholder="type your message...">
                <input type="submit" class="cursor-pointer p-2 rounded bg-blue-700" value="send">
            </div>
        </div>
    </AuthLayout>

</template>

<script setup>
import { Head } from '@inertiajs/vue3'

import AuthLayout from '@/Layouts/AuthLayout.vue'
import MessageDiv from '@/Pages/Auth/Partials/MessageDiv.vue'

const messages = [
    {
        id: 1,
        name: 'Maria',
        message: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta aliquid consequatur, voluptate itaque error'
    },
    {
        id: 2,
        name: 'John',
        message: 'Consectetur adipisicing elit. Dicta aliquid consequatur, voluptate itaque error'
    },
    {
        id: 3,
        name: 'Elena',
        message: 'Orem ipsum dolor, sit amet consectetur adipisicing elit. Dicta aliquid consequatur, voluptate itaque error'
    },
    {
        id: 4,
        name: 'Maria',
        message: 'Elit. Dicta aliquid consequatur, voluptate itaque error'
    },
    {
        id: 5,
        name: 'Elena',
        message: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta aliquid consequatur, voluptate itaque error'
    },
    {
        id: 6,
        name: 'Maria',
        message: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta aliquid consequatur, voluptate itaque error'
    },
    {
        id: 7,
        name: 'Elena',
        message: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta aliquid consequatur, voluptate itaque error'
    },
]
</script>