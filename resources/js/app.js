require("./bootstrap");

// 1. Import & Ekspor Motion One v10
import { animate, inView, stagger } from "motion";
window.Motion = { animate, inView, stagger };
window.animate = animate;
window.inView = inView;
window.stagger = stagger;

// 2. Import Alpine.js dari node_modules (CJS Bundle kompatibel Laravel Mix 5)
import Alpine from "alpinejs/dist/module.cjs.js";
window.Alpine = Alpine;

// Jalankan Alpine secara otomatis
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", () => {
        if (!window.Alpine.started) {
            Alpine.start();
        }
    });
} else {
    if (!window.Alpine.started) {
        Alpine.start();
    }
}

