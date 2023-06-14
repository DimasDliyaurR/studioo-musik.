import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import theme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Manrope", ...defaultTheme.fontFamily.sans],
            },
            textColor: ["active"],
            textColor: {
                text: "#808080",
            },
            colors: {
                primary: "#F2F2F2",
                button: "#B4CD93",
            },
        },
    },

    plugins: [forms],
};
