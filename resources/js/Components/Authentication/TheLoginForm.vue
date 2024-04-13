<script setup lang="ts">
import {Link, useForm} from "@inertiajs/vue3";
import FloatLabel from "primevue/floatlabel";
import InputText from "primevue/inputtext";
import Button from "primevue/button";
import InputError from "@/Components/InputError.vue";
import Checkbox from "primevue/checkbox";

defineProps<{
    canResetPassword?: boolean;
}>();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

function submit() {
    form.post(route('login'), {
        onFinish: () => {
            form.reset('password');
        },
    });
};
</script>

<template>
    <form @submit.prevent="submit">

        <div>
            <FloatLabel>
                <InputText
                    id="email"
                    type="email"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />
                <label for="email">Email</label>
            </FloatLabel>
            <InputError class="mt-2" :message="form.errors.email"/>
        </div>
        <div class="mt-4">
            <FloatLabel>
                <InputText
                    id="password"
                    type="password"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />
                <label for="password">Password</label>
            </FloatLabel>
            <InputError class="mt-2" :message="form.errors.password"/>
        </div>
        <div class="block mt-4">
            <Checkbox v-model="form.remember" inputId="remember" :binary="true" />
            <label for="remember" class="ml-2">Remember me</label>
        </div>
        <div class="flex items-center justify-end mt-4">
            <Link
                v-if="canResetPassword"
                :href="route('password.request')"
                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
                Forgot your password?
            </Link>


            <Button type="button" label="Search" icon="pi pi-search" :loading="form.processing" />

        </div>

    </form>

</template>

<style scoped>

</style>
