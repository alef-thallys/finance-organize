<template>
    <div class="flex flex-col gap-4 text-center rounded px-6 py-4 shadow-md bg-gray-900">
        <h2 class="text-xl">Finance</h2>

        <div class="flex flex-col gap-2">
            <div class="flex gap-2">
                <div class="flex flex-col w-full rounded gap-2 px-4 py-2 bg-green-500">
                    <p>Incomes</p>
                    <span class="font-semibold">{{ formatCurrency(financeStats.income) }}</span>
                </div>

                <div class="flex flex-col w-full rounded gap-2 px-4 py-2 bg-red-500">
                    <p>Expenses</p>
                    <span class="font-semibold">{{ formatCurrency(financeStats.expenses) }}</span>
                </div>
            </div>

            <div class="flex flex-col rounded gap-2 px-4 py-2 bg-blue-500">
                <p>Total</p>
                <span class="font-semibold">{{ formatCurrency(financeStats.total) }}</span>
            </div>
        </div>


        <span v-if="financeStats.lastFinanceCreation">
            Last finance creation: {{ financeStats.lastFinanceCreation }}
        </span>

        <span v-else>No finances created</span>

    </div>
</template>

<script setup>
const { financeStats } = defineProps({
    financeStats: Object
})

const formatCurrency = (amount) => {
    return new Intl.NumberFormat('pt-BR',
        { style: 'currency', currency: 'BRL' }
    ).format(amount)
}
</script>