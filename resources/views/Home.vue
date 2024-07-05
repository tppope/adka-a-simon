<script setup lang="ts">

import {Head} from "@inertiajs/vue3";
import SecondaryHeader from "@/Components/Heading/SecondaryHeader.vue";
import VueCountdown from "@chenfengyuan/vue-countdown";
import {onMounted, ref} from "vue";
import {Guest} from "@/types/model";
import Image from "primevue/image";

defineProps<{
    zasadaciPoriadokPath: string
}>()

const weddingDate = new Date("July 6, 2024 15:00:00").getTime();
const showLottie = ref(false)
onMounted(() => {
    showLottie.value = true
})

</script>

<template>
    <Head title="Informácie" />
    <section v-auto-animate>
        <SecondaryHeader title="Zasadací poriadok" />
        <Image :src="zasadaciPoriadokPath" alt="Image" />
<!--        <lottie-player-->
<!--            v-if="showLottie"-->
<!--            autoplay-->
<!--            loop-->
<!--            mode="normal"-->
<!--            src="https://lottie.host/da523398-87f2-4128-9c78-1a953e0eae5f/OzqU0mCxZt.json"-->
<!--        ></lottie-player>-->
<!--        <VueCountdown :time="weddingDate - (new Date()).getTime()" v-slot="{ days, hours, minutes, seconds }">-->
<!--            <div class="text-center font-heading text-4xl p-5 font-bold text-primary-500 sm:text-5xl">{{ days.toString().padStart(2, '0') }}d {{ hours.toString().padStart(2, '0') }}h {{ minutes.toString().padStart(2, '0') }}m {{ seconds.toString().padStart(2, '0') }}s</div>-->
<!--        </VueCountdown>-->
    </section>
</template>

<style scoped>

</style>
