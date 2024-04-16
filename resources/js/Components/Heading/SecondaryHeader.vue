<script setup lang="ts">
import SecondaryHeading from "@/Components/Heading/Headings/SecondaryHeading.vue";

defineProps<{
    title?: string
}>()
</script>

<template>
    <header>
        <SecondaryHeading>
            <slot name="title">{{ title }}</slot>
        </SecondaryHeading>
        <slot/>
    </header>
</template>

<style scoped>

</style>
