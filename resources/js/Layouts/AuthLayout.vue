<template>
    <Container>
        <Header>
            <Link href="/">Socialize & Organize</Link>
        </Header>

        <Menu @closeMenu="showMenu = false" v-if="showMenu" />
        <OpenMenu @click="showMenu = !showMenu" v-else />

        <main class="flex-grow px-5 bg-gray-700 text-white">
            <slot />
        </main>

        <Footer v-if="showFooter">
            <Link href="/">Socialize & Organize</Link>
        </Footer>
    </Container>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

import Container from '@/Components/Container.vue'
import Header from '@/Components/Header.vue'
import Footer from '@/Components/Footer.vue'

import Menu from '@/Components/Menu/Menu.vue'
import OpenMenu from '@/Components/Menu/OpenMenu.vue'

const { showFooter } = defineProps({
    showFooter: {
        type: Boolean,
        default: true
    }
})

const showMenu = ref(false);
</script>
