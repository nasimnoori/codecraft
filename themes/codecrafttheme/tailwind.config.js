/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./**/*.php", "./*.html", "./**/*.html"],
  theme: {
    extend: {
      fontFamily: {
        display: ["Poppins", "sans-serif"],
        brand: ["Lato", "sans-serif"],
      },
      colors: {
        branddark2: "#15182C",
        branddark1: "#061f2e",
        branddark: "#09171f",
        branddark70: "#225877",
        branddark50: "#3484b2",
        brandlight: "#F4F4F9",
        brandsecond: "#e63946",
        brandsecond2: "#F25862",
        brandthird: "#4A0C83",
        brandfourth: "#3587EB",
        brandfifth: "#4320E1",
      },
      container: {
        center: true,
        padding: {
          DEFAULT: "1.75rem",
          sm: "1.25rem",
          md: "2rem",
          lg: "2.5rem",
        },
        screens: {
          sm: "640px",
          md: "768px",
          lg: "1024px",
          xl: "1216px",
          "2xl": "1216px",
        },
      },
    },
  },
  plugins: [],
};
