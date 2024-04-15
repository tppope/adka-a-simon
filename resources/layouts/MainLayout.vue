<script setup lang="ts">

import PrimaryHeader from "@/Components/Heading/PrimaryHeader.vue";
import Menubar, {MenubarPassThroughOptions} from "primevue/menubar";
import {Link} from "@inertiajs/vue3";
import {ref} from "vue";

const pt:MenubarPassThroughOptions = {
    root: {
        class: ['relative', 'flex', 'items-center', 'p-2', 'rounded-md']
    },
    menu: {
        class: [
            'items-center',
            'justify-center',
            'flex-wrap',
            'flex-row',
            'flex',
            // Position
            'relative',
            'top-full left-0',
            // Size
            'w-full',
            // Spacing
            'm-0',
            'py-1 sm:py-0 sm:p-0',
            'list-none',
            // Shape
            'border-0',
            // Color
            'bg-transparent',
            // Misc
            'outline-none'
        ]
    },
    menuitem: {
        class: 'relative w-auto'
    },
    button: {
        class: 'hidden'
    }
}

</script>

<template>
    <PrimaryHeader :title="$page.props.app_name">
        <Menubar :model="$page.props.navigation"
                 :pt>
            <template #item="{ item, props }">
                <Link v-bind="props.action" :href="route(item.routeName)" :class="{'border-b-2 border-primary-300': route().current(item.routeName)}">
                    {{ item.label }}
                </Link>
            </template>
        </Menubar>
    </PrimaryHeader>
    <main class="sm:max-w-[85rem] max-w-full px-3 mx-auto flex justify-start items-stretch md:items-center flex-col" v-auto-animate>
        <slot/>
    </main>

</template>

<style scoped>

</style>
