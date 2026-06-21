import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            // Risolve il blocco delle esportazioni SASS di SplideJS richiesto da Bootstrap Italia
            "@splidejs/splide/src/css/core/index": path.resolve(__dirname, 'node_modules/@splidejs/splide/src/css/core/index.scss'),
        }
    }
});
