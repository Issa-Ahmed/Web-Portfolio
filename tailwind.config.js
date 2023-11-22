/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/views/**/*.blade.php"],
    theme: {
        extend: {
            colors: {
                charcoal: "#090909",
            },
            spacing: {
                37: "580px",
                "9/10": "90%",
            },
        },
    },
    plugins: [],
};
