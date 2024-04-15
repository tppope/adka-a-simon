<script setup lang="ts">

import Button from "primevue/button";
import {Link} from "@inertiajs/vue3";
import PrimaryHeader from "@/Components/Heading/PrimaryHeader.vue";
</script>

<template>

    <PrimaryHeader :title="$page.props.app_name">
        <h2 class="text-center font-heading text-3xl font-bold sm:text-4xl lg:text-5xl">Admin Panel</h2>
        <Link
            v-if="$page.props.auth.user"
            :href="route('logout')"
            class="self-end"
            method="post"
            as="button"
            type="button"
        >
            <Button pt:root:class="focus:ring-0" :pt-options="{mergeProps: true}" link label="Odhlásiť sa"/>
        </Link>
    </PrimaryHeader>
    <main class="sm:max-w-[85rem] max-w-full px-3 mx-auto flex justify-start items-center flex-col">
        <slot />
    </main>

</template>

<style scoped>

</style>
