<script setup>
import { Head } from '@inertiajs/vue3'
import { ref, onMounted } from 'vue'

import AuthLayout from '@/Layouts/AuthLayout.vue'
import ExpandIcon from '@/Components/ExpandIcon.vue'
import FinanceOptions from '@/Components/FinanceOptions.vue'

const incomeTotal = ref(0)
const expensesTotal = ref(0)

const finances = ref([
    { id: 1, name: 'Rent', amount: 193 },
    { id: 2, name: 'Electric Bill', amount: -230 },
    { id: 3, name: 'Gas Bill', amount: -21 },
    { id: 4, name: 'Internet Bill', amount: -42 },
    { id: 5, name: 'Salary', amount: 5500 }
])

onMounted(() => {
    finances.value.forEach(({ amount }) => (amount >= 0 ? incomeTotal.value += amount : expensesTotal.value += amount))
});

const handleMoneyFormat = (amount) => {
    return new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(amount)
};
</script>

<template>

    <Head title="Finance" />

    <AuthLayout>
        <div class="flex flex-col gap-4 py-4 max-w-sm mx-auto">
            <h1 class="text-xl text-center">Finance</h1>

            <div class="flex gap-2 text-[16px] text-white">
                <div class="flex flex-col rounded justify-center items-center gap-2 bg-green-500 px-4 py-2 w-full">
                    <p>Income</p>
                    <span class="font-semibold">{{ handleMoneyFormat(incomeTotal) }}</span>
                </div>

                <div class="flex flex-col rounded justify-center items-center gap-2 bg-red-500 px-4 py-2 w-full">
                    <p>Expenses</p>
                    <span class="font-semibold">{{ handleMoneyFormat(expensesTotal) }}</span>
                </div>
            </div>

            <div class="flex flex-col gap-2 bg-white p-4 rounded">
                <input type="text" placeholder="ex. water bill"
                    class="border px-2 py-1 rounded border-gray-300 text-gray-700">

                <input type="number" placeholder="-100" class="border px-2 py-1 rounded border-gray-300 text-gray-700">

                <input class="cursor-pointer py-2 rounded bg-gray-700 text-white" type="submit" value="add">
            </div>

            <div class="flex">
                <select class="text-sm py-0.5 rounded bg-inherit">
                    <option disabled selected>Filter by</option>
                    <option>Oldest</option>
                    <option>Newest</option>
                    <option>Amount</option>
                    <option>Income</option>
                    <option>Expenses</option>
                </select>
            </div>

            <div class="flex flex-col gap-2 text-[16px]">
                <div v-for="finance in finances" :key="finances.id"
                    :class="{ 'bg-green-500': finance.amount > 0, 'bg-red-500': finance.amount < 0 }"
                    class="flex flex-col gap-2 rounded px-4 py-2">

                    <div class="flex justify-between">
                        <p>{{ finance.name }}</p>

                        <div class="flex items-center gap-4">
                            <p class="font-semibold ">
                                {{ handleMoneyFormat(finance.amount) }}
                            </p>
                            <ExpandIcon />
                        </div>
                    </div>

                    <FinanceOptions />
                </div>
            </div>
        </div>
    </AuthLayout>
</template>