<template>

    <Head title="Dashboard" />

    <AuthLayout>
        <div class="flex flex-col gap-4 py-4 max-w-md mx-auto">
            <h1 class="text-xl text-center">Dashboard</h1>
            <TodoStatus :todoStats="todoStats" />
            <FinanceStatus :financeStats="financeStats" />
        </div>
    </AuthLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'

import AuthLayout from '@/Layouts/AuthLayout.vue'
import TodoStatus from '@/Pages/Auth/Partials/TodoStatus.vue'
import FinanceStatus from '@/Pages/Auth/Partials/FinanceStatus.vue'

const { todoStats, financeStats } = defineProps({
    todoStats: Object,
    financeStats: Object
})
</script>