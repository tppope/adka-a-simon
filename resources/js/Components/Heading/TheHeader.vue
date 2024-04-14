<script setup lang="ts">
import Menubar from "primevue/menubar";
import {Link} from "@inertiajs/vue3";

</script>

<template>

    <header id="main-header" class="sticky inset-x-0 top-0 z-[80] w-full px-2">
        <h1
            class="text-center font-heading text-5xl p-5 font-bold text-primary-500 sm:text-6xl lg:text-7xl"
        >
            Aďka a Šimon
        </h1>
        <Menubar :model="$page.props.navigation" class="bg-transparent w-80 m-auto border-none">
            <template #item="{ item, props }">
                <Link v-bind="props.action" :href="route(item.routeName)">
                    {{ item.label }}
                </Link>
            </template>
        </Menubar>

    </header>
</template>

<style scoped>

</style>
