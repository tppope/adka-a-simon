import '../css/app.scss'
import './bootstrap'

import { createApp, h, DefineComponent } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import PrimeVue from 'primevue/config';
import Lara from "@/presets/lara";
import AdminLayout from "../layouts/AdminLayout.vue";
import MainLayout from "../layouts/MainLayout.vue";
import {autoAnimatePlugin} from "@formkit/auto-animate/vue";

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => appName + (title && ` | ${title}`),
    resolve: async (name) => {
        const page = await resolvePageComponent(
            `../views/${name}.vue`,
            import.meta.glob<DefineComponent>('../views/**/*.vue')
        );
        page.default.layout ??= name.startsWith('Admin/') || name.startsWith('Authentication/') ? AdminLayout : MainLayout
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(PrimeVue, {
                unstyled: true,
                pt: Lara
            })
            .use(autoAnimatePlugin)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
}).then();
