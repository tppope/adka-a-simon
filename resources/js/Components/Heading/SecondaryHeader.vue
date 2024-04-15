<script setup lang="ts">
defineProps<{
    title: string
}>()
</script>

<template>
    <header>
        <h2 class="font-bold text-3xl text-surface-500 text-center my-10">
            <slot name="label">{{ title }}</slot>
        </h2>
        <slot/>
    </header>
</template>

<style scoped>

</style>
