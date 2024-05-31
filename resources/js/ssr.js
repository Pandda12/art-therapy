import '../css/app.css';

import { createInertiaApp } from '@inertiajs/vue3'
import createServer from '@inertiajs/vue3/server'
import { renderToString } from '@vue/server-renderer'
import { createSSRApp, h } from 'vue'
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";

const appName = import.meta.env.VITE_APP_NAME || 'Art therapy';

createServer(page =>
    createInertiaApp({
        page,
        render: renderToString,
        title: (title) => `${title} - ${appName}`,
        resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
        setup({ el, App, props, plugin }) {
            return createSSRApp({
                render: () => h(App, props),
            }).use(plugin)
                .use(ZiggyVue, {
                    ...page.props.ziggy,
                    location: new URL(page.props.ziggy.location),
                })
        },
        progress: {
            color: '#4B5563',
        },
    }),

)
