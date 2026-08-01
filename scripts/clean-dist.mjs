import { rmSync } from "node:fs";
import { resolve } from "node:path";

const root = process.cwd();
const assets = resolve(root, "public/assets");
const vite = resolve(root, "public/.vite");

rmSync(assets, { recursive: true, force: true });
rmSync(vite, { recursive: true, force: true });
