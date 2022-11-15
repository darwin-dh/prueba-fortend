/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      borderRadius: {
        perBorder: '30px',
      },
      colors: {
        'perBlue': '#005077',
      }
    },


  },
  plugins: [],
}