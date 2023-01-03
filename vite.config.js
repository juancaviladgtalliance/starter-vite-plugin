/** @type {import('vite').UserConfig} */
import { defineConfig } from "vite";
import path, { resolve } from "path";

export default defineConfig({
  base: "/",
  build: {
    outDir: __dirname,
    sourcemap: true,
    rollupOptions: {
      input: path.join(__dirname, "/src/main.js"),
      output: {
        assetFileNames: "assets/[name].[ext]",
        entryFileNames: "assets/[name].js",
      },
    },
    manifest: true,
  },
  emitIndex: false,
});
