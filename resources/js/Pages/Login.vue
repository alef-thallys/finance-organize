<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import { Head, Link } from '@inertiajs/vue3'
</script>

<template>

    <Head title="Login" />

    <GuestLayout>
        <div class="w-full max-w-sm">
            <form class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="border px-2 py-1 rounded border-gray-300"
                        autocomplete="off" autofocus placeholder="ex. jhon@example.com">
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

                <div class="flex justify-center">
                    <button class="w-full bg-gray-700 text-white py-2 rounded" type="submit">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </GuestLayout>
</template>
