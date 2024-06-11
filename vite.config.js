import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/frontend/css/app.css', 
                'resources/frontend/js/app.js',
                'resources/admin/css/app-admin.css', 
                'resources/admin/js/app-admin.js', 
            ],
            refresh: true,
        }),
    ],
});
