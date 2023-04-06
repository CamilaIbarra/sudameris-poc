/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'cabin': 'Cabin, sans-serif'
      },
      colors: {
        'primary': '#ff0000',
        'secondary': {
          100: '#EDEBE6',
          200: '#C7C2BA',
          300: '#AEA79F',
          400: '#988F86',
          500: '#82786F',
          600: '#675C53',
        },
      },
    },
  },
  plugins: [],
}
