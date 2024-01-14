/** @type {import('tailwindcss').Config} */
import daisyui from "daisyui";
export default {
    content: [
        "./resources/views/*.blade.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/**/**/*.blade.php",
    ],
    theme: {
        colors: {
            Myprimary: "#00262B",
            Mysecondary: "#D9D9D9",
            Mytertiary: "#BBBBBB",
        },
        extend: {
            fontFamily: {
                judul: "Jost-Medium",
            },
        },
    },
    plugins: [daisyui],
};
