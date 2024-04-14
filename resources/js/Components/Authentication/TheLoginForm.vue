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
        <div v-auto-animate>
            <FloatLabel>
                <InputText
                    id="email"
                    type="email"
                    v-model="form.email"
                    required
                    autofocus
                    class="w-full"
                    autocomplete="username"
                />
                <label for="email">Email</label>
            </FloatLabel>
            <InputError class="mt-2" :message="form.errors.email"/>
        </div>
        <div class="mt-7" v-auto-animate>
            <FloatLabel>
                <InputText
                    id="password"
                    type="password"
                    v-model="form.password"
                    required
                    class="w-full"
                    autocomplete="current-password"
                />
                <label for="password">Password</label>
            </FloatLabel>
            <InputError class="mt-2" :message="form.errors.password"/>
        </div>
        <div class="mt-4">
            <Checkbox v-model="form.remember" inputId="remember" :binary="true" />
            <label for="remember" class="ml-2">Zapamätať prihlásenie</label>
        </div>
        <div class="flex items-center justify-end mt-6">
            <Link
                v-if="canResetPassword"
                :href="route('password.request')"
            >
                <Button pt:root:class="focus:ring-0" :pt-options="{mergeProps: true}" link label="Zabudnuté heslo?"/>
            </Link>


            <Button type="submit" label="Prihlásiť sa" />

        </div>

    </form>

</template>

<style scoped>

</style>
