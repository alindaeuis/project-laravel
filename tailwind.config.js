/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        primary: "#11212D",
        color1: "#253745",
        color2: "9BA8AB",
        color3: "#06141B",
        color4: "#CCD0CF"

      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}