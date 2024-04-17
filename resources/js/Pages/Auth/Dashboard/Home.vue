<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue'
import { ref } from 'vue'
import { Head } from '@inertiajs/vue3'

const completed = ref(7);
const total = ref(12);
</script>

<template>

    <Head title="Home" />

    <AuthLayout>
        <div class="flex flex-col gap-4 bg-gray-700 text-white px-4 h-full">
            <h1 class="text-xl text-center pt-4">Dashboard</h1>

            <div class="flex flex-col gap-4">
                <div class="flex flex-col  gap-3 w-full rounded px-6 py-4 shadow-md text-center bg-gray-900">
                    <h2 class="text-xl">Todos</h2>

                    <div class="flex flex-col items-center gap-2">
                        <div class="rounded w-full h-2 bg-blue-500">
                            <div class="rounded h-2 bg-green-500"
                                :style="{ width: `${parseInt(completed / total * 100)}%` }"></div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1">
                        <span>Completed: {{ completed }} / {{ total }}</span>
                        <span>Last completed: 2 days ago</span>
                    </div>
                </div>
            </div>
        </div>
    </AuthLayout>
</template>