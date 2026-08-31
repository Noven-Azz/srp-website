module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false,
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
    // PERHATIKAN BAGIAN VARIANTS INI (Mengaktifkan group-hover untuk scale & transform)
    variants: {
        extend: {
            scale: ["group-hover"],
            transform: ["group-hover"],
        },
    },
    plugins: [require("@tailwindcss/aspect-ratio")],
};
