import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0', // Expose to network
        port: 5173,
        strictPort: true,
        hmr: {
            host: 'bernard.onthewifi.com', // or your actual LAN IP if needed
        },
        origin: 'http://bernard.onthewifi.com:5173', // helpful for CORS/HMR
        allowedHosts: ['bernard.onthewifi.com'], // ✅ works for Vite 5+
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
