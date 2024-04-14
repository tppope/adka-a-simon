<script setup lang="ts">

import TheHeader from "@/Components/Heading/TheHeader.vue";

</script>

<template>
    <TheHeader />
    <main class="sm:max-w-[85rem] max-w-full px-3 mx-auto flex justify-start items-center flex-col">
        <slot/>
    </main>

</template>

<style scoped>

</style>
