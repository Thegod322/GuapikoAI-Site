import { defineConfig } from "vite";
import { fileURLToPath } from "node:url";

const resolvePath = (path) => fileURLToPath(new URL(path, import.meta.url));

export default defineConfig({
  server: {
    host: "localhost",
    port: 5173,
    strictPort: true,
    cors: true,
    origin: "http://localhost:5173",
  },
  build: {
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: {
        inicio: resolvePath("./src/assets/js/inicio.js"),
        contacto: resolvePath("./src/assets/js/contacto.js"),
        servicios: resolvePath("./src/assets/js/servicios.js"),
        "casos-de-exito": resolvePath("./src/assets/js/casos-de-exito.js"),
        formacion: resolvePath("./src/assets/js/formacion.js"),
        servicio_detalle: resolvePath("./src/assets/js/servicio_detalle.js"),
        proyecto_detalle: resolvePath("./src/assets/js/proyecto_detalle.js"),
        curso_detalle: resolvePath("./src/assets/js/curso_detalle.js"),
        legal: resolvePath("./src/assets/js/legal.js"),
        showroom: resolvePath("./src/assets/js/showroom.js"),
      },
      output: {
        entryFileNames: "assets/[name]-[hash].js",
        chunkFileNames: "assets/[name]-[hash].js",
        assetFileNames: "assets/[name]-[hash][extname]",
      },
    },
  },
});
