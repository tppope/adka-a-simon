<script setup lang="ts">

import TheLoginForm from "@/Components/Authentication/TheLoginForm.vue";
import {Head} from "@inertiajs/vue3";

defineProps<{
    canResetPassword?: boolean;
    status?: string;
}>();
</script>

<template>

    <Head title="Log in" />

    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
        {{ status }}
    </div>
    <TheLoginForm :canResetPassword />
</template>

<style scoped>

</style>
