import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
// vite.config.js / vite.config.ts
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/src/assets/main.scss",
            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: "resources/src/assets/img",
                    dest: "../assets",
                },
            ],
        }),
    ],
});
