/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.php"
  ],
  theme: {
    extend: {
    colors: {
      'base': '#141a5f',
      'base-color': '#FCFCFC',
      'base-cont': '#FCFCFC',
      'main': '#32527B',
      'main-cont': '#FCFCFC',
      'accent': '#a62c2b',
      'accent-cont': '#222222',
    },
    },
  },
  plugins: [],
}
