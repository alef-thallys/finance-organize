<template>
    <div class="flex gap-2 text-[16px]">
        <div class="flex flex-col rounded justify-center items-center gap-2 px-4 py-2 w-full bg-green-500">
            <p>Income</p>
            <span class="font-semibold">{{ formatCurrency(income) }}</span>
        </div>

        <div class="flex flex-col rounded justify-center items-center gap-2 px-4 py-2 w-full bg-red-500">
            <p>Expenses</p>
            <span class="font-semibold">{{ formatCurrency(expenses) }}</span>
        </div>
    </div>
</template>

<script setup>
const { formatCurrency, income, expenses } = defineProps({
    formatCurrency: {
        type: Function,
        required: true
    },

    income: {
        type: Number,
        required: true
    },

    expenses: {
        type: Number,
        required: true
    }
})
</script>