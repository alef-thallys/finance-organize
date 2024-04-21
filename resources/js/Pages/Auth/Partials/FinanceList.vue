<template>
    <Modal v-if="showModal">
        <EditFinance @closeModal="closeModal()" :finance="finance" />
    </Modal>

    <div class="flex flex-col gap-4 rounded px-4 py-4 font-bold"
        :class="{ 'bg-green-500': finance.amount > 0, 'bg-red-500': finance.amount < 0 }">
        <div class="flex items-center justify-between">
            <input type="text" class="border-none w-full text-sm p-0 bg-inherit" v-model="finance.name" disabled>

            <div class="flex items-center gap-5">
                <span class="font-semibold ">{{ formatCurrency(finance.amount) }}</span>
                <ShowOptions @click="showOptions = !showOptions" />
            </div>
        </div>
        <FinanceListOptions @editFinance="openModal()" v-if="showOptions" />
    </div>
</template>

<script setup>
import { ref } from 'vue'

import Modal from '@/Components/Modal.vue'
import EditFinance from '@/Pages/Auth/Partials/EditFinance.vue'
import ShowOptions from '@/Pages/Auth/Partials/ShowOptions.vue'
import FinanceListOptions from '@/Pages/Auth/Partials/FinanceOptions.vue'

const { finance, formatCurrency } = defineProps({
    finance: {
        type: Object,
        required: true
    },

    formatCurrency: {
        type: Function,
        required: true
    }
})

const showModal = ref(false)

const openModal = () => showModal.value = true
const closeModal = () => showModal.value = false

const showOptions = ref(false)
</script>
