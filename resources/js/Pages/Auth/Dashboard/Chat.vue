<script setup>
import { Head } from '@inertiajs/vue3'
import { ref } from 'vue'

import AuthLayout from '@/Layouts/AuthLayout.vue'

const messages = ref([
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
])
</script>

<template>

    <Head title="Chat Room" />


    <AuthLayout :showFooter="false">
        <div class="flex flex-col gap-4 py-4 max-w-sm mx-auto h-[calc(100vh-52px)]">
            <h1 class="text-xl text-center ">Chat Room</h1>

            <div class="flex flex-grow flex-col gap-4 py-4 px-2 border-y border-gray-500 overflow-scroll">

                <div v-for="message in messages" class="flex flex-col gap-2 w-2/3"
                    :class="{ 'self-end ': message.name === 'Maria' }">

                    <span v-if="message.name !== 'Maria'">{{ message.name }} says:</span>

                    <p class="p-2 font-medium" :class="{
                        'rounded-r-xl rounded-bl-xl text-gray-700 bg-white': message.name !== 'Maria',
                        'rounded-l-xl rounded-br-xl text-white bg-blue-700': message.name === 'Maria'
                    }">
                        {{ message.message }}
                    </p>
                </div>

            </div>

            <div class="flex gap-2">
                <input type="text" class="border w-full px-2 py-1 rounded border-gray-300 text-gray-700"
                    placeholder="type your message...">
                <input type="submit" class="cursor-pointer p-2 rounded bg-blue-700 text-white" value="send">
            </div>
        </div>
    </AuthLayout>

</template>