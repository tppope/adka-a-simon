<script setup lang="ts">

import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import {Guest} from "@/types/model";
import SecondaryHeader from "@/Components/Heading/SecondaryHeader.vue";
import {Head} from "@inertiajs/vue3";
import {ref} from "vue";
import {FilterMatchMode} from "primevue/api";
import InputText from "primevue/inputtext";

defineProps<{
    guestsCount: number;
    lactoseFreeCount: number;
    glutenFreeCount: number;
    vegetarianCount: number;
    veganCount: number;
    childCount: number;
    guests: Guest[];
}>()

const filters = ref({
    name: { value: null, matchMode: FilterMatchMode.STARTS_WITH },
    surname: { value: null, matchMode: FilterMatchMode.STARTS_WITH }
});

</script>

<template>
    <Head title="Hostia" />
    <SecondaryHeader title="Hostia" />

    <DataTable
        :value="guests"
        removableSort
        sort-mode="multiple"
        size="small"
        data-key="id"
        scrollable
        v-model:filters="filters"
        filter-display="row"
        scroll-height="400px"
        striped-rows>
        <Column field="is_participated" :header="`${guestsCount}`">
            <template #body="slotProps">
                <i v-if="slotProps.data.is_participated" class="pi pi-user-plus text-green-600"></i>
                <i v-else class="pi pi-user-minus text-red-600"></i>
            </template>
        </Column>
        <Column field="name" sortable header="Meno" :show-filter-menu="false">


            <template #filter="{ filterModel, filterCallback }">
                <InputText v-model="filterModel.value" type="text" @input="filterCallback()" class="p-column-filter" placeholder="Vyhľadávaj podľa mena" />
            </template>
        </Column>
        <Column field="surname" sortable header="Priezvisko" :show-filter-menu="false">

            <template #filter="{ filterModel, filterCallback }">
                <InputText v-model="filterModel.value" type="text" @input="filterCallback()" class="p-column-filter" placeholder="Vyhľadávaj podľa priezviska" />
            </template>
        </Column>
        <Column field="email" header="Email"></Column>
        <Column field="phone" header="Telefónne č."></Column>
        <Column field="is_lactose_free" sortable header="Lacto">
            <template #body="slotProps">
                <i v-if="slotProps.data.is_lactose_free" class="pi pi-check-circle"></i>
                <i v-else class="pi pi-times-circle"></i>
            </template>
        </Column>
        <Column field="is_gluten_free" sortable header="Diabetik">
            <template #body="slotProps">
                <i v-if="slotProps.data.is_gluten_free" class="pi pi-check-circle"></i>
                <i v-else class="pi pi-times-circle"></i>
            </template>
        </Column>
        <Column field="is_vegetarian" sortable header="Vegetarián">
            <template #body="slotProps">
                <i v-if="slotProps.data.is_vegetarian" class="pi pi-check-circle"></i>
                <i v-else class="pi pi-times-circle"></i>
            </template>
        </Column>
        <Column field="is_vegan" sortable header="Vegán">
            <template #body="slotProps">
                <i v-if="slotProps.data.is_vegan" class="pi pi-check-circle"></i>
                <i v-else class="pi pi-times-circle"></i>
            </template>
        </Column>
        <Column field="is_child" sortable header="Dieťa">
            <template #body="slotProps">
                <i v-if="slotProps.data.is_child" class="pi pi-check-circle"></i>
                <i v-else class="pi pi-times-circle"></i>
            </template>
        </Column>
        <Column field="notes" header="Poznámky"></Column>
    </DataTable>
</template>

<style scoped>

</style>
