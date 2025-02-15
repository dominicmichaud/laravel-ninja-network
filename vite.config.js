import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    server: {
        host: true, // Permet l'accès depuis "::1" ou "localhost"
        port: 5173, // Assurez-vous que ce port correspond à votre config
    },
});
