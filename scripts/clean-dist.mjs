import { rmSync } from "node:fs";
import { resolve } from "node:path";

const root = process.cwd();
const vite = resolve(root, "public/.vite");

rmSync(vite, { recursive: true, force: true });
