import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
    // server: {
    //     host: "0.0.0.0", // Allow access from any IP
    //     port: 5173, // Ensure this port is open
    //     hmr: {
    //         host: "192.168.1.8", // Ensure this matches your IP
    //     },
    // },
});
