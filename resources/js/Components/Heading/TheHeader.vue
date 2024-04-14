<script setup lang="ts">
import Menubar from "primevue/menubar";

import NavLink from "@/Components/NavLink.vue";

</script>

<template>

    <header class="sticky inset-x-0 top-0 z-[80] w-full px-2">
        <h1
            class="text-center font-heading text-5xl font-bold sm:text-6xl lg:text-7xl"
        >
            Aďka a Šimon
        </h1>
        <Menubar :model="$page.props.navigation">
            <template #item="{ item, props }">
                <NavLink v-bind="props.action" :href="route(item.routeName)" :active="route().current(item.routeName)">
                    {{ item.label }}
                </NavLink>
            </template>
        </Menubar>

    </header>
</template>

<style scoped>

</style>
