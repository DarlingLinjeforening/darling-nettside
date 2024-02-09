/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  theme: {
    fontFamily: {
      sans: ["Atkinson Hyperlegible", "sans-serif"],
    },
    extend: {
      width: {
        25: "25%",
      },
      height: {
        100: "100vh",
        31: "31rem",
      },
    },
    colors: {
      white: "#FFFFFF",
      "darling-purple": "#5D2684",
      "darling-purple-light": "#D5CAEA",
      "darling-secondary-purple": "#7931AC",
      "darling-secondary-yellow": "#FFB43B",
      "darling-secondary-orange": "#FF743E",
      "darling-secondary-green": "#4D8426",
      "white-alt": "#F2F2F2",
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
