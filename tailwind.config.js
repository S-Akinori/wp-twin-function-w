/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.php"
  ],
  theme: {
    extend: {
    colors: {
      'base': '#222222',
      'base-color': '#222222',
      'base-cont': '#FCFCFC',
      'main': '#EEEEEE',
      'main-cont': '#222222',
      'accent': '#c1dadf',
      'accent-cont': '#222222',
    },
    },
  },
  plugins: [],
}
