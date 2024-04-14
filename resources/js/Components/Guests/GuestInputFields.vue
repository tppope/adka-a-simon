<script setup lang="ts">

import {Guest} from "@/types/model";
import FloatLabel from "primevue/floatlabel";
import InputText from "primevue/inputtext";
import Textarea from 'primevue/textarea';
import Checkbox from 'primevue/checkbox';


defineProps<{
    order: number;
    guest: Guest;
}>()

</script>

<template>
    <div v-if="order != 0" class="border-t-2 m-5"></div>
    <header>
        <h3 class="text-lg mb-8 text-center font-bold text-xl text-primary-500">Hosť {{order + 1}}</h3>
    </header>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <FloatLabel>
            <InputText
                :id="'name-' + order"
                type="text"
                v-model="guest.name"
                required
                autofocus
                autocomplete="username"
                class="w-full"
            />
            <label :for="'name-' + order">Meno*</label>
        </FloatLabel>
        <FloatLabel>
            <InputText
                :id="'surname-' + order"
                type="text"
                v-model="guest.surname"
                required
                autocomplete="surname"
                class="w-full"
            />
            <label :for="'surname-' + order">Priezvisko*</label>
        </FloatLabel>
        <FloatLabel>
            <InputText
                :id="'email-' + order"
                type="text"
                v-model="guest.email"
                autocomplete="email"
                class="w-full"
            />
            <label :for="'email-' + order">E-mail</label>
        </FloatLabel>
        <FloatLabel>
            <InputText
                :id="'phone-' + order"
                type="text"
                v-model="guest.phone"
                autocomplete="phone"
                class="w-full"
            />
            <label :for="'phone-' + order">Telefónne č.</label>
        </FloatLabel>
        <div class="sm:col-span-2 text-gray-500">
            <label :for="'notes-' + order" >Strava/Diéta</label>
            <div class="card flex flex-wrap justify-center gap-x-6 gap-y-3 mt-3">
                <div class="flex items-center">
                    <Checkbox v-model="guest.is_child" inputId="food1" :name="'name-' + order" :binary="true" />
                    <label for="food1" class="ml-2"> Detská </label>
                </div>
                <div class="flex items-center">
                    <Checkbox v-model="guest.is_gluten_free" inputId="food2" :name="'name-' + order" :binary="true" />
                    <label for="food2" class="ml-2"> Bezlepková </label>
                </div>
                <div class="flex items-center">
                    <Checkbox v-model="guest.is_lactose_free" inputId="food3" :name="'name-' + order" :binary="true" />
                    <label for="food3" class="ml-2"> Bezlaktózová </label>
                </div>
                <div class="flex items-center">
                    <Checkbox v-model="guest.is_vegetarian" inputId="food5" :name="'name-' + order" :binary="true" />
                    <label for="food5" class="ml-2"> Vegetariánska </label>
                </div>
                <div class="flex items-center">
                    <Checkbox v-model="guest.is_vegan" inputId="food4" :name="'name-' + order" :binary="true" />
                    <label for="food4" class="ml-2"> Vegánska </label>
                </div>
            </div>
        </div>
        <div class="sm:col-span-2">
            <Textarea
                :id="'notes-' + order"
                v-model="guest.notes"
                rows="4"
                autoResize
                placeholder="Poznámky"
                class="w-full resize-none"
            />
        </div>
    </div>
</template>

<style scoped>

</style>
