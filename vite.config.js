import { defineConfig } from 'vite';
import path from 'path';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    server: {
        watch: {
            usePolling: true,     // REQUIRED for LocalWP / Fedora / VM setups
            interval: 100,        // makes file watching reliable
        },
    },

    build: {
        outDir: './dist', // compiled files go to dist/
        emptyOutDir: true,
        manifest: true, // useful later for WP integration
        rollupOptions: {
            input: {
                app: path.resolve(__dirname, 'assets/js/app.js'), // JS entry
            },
            output: {
                entryFileNames: 'js/[name].js',
                chunkFileNames: 'js/[name].js',
                assetFileNames: 'css/[name].[ext]',
            },
        },
    },

    plugins: [
        tailwindcss(),
    ],
});