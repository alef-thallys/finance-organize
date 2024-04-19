<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import { Head, Link } from '@inertiajs/vue3'
</script>

<template>

    <Head title="Register" />

    <GuestLayout>
        <div class="w-full max-w-sm">
            <form class="flex flex-col gap-4 p-4 rounded bg-white">
                <div class="flex flex-col gap-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="border px-2 py-1 rounded border-gray-300"
                        autocomplete="off" autofocus placeholder="ex. Jhon Doe">
                </div>

                <div class="flex flex-col gap-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="border px-2 py-1 rounded border-gray-300"
                        autocomplete="off" placeholder="ex. jhon@example.com">
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off"
                        class="border px-2 py-1 rounded border-gray-300">
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="off"
                        class="border px-2 py-1 rounded border-gray-300">
                </div>

                <span>
                    Already have an account?
                    <Link href="/login" class="underline text-blue-500">
                    Login now!
                    </Link>
                </span>

                <div class="flex justify-center">
                    <button class="w-full bg-gray-700 text-white py-2 rounded" type="submit">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </GuestLayout>
</template>
