<script setup lang="ts">
import PrimaryHeading from "@/Components/Heading/Headings/PrimaryHeading.vue";

defineProps<{
    title?: string
}>()
</script>

<template>
    <header id="main-header" class="sticky inset-x-0 top-0 z-[80] w-full px-2 flex flex-col">
        <PrimaryHeading>
            <slot name="title">{{ title }}</slot>
        </PrimaryHeading>
        <slot/>
    </header>
</template>

<style scoped>

</style>
