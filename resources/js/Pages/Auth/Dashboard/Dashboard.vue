<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue'
import { Head } from '@inertiajs/vue3'
</script>

<template>

    <Head title="Dashboard" />

    <AuthLayout>
        <div class="flex flex-col gap-4 py-4 max-w-sm mx-auto">
            <h1 class="text-xl text-center">Dashboard</h1>

            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-3 w-full rounded px-6 py-4 shadow-md text-center bg-gray-900">
                    <h2 class="text-xl">Todos</h2>

                    <div class="flex flex-col items-center gap-2">
                        <div class="rounded w-full h-2 bg-blue-500">
                            <div class="rounded h-2 bg-green-500 w-7/12"></div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1">
                        <span>Completed: 7 / 12</span>
                        <span>Last todo creation: 2 days ago</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-3 w-full rounded px-6 py-4 shadow-md text-center bg-gray-900">
                    <h2 class="text-xl">Finance</h2>

                    <div class="flex flex-col items-center gap-2">
                        <div class="flex flex-col gap-2 text-[16px] text-white">
                            <div class="flex gap-2">
                                <div
                                    class="flex flex-col rounded justify-center items-center gap-2 bg-green-500 px-4 py-2 w-full">
                                    <p>Income</p>
                                    <span class="font-semibold">$5.694.00</span>
                                </div>

                                <div
                                    class="flex flex-col rounded justify-center items-center gap-2 bg-red-500 px-4 py-2 w-full">
                                    <p>Expenses</p>
                                    <span class="font-semibold">-$293.00</span>
                                </div>
                            </div>
                            <div
                                class="flex flex-col rounded justify-center items-center gap-2 bg-blue-500 px-4 py-2 w-full">
                                <p>Total</p>
                                <span class="font-semibold">$5.401.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1">
                        <span>Last finance creation: 12 min ago</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-3 w-full rounded px-6 py-4 shadow-md text-center bg-gray-900">
                    <h2 class="text-xl">ChatRoom</h2>

                    <div class="flex flex-col gap-1">
                        <span>6 Users online</span>

                        <div class="flex gap-5 rounded p-2 overflow-x-auto bg-gray-800 my-2">
                            <div class="flex items-center gap-2 min-w-fit">
                                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                <span>Maria Hernandez</span>
                            </div>

                            <div class="flex items-center gap-2 min-w-fit">
                                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                <span>Karen Perez</span>
                            </div>

                            <div class="flex items-center gap-2 min-w-fit">
                                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                <span>Christian Rodriguez</span>
                            </div>

                            <div class="flex items-center gap-2 min-w-fit">
                                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                <span>Luisa Ramirez</span>
                            </div>

                            <div class="flex items-center gap-2 min-w-fit">
                                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                <span>Rodrigo Gutierrez</span>
                            </div>

                            <div class="flex items-center gap-2 min-w-fit">
                                <div class="w-2 h-2 rounded-full bg-green-500"></div>
                                <span>David Vasquez</span>
                            </div>
                        </div>
                        <span>Last message sent: 2 min ago</span>
                    </div>
                </div>
            </div>
        </div>
    </AuthLayout>
</template>