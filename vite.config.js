import { defineConfig } from 'vite';
import laravel,{ refreshPaths } from 'laravel-vite-plugin';
import inject from "@rollup/plugin-inject";
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';

export default defineConfig({
    plugins: [
        inject({
            $: 'jquery',
            jQuery: 'jquery',
            include: ['**/*.js', '**/*.jsx', '**/*.ts', '**/*.tsx'],
            exclude: 'node_modules/**',
        }),
        laravel({
            input: [
                'resources/js/front/app.js',
                'resources/js/plugins/owl-carousel.js',
                'resources/js/plugins/sweetalert2.js',
                'resources/js/plugins/intl-tel.js',
            ],
            refresh:true,
            buildDirectory: "build/frontend",
        }),
    ],
    postcss: {
        plugins: [
            tailwindcss.nesting,
            {
                postcss: tailwindcss({
                    config: './resources/css/front/tailwind.config.js',
                }),
            },
            autoprefixer(),
        ],
    },

});
