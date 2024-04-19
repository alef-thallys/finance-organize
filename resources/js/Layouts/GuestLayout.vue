<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>

    <div class="h-screen flex flex-col text-sm text-gray-600">
        <header class="flex justify-between items-center p-4">
            <h1>
                <Link href="/login">Socialize & Organize</Link>
            </h1>

            <nav>
                <Link v-if="$page.url === '/register'" href="/login">Login</Link>
                <Link v-else-if="$page.url === '/login'" href="/register">Register</Link>
            </nav>
        </header>

        <main class="flex-grow flex justify-center items-center px-5 bg-gray-700">
            <slot />
        </main>

        <footer class="flex flex-col justify-center items-center gap-2 p-4">
            <h1>
                <Link href="/login">Socialize & Organize</Link>
            </h1>
            <span class="text-xs">copyright &copy; 2024 alefthallys</span>
        </footer>
    </div>

</template>
