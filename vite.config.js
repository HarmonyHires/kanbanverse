import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
const { addDynamicIconSelectors } = require("@iconify/tailwind");
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        addDynamicIconSelectors(),
    ],
});
