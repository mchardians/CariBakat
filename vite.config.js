import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'vendor/proengsoft/laravel-jsvalidation/resources/views/**/*',
                    dest: 'resources/views/vendor/jsvalidation'
                },
                {
                    src: 'vendor/proengsoft/laravel-jsvalidation/public/**/*',
                    dest: 'public/vendor/jsvalidation'
                }
            ]
        }),
    ],
});
