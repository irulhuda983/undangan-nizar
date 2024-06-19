import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/template1.css',
                'resources/js/app.js',
                'resources/js/template1.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": "/resources/js",
        },
    },
});
