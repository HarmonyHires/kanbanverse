/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                navy: "#2A8E9E",
                dark_navy: "#023247",
                light_gray: "#f5f9f9",
            },
        },
    },
    plugins: [],
};
