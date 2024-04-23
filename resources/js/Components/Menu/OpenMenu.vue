<template>
    <div @click="openMenu" class="fixed top-[4rem] left-0 cursor-pointer w-fit pr-2 rounded-r-3xl shadow-md bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-7 h-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
        </svg>
    </div>
</template>

<script setup>
const emit = defineEmits(['openMenu'])
const openMenu = () => emit('openMenu')
</script>
