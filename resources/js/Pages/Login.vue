<template>

    <Head title="Login" />

    <GuestLayout>

        <Container>
            <form class="flex flex-col gap-4 p-4 rounded bg-white">

                <div class="flex flex-col gap-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" 
                        class="border px-2 py-1 rounded border-gray-300" autocomplete="off" autofocus placeholder="ex. jhon@example.com">
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off"
                        class="border px-2 py-1 rounded border-gray-300">
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
import { Head, Link } from '@inertiajs/vue3'
import GuestLayout from '@/Layouts/GuestLayout.vue'
import Container from '@/Components/Guest/Container.vue'
</script>
