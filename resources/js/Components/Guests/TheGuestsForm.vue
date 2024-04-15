<script setup lang="ts">

import {useForm} from "@inertiajs/vue3";
import GuestInputFields from "@/Components/Guests/GuestInputFields.vue";
import {Guest} from "@/types/model";
import Button from 'primevue/button';
import {computed} from "vue";


const defaultGuest: Guest = {
    'id': 0,
    'name': '',
    'surname': '',
    'email': '',
    'phone': '',
    'is_lactose_free': false,
    'is_gluten_free': false,
    'is_vegetarian': false,
    'is_vegan': false,
    'is_child': false,
    'is_participated': true,
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
    form.post(route('guest.store'), {
        onSuccess: () => {
            console.log('Success!!!!!')
        }
    });
}

function addGuest() {
    form.guests.push({
        ...defaultGuest,
        id: form.guests.length
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
    <form @submit.prevent="submit"
          class="flex flex-col items-center">
        <small class="self-end mr-8">* Povinné pole</small>
        <div class="border-2 rounded-md px-8 m-2"
             v-auto-animate>
            <GuestInputFields :class="{'border-t-2 mt-5': guest.id}" v-for="guest in form.guests" :guest :key="guest.id"/>
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
        <Button label="Odoslať odpoveď"
                type="submit"
                class="sm:w-4/5 w-full m-6"/>
    </form>
</template>

<style scoped>

</style>
