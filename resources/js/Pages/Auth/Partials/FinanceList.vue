<template>
    <Modal v-if="showModal">
        <EditFinance @closeModal="toggleModal" @updateFinance="updateFinance" :form="form" />
    </Modal>

    <div class="flex flex-col gap-4 rounded px-4 py-4 bg-gray-800"
        :class="{ 'bg-green-500': finance.value > 0, 'bg-red-500': finance.value < 0 }">

        <div class="flex items-center justify-between">

            <span>
                {{ finance.title }}
            </span>

            <div class="flex items-center gap-4">

                <span>
                    {{ formatCurrency(finance.value) }}
                </span>

                <ShowOptions @click="toggleOptions" />

            </div>

        </div>

        <FinanceOptions v-if="showOptions" @editFinance="toggleModal" @deleteFinance="deleteFinance" />
    </div>

</template>

<script setup>
import { reactive, ref } from 'vue'
import { router } from '@inertiajs/vue3'

import Modal from '@/Components/Modal.vue'
import EditFinance from '@/Pages/Auth/Partials/EditFinance.vue'
import ShowOptions from '@/Pages/Auth/Partials/ShowOptions.vue'
import FinanceOptions from '@/Pages/Auth/Partials/FinanceOptions.vue'

const { finance } = defineProps({
    finance: { type: Object, required: true },
})

const form = reactive({
    title: finance.title,
    value: finance.value
})

const showOptions = ref(false)
const toggleOptions = () => showOptions.value = !showOptions.value

const showModal = ref(false)
const toggleModal = () => showModal.value = !showModal.value

const formatCurrency = (amount) => {
    return new Intl.NumberFormat('pt-BR',
        { style: 'currency', currency: 'BRL' }
    ).format(amount)
}

// update a finance
const updateFinance = () => {
    router.put(`/finances/${finance.id}`, form)
    toggleModal()
}

// delete a finance
const deleteFinance = () => router.delete(`/finances/${finance.id}`)
</script>
