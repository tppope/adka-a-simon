<script setup lang="ts">

import PrimaryHeader from "@/Components/Heading/PrimaryHeader.vue";
import Menubar from "primevue/menubar";
import {Link} from "@inertiajs/vue3";

</script>

<template>
    <PrimaryHeader :title="$page.props.app_name">
        <Menubar :model="$page.props.navigation" class="bg-transparent w-80 m-auto border-none">
            <template #item="{ item, props }">
                <Link v-bind="props.action" :href="route(item.routeName)">
                    {{ item.label }}
                </Link>
            </template>
        </Menubar>
    </PrimaryHeader>
    <main class="sm:max-w-[85rem] max-w-full px-3 mx-auto flex justify-start items-center flex-col">
        <slot/>
    </main>

</template>

<style scoped>

</style>
