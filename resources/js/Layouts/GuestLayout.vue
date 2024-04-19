<template>
    <Container>
        <Header>
            <Link href="/login">Socialize & Organize</Link>
        </Header>

        <main class="flex-grow flex justify-center items-center px-5 bg-gray-700">
            <slot />
        </main>

        <Footer>
            <Link href="/login">Socialize & Organize</Link>
        </Footer>
    </Container>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

import Container from '@/Components/Container.vue'
import Header from '@/Components/Header.vue'
import Footer from '@/Components/Footer.vue'
</script>
