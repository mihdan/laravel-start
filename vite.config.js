import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const host = 'localhost';

export default defineConfig({
    server: {
        host: '0.0.0.0',
        hmr: {
            host: host
        }
    },
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
            refresh: true,
        }),
    ],
});
