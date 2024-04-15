<script setup lang="ts">
defineProps<{
    title: string
}>()
</script>

<template>
    <header id="main-header" class="sticky inset-x-0 top-0 z-[80] w-full px-2 flex flex-col">
        <h1
            class="text-center font-heading text-5xl p-5 font-bold text-primary-500 sm:text-6xl lg:text-7xl"
        >
            <slot name="label">{{ title }}</slot>
        </h1>
        <slot/>
    </header>
</template>

<style scoped>

</style>
