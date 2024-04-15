<script setup lang="ts">

import TheLoginForm from "@/Components/Authentication/TheLoginForm.vue";
import {Head} from "@inertiajs/vue3";
import SecondaryHeader from "@/Components/Heading/SecondaryHeader.vue";

defineProps<{
    canResetPassword?: boolean;
    status?: string;
}>();
</script>

<template>

    <Head title="Prihlásenie" />
    <SecondaryHeader title="Prihlásenie"/>
    <div>
        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <TheLoginForm :canResetPassword />
    </div>
</template>

<style scoped>

</style>
