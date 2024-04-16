<script setup lang="ts">

import PrimaryHeading from "@/Components/Heading/Headings/PrimaryHeading.vue";
import SecondaryHeading from "@/Components/Heading/Headings/SecondaryHeading.vue";
</script>

<template>
    <article class="text-center py-10 px-4 sm:px-6 lg:px-8">
        <PrimaryHeading>Ďakujeme</PrimaryHeading>
        <SecondaryHeading>Tešíme sa na vás</SecondaryHeading>
        <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
            <slot/>
        </div>
    </article>
</template>

<style scoped>

</style>
