<script setup>
import { Link } from '@inertiajs/vue3'
import Dashboard from '@/Components/Dashboard.vue'
import DashboardButton from '@/Components/DashboardButton.vue'
import { ref } from 'vue'

const showDashboard = ref(false);

const handleShowDashboard = () => {
    showDashboard.value = !showDashboard.value
}
</script>

<template>

    <div class="h-screen flex flex-col text-sm text-gray-600">
        <header class="sticky top-0 w-full p-4 bg-white">
            <h1>
                <Link href="/">Socialize & Organize</Link>
            </h1>
        </header>

        <div>
            <Dashboard @closeDashboard="handleShowDashboard" v-if="showDashboard" />
            <DashboardButton @click="handleShowDashboard" v-else />
        </div>

        <main class="flex-grow ">
            <slot />
        </main>

        <footer class="flex flex-col justify-center items-center gap-2 p-4">
            <h1>
                <Link href="/">Socialize & Organize</Link>
            </h1>
            <span class="text-xs">copyright &copy; 2024 alefthallys</span>
        </footer>
    </div>

</template>
