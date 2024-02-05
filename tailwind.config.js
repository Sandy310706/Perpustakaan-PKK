/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            fontFamily: {
                montserrat: ["Montserrat Alternates", "sans-serif"],
                nunitosans: ["Nunito Sans", "sans-serif"],
                outfit: ["Outfit", "sans-serif"],
                robotoslab: ["Roboto Slab", "serif"],
                worksans: ["Work Sans", "sans-serif"],
            },
            keyframes: {
                showModal: {
                    from: { top: "-100%" },
                },
                hideModal: {
                    to: { top: "-100%" },
                },
                showImg: {
                    from: { transform: "translateX(-100%)" },
                },
                loading: {
                    from: { transform: "rotate(0deg)" },
                    to: { transform: "rotate(360deg)" },
                },
                showDropdownMenu: {
                    from: { opacity: "0" },
                    to: { opacity: "100" },
                },
                hideDropdownMenu: {
                    from: { opacity: "100" },
                    to: { opacity: "0" },
                },
            },
            animation: {
                showModal: "showModal 1s ease-in-out",
                hideModal: "hideModal 1s ease-in-out",
                loginAsset: "showImg 1s forwards",
                showDropdownMenu: "showDropdownMenu 0.6s ease-in-out",
                hideDropdownMenu: "hideDropdownMenu 0.6s ease-in-out",
            },
        },
    },
    plugins: [],
};
