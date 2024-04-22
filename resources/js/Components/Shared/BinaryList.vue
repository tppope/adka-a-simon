<script setup lang="ts">
    import BinaryListCell from "@/Components/Shared/BinaryListCell.vue";

    defineProps<{
        list: {[key: string]: string},
        stripped: boolean
    }>()
</script>

<template>
    <article class="border-2 border-surface-200 rounded-md">
        <div v-for="(value, label) in list" :class="[{'even:bg-surface-100': stripped}, 'grid grid-cols-2 auto-cols-auto border-surface-0']">
            <BinaryListCell class="font-bold">{{ label }}</BinaryListCell>
            <BinaryListCell class="text-center">{{ value }}</BinaryListCell>
        </div>
    </article>

</template>

<style scoped>

</style>
