/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/*.blade.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/**/**/*.blade.php",
    ],
    theme: {
        colors: {
            primary: "#00262B",
            secondary: "#D9D9D9",
            tertiary: "#BBBBBB",
        },
        extend: {},
    },
    plugins: [],
};
