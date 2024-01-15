/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            fontFamily: {
                montserrat: ["Montserrat Alternates", "sans-serif"],
                nunitosans: ["Nunito Sans", "sans-serif"],
            },
        },
    },
    plugins: [],
};
