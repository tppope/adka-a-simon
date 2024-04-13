<script setup lang="ts">

import {useForm} from "@inertiajs/vue3";
import GuestInputFields from "@/Components/Guests/GuestInputFields.vue";
import {Guest} from "@/types/model";

const defaultGuest: Guest = {
    'name': '',
    'surname': '',
    'email': '',
    'phone': '',
    'is_lactose_free': false,
    'is_gluten_free': false,
    'is_vegetarian': false,
    'is_vegan': false,
    'is_child': false,
    'notes': ''
}

const form = useForm({
   guests: [
       {
           ...defaultGuest
       }
   ]
});

function submit() {
    form.post(route('guest.store'));
}

function addGuest() {
    form.guests.push({
        ...defaultGuest
    });
}

function removeGuest() {
    if (form.guests.length > 1) {
        form.guests.pop();
    }
}
</script>

<template>
    <form @submit.prevent="submit" v-auto-animate>
        <GuestInputFields v-for="(guest, order) in form.guests" :guest :order/>
    </form>

</template>

<style scoped>

</style>
