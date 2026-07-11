import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'; //

export default defineConfig({
    plugins: [
        tailwindcss(), // This must come BEFORE laravel()
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resources/js/welcome.js','resources/js/auth.js','resources/js/dashboard.js','resources/js/login.js','resources/js/reader.js','resources/js/registration.js','resources/js/login.js'],
            refresh: true,
        }),
    ],
});