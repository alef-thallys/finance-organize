<template>

    <Head title="Register" />

    <GuestLayout>

        <Container>
            <form @submit.prevent="submit" class="flex flex-col gap-4 p-4 rounded bg-white">
                <div class="flex flex-col gap-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="border px-2 py-1 rounded border-gray-300"
                        autocomplete="off" autofocus placeholder="ex. Jhon Doe" v-model="form.name">

                    <div v-if="errors.name" class="text-sm py-2 text-center rounded bg-red-100 text-red-500">
                        {{ errors.name }}
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="border px-2 py-1 rounded border-gray-300"
                        autocomplete="off" placeholder="ex. jhon@example.com" v-model="form.email">

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

                <div class="flex flex-col gap-2">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="off"
                        class="border px-2 py-1 rounded border-gray-300" v-model="form.password_confirmation">
                </div>

                <span>
                    Already have an account?
                    <Link href="/login" class="underline text-blue-500">
                    Login now!
                    </Link>
                </span>

                <input class="w-full cursor-pointer py-2 rounded bg-gray-700 text-white" type="submit" value="Register" />
            </form>
        </Container>

    </GuestLayout>
</template>

<script setup>
import { Head, Link, router } from '@inertiajs/vue3'
import { reactive } from 'vue'

import GuestLayout from '@/Layouts/GuestLayout.vue'
import Container from '@/Components/Guest/Container.vue'

defineProps({ errors: Object })

const form = reactive({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
})

const submit = () => router.post('/register', form);
</script>
