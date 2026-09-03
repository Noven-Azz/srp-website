/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Archivo", "sans-serif"],
                mono: ["Fira Mono", "monospace"],
            },
            colors: {
                primary: "#1f6fa8",
                "primary-container": "#1f6fa8",
                "text-secondary": "#666666",
                "text-dark": "#333333",
                "accent-cta": "#f5e62b",
                border: "#e0e3e8",
                "border-subtle": "#E2E8F0",
                "surface-muted": "#F9F9FB",
                "bg-light": "#f5f6f8",
                "yellow-srp": "#f5e62b",
                "blue-srp": "#1f6fa8",
                "ice-blue-start": "#ebf3fa",
                "ice-blue-mid": "#f2f6fa",
                "ice-blue-end": "#eef3f8",
                "on-surface": "#171b29",
                "on-surface-variant": "#414750",
            },
            spacing: {
                gutter: "24px",
                "container-max": "1280px",
                "margin-mobile": "16px",
                "section-gap-lg": "80px",
                "section-gap-sm": "40px",
            },
            aspectRatio: {
                "16/9": "16 / 9",
            },
        },
    },
    plugins: [require("@tailwindcss/aspect-ratio")],
};
