<script setup lang="ts">

import DataTable from 'primevue/datatable';
import DataView from "primevue/dataview";
import Column from 'primevue/column';
import {Guest} from "@/types/model";
import SecondaryHeader from "@/Components/Heading/SecondaryHeader.vue";
import {Head} from "@inertiajs/vue3";
import {ref} from "vue";
import {FilterMatchMode} from "primevue/api";
import InputText from "primevue/inputtext";
import BinaryList from "@/Components/Shared/BinaryList.vue";
import Divider from "primevue/divider";


defineProps<{
    guestInfo: {label:string, value: string}[]
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
    <BinaryList stripped :list="guestInfo" class="mb-10"/>
    <div class="w-full">
        <DataTable
            :value="guests"
            removableSort
            sort-mode="multiple"
            size="small"
            data-key="id"
            scrollable
            v-model:filters="filters"
            filter-display="row"
            scroll-height="35rem"
            striped-rows>
            <Column field="is_participated">
                <template #body="slotProps">
                    <i v-if="slotProps.data.is_participated" class="pi pi-user-plus text-green-600"></i>
                    <i v-else class="pi pi-user-minus text-red-600"></i>
                </template>
            </Column>
            <Column field="name" sortable header="Meno" :show-filter-menu="false">
                <template #filter="{ filterModel, filterCallback }">
                    <InputText v-model="filterModel.value" type="text" @input="filterCallback()" class="p-column-filter"
                               placeholder="Vyhľadávaj podľa mena"/>
                </template>
            </Column>
            <Column field="surname" sortable header="Priezvisko" :show-filter-menu="false">
                <template #filter="{ filterModel, filterCallback }">
                    <InputText v-model="filterModel.value" type="text" @input="filterCallback()" class="p-column-filter"
                               placeholder="Vyhľadávaj podľa priezviska"/>
                </template>
            </Column>
            <Column field="email" header="Email">
                <template #body="slotProps">
                    <span v-if="slotProps.data.email">{{ slotProps.data.email }}</span>
                    <Divider v-else/>
                </template>
            </Column>
            <Column field="phone" header="Telefónne č." class="text-nowrap">
                <template #body="slotProps">
                    <span v-if="slotProps.data.phone">{{ slotProps.data.phone }}</span>
                    <Divider v-else/>
                </template>
            </Column>
            <Column field="is_lactose_free" sortable header="Bezlakto" class="text-center">
                <template #body="slotProps">
                    <i v-if="slotProps.data.is_lactose_free" class="pi pi-check-circle"></i>
                    <i v-else class="pi pi-times-circle"></i>
                </template>
            </Column>
            <Column field="is_gluten_free" sortable header="Bezlepko" class="text-center">
                <template #body="slotProps">
                    <i v-if="slotProps.data.is_gluten_free" class="pi pi-check-circle"></i>
                    <i v-else class="pi pi-times-circle"></i>
                </template>
            </Column>
            <Column field="is_vegetarian" sortable header="Vegetarián" class="text-center">
                <template #body="slotProps">
                    <i v-if="slotProps.data.is_vegetarian" class="pi pi-check-circle"></i>
                    <i v-else class="pi pi-times-circle"></i>
                </template>
            </Column>
            <Column field="is_vegan" sortable header="Vegán" class="text-center">
                <template #body="slotProps">
                    <i v-if="slotProps.data.is_vegan" class="pi pi-check-circle"></i>
                    <i v-else class="pi pi-times-circle"></i>
                </template>
            </Column>
            <Column field="is_child" sortable header="Dieťa" class="text-center">
                <template #body="slotProps">
                    <i v-if="slotProps.data.is_child" class="pi pi-check-circle"></i>
                    <i v-else class="pi pi-times-circle"></i>
                </template>
            </Column>
            <Column field="notes" header="Poznámky" class="min-w-80">
                <template #body="slotProps">
                    <span v-if="slotProps.data.notes">{{ slotProps.data.notes }}</span>
                    <Divider v-else/>
                </template>
            </Column>
        </DataTable>
    </div>
</template>

<style scoped>

</style>
