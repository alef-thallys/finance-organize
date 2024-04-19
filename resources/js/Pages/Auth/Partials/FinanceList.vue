<template>
    <div class="flex flex-col gap-5 rounded px-4 py-4 border">
        <div class="flex items-center justify-between">
            <input type="text" class="border-none w-full text-sm p-0 bg-inherit" v-model="finance.name" disabled>

            <div class="flex items-center gap-4">
                <span class="font-semibold ">{{ formatCurrency(finance.amount) }}</span>
                <ShowOptions @click="showOptions = !showOptions" />
            </div>
        </div>

        <FinanceListOptions v-if="showOptions" />
    </div>
</template>

<script setup>
import { ref } from 'vue'

import ShowOptions from '@/Pages/Auth/Partials/ShowOptions.vue'
import FinanceListOptions from '@/Pages/Auth/Partials/FinanceOptions.vue'

defineProps({
    finance: {
        type: Object,
        required: true
    },

    formatCurrency: {
        type: Function,
        required: true
    }
})

const showOptions = ref(false)
</script>
