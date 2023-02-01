/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                "custom-red": "#aa0000",
                "custom-yellow": "#ffc700",
            },
            keyframes: {
                "filter-slide-down": {
                    "0%": { transform: "translateY(-100%)" },
                    "100%": { transform: "translateY(0%)" },
                },
                "filter-slide-up": {
                    "0%": { transform: "translateY(0%)" },
                    "100%": { transform: "translateY(-100%)" },
                },
            },
            animation: {
                "filter-slide-down":
                    "filter-slide-down 0.3s ease-in-out forwards",
                "filter-slide-up": "filter-slide-up 0.3s ease-in-out forwards",
            },
        },
    },

    plugins: [],
};
