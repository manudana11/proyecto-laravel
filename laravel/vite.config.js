import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: true, 
        port: 5173,
        proxy: {
            '/': 'http://127.0.0.1:8000',
        },
    },
    alias: {
        '@': '/resources/js',
    },
});
 