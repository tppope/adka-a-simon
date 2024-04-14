<script setup lang="ts">

import {useForm} from "@inertiajs/vue3";
import GuestInputFields from "@/Components/Guests/GuestInputFields.vue";
import {Guest} from "@/types/model";
import Button from 'primevue/button';
import {computed} from "vue";


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
    if (canRemove.value) {
        form.guests.pop();
    }
}

const canRemove = computed<boolean>(() => (form.guests.length > 1))
</script>

<template>
    <div class="max-w-3xl">
        <header>
            <h2 class="font-bold text-3xl text-center my-10">Potvrdenie účasti</h2>
        </header>
        <form @submit.prevent="submit"
              class="flex flex-col items-center">
            <small class="self-end">* Povinné pole</small>
            <div class="border-2 rounded-md px-8 py-4 m-2"
                 v-auto-animate>
                <GuestInputFields v-for="(guest, order) in form.guests" :guest :order/>
                <div class="sm:flex-row flex flex-col justify-center gap-5 mt-5" v-auto-animate>
                    <Button type="button"
                            label="Pridať ďalšieho hosťa"
                            outlined
                            icon="pi pi-user-plus"
                            size="small"
                            @click="addGuest()"/>
                    <Button v-show="canRemove"
                            type="button"
                            severity="danger"
                            text
                            label="Odstrániť predošlého hosťa"
                            icon="pi pi-user-minus"
                            size="small"
                            class="opacity-80"
                            @click="removeGuest()"/>
                </div>
            </div>
                <Button type="button"
                        label="Odoslať odpoveď"
                        class="w-96 m-6"/>
        </form>
    </div>
</template>

<style scoped>

</style>
