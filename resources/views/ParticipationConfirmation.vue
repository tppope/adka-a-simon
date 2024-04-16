<script setup lang="ts">

import TheGuestsForm from "@/Components/Guests/TheGuestsForm.vue";
import {Head} from "@inertiajs/vue3";
import SecondaryHeader from "@/Components/Heading/SecondaryHeader.vue";
import {ref} from "vue";
import Button from "primevue/button";
import TheSucessfullSubmitCover from "@/Components/Guests/TheSucessfullSubmitCover.vue";

const isSubmitted = ref(false);

</script>

<template>
    <Head title="Potvrdenie účasti" />
    <section v-auto-animate>
        <SecondaryHeader title="Potvrdenie účasti"/>
        <TheGuestsForm v-if="!isSubmitted" @successfully-submitted="() => isSubmitted = true" />
        <TheSucessfullSubmitCover v-else>
            <Button type="button"
                    label="Pridať ďalšieho hosťa"
                    outlined
                    icon="pi pi-user-plus"
                    size="small"
                    @click="() => isSubmitted = false"/>
        </TheSucessfullSubmitCover>
    </section>
</template>

<style scoped>

</style>
