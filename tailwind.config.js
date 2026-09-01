/** @type {import('tailwindcss').Config} */
module.exports = {
    // 1. Ganti 'purge' menjadi 'content'
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    // 2. Hapus 'mode: "jit"' karena JIT sudah aktif secara default di v3
    // 3. Hapus 'darkMode: false' (atau ganti 'media' / 'class' jika memakai dark mode)
    theme: {
        extend: {
            fontFamily: {
                sans: ["Archivo", "sans-serif"],
                mono: ["Fira Mono", "monospace"],
            },
            colors: {
                primary: "#1f6fa8",
                "text-secondary": "#666666",
                "text-dark": "#333333",
                "accent-cta": "#f5e62b",
                border: "#e0e3e8",
                "bg-[#f5f6f8]": "#f5f6f8",
                "bg-light": "#f5f6f8",
                "yellow-srp": "#f5e62b",
                "blue-srp": "#1f6fa8",
                "ice-blue-start": "#ebf3fa",
                "ice-blue-mid": "#f2f6fa",
                "ice-blue-end": "#eef3f8",
            },
            aspectRatio: {
                "16/9": "16 / 9",
            },
        },
    },
    // 4. Hapus blok 'variants' karena semua varian (group-hover, hover, focus, dll) sudah aktif otomatis di v3
    plugins: [require("@tailwindcss/aspect-ratio")],
};
