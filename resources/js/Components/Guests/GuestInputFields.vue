<script setup lang="ts">

import {Guest} from "@/types/model";
import FloatLabel from "primevue/floatlabel";
import InputText from "primevue/inputtext";

defineProps<{
    order: number;
    guest: Guest;
}>()

</script>

<template>
    <FloatLabel>
        <InputText
            :id="'name-' + order"
            type="text"
            v-model="guest.name"
            required
            autofocus
            autocomplete="username"
        />
        <label :for="'name-' + order">Meno</label>
    </FloatLabel>
    <FloatLabel>
        <InputText
            :id="'surname-' + order"
            type="text"
            v-model="guest.surname"
            required
            autofocus
            autocomplete="username"
        />
        <label :for="'name-' + order">Surname</label>
    </FloatLabel>

</template>

<style scoped>

</style>
