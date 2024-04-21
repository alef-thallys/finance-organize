<template>

    <Head title="Finance" />

    <AuthLayout>
        <div class="flex flex-col gap-4 py-4 max-w-md mx-auto">
            <h1 class="text-xl text-center">Finance</h1>

            <IncomeExpenseTotal :formatCurrency="formatCurrency" :income="income" :expenses="expenses" />
            <CreateFinance />
            <FilterBy :options="filterOptions" />

            <div class="flex flex-col gap-2 text-[16px]">
                <FinanceList v-for="finance in finances" :key="finances.id" :finance="finance"
                    :formatCurrency="formatCurrency" />
            </div>
        </div>
    </AuthLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import { ref, onMounted } from 'vue'

import AuthLayout from '@/Layouts/AuthLayout.vue'
import IncomeExpenseTotal from '@/Pages/Auth/Partials/IncomeExpenseTotal.vue'
import CreateFinance from '@/Pages/Auth/Partials/CreateFinance.vue'
import FilterBy from '@/Pages/Auth/Partials/FilterBy.vue'
import FinanceList from '@/Pages/Auth/Partials/FinanceList.vue'

const filterOptions = [
    { id: 1, name: 'Income' },
    { id: 2, name: 'Expenses' }
]

const finances = ref([
    { id: 1, name: 'Rent', amount: 193 },
    { id: 2, name: 'Electric Bill', amount: -230 },
    { id: 3, name: 'Gas Bill', amount: -21 },
    { id: 4, name: 'Internet Bill', amount: -42 },
    { id: 5, name: 'Salary', amount: 5500 }
])

const income = ref(0);
const expenses = ref(0);

const incomeExpenseTotal = () => {
    finances.value.forEach((finance) => {
        finance.amount > 0 ? income.value += finance.amount : expenses.value += finance.amount
    })
}

const formatCurrency = (amount) => {
    return new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(amount)
}

onMounted(() => {
    incomeExpenseTotal()
})
</script>