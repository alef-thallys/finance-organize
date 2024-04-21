<template>
    <div class="flex flex-col gap-2 w-2/3" :class="{ 'self-end ': message.name === 'Maria' }">
        <span v-if="message.name !== 'Maria'">{{ message.name }}</span>

        <p class="p-2 font-medium" :class="{
            'rounded-r-xl rounded-bl-xl text-gray-700 bg-white': message.name !== 'Maria',
            'rounded-l-xl rounded-br-xl text-white bg-blue-700': message.name === 'Maria'
        }">
            {{ message.message }}
        </p>
    </div>
</template>

<script setup>
const { message } = defineProps({
    message: {
        type: Object,
        required: true
    }
})
</script>