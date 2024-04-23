<template>

    <Head title="Finance" />

    <AuthLayout>
        <div class="flex flex-col gap-4 py-4 max-w-md mx-auto">
            <h1 class="text-xl text-center">Finance</h1>

            <CreateFinance @createFinance="createFinance" :form="form" />

            <div v-if="errors && errors.title" class="text-sm py-2 text-center rounded bg-red-100 text-red-500">
                {{ errors.title }}
            </div>

            <div v-if="errors && errors.value" class="text-sm py-2 text-center rounded bg-red-100 text-red-500">
                {{ errors.value }}
            </div>

            <Filter @submitFilter="submitFilter($event)" componentName="finances" :filters="filters" />

            <div v-if="finances.length === 0" class="text-sm py-2 text-center rounded bg-blue-100 text-blue-500">
                There are no
                <span v-if="$page.url.split('=')[1] !== 'all'">
                    {{ $page.url.split('=')[1] }}
                </span>
                finances to show
            </div>

            <div class="flex flex-col gap-2 text-[16px]">
                <FinanceList v-for="finance in finances" :key="finance.id" :finance="finance" />
            </div>

        </div>
    </AuthLayout>
</template>

<script setup>
import { Head, router } from '@inertiajs/vue3'
import { reactive } from 'vue'

import AuthLayout from '@/Layouts/AuthLayout.vue'
import CreateFinance from '@/Pages/Auth/Partials/CreateFinance.vue'
import Filter from '@/Pages/Auth/Partials/Filter.vue'
import FinanceList from '@/Pages/Auth/Partials/FinanceList.vue'

const { finances, errors } = defineProps({
    finances: { type: Object, required: true },
    errors: { type: Object, required: false }
});

const form = reactive({ title: '', value: 0 })

// create finance
const createFinance = () => {
    router.post('/finances', form)
    form.title = ''
    form.value = 0
}

const filters = ['all', 'income', 'expense', 'alphabetical']

const submitFilter = (value) => {
    router.get('/finances', { filter: value })
}
</script>