<template>

    <Head title="Login" />

    <GuestLayout>

        <Container>
            <form @submit.prevent="submit" class="flex flex-col gap-4 p-4 rounded bg-white">

                <div class="flex flex-col gap-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="border px-2 py-1 rounded border-gray-300"
                        autocomplete="off" autofocus placeholder="ex. jhon@example.com" v-model="form.email">

                    <div v-if="errors.email" class="text-sm py-2 text-center rounded bg-red-100 text-red-500">
                        {{ errors.email }}
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off"
                        class="border px-2 py-1 rounded border-gray-300" v-model="form.password">

                    <div v-if="errors.password" class="text-sm py-2 text-center rounded bg-red-100 text-red-500">
                        {{ errors.password }}
                    </div>
                </div>

                <span>
                    Don't have an account?
                    <Link href="/register" class="underline text-blue-500">
                    Register now!
                    </Link>
                </span>

                <input class="w-full py-2 rounded bg-gray-700 text-white" type="submit" value="Login" />
            </form>
        </Container>

    </GuestLayout>
</template>

<script setup>
import { Head, Link, router } from '@inertiajs/vue3'
import { reactive } from 'vue';

import GuestLayout from '@/Layouts/GuestLayout.vue'
import Container from '@/Components/Guest/Container.vue'

defineProps({ errors: Object })

const form = reactive({
    email: '',
    password: '',
})

const submit = () => {
    router.post('/login', form)
}
</script>
