<template>

    <Head title="Dashboard" />

    <AuthLayout>
        <div class="flex flex-col gap-4 py-4 max-w-sm mx-auto">
            <h1 class="text-xl text-center">Dashboard</h1>

            <TodoStatus />
            <FinanceStatus />
            <ChatRoomStatus />
        </div>
    </AuthLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'

import AuthLayout from '@/Layouts/AuthLayout.vue'
import TodoStatus from '@/Pages/Auth/Partials/TodoStatus.vue'
import FinanceStatus from '@/Pages/Auth/Partials/FinanceStatus.vue'
import ChatRoomStatus from '@/Pages/Auth/Partials/ChatRoomStatus.vue'
</script>