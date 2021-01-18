const colors = require('tailwindcss/colors');

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      black: colors.black,
      white: colors.white,
      gray: colors.trueGray,
      primary: {
        DEFAULT: '#76939d'
      },
      secondary: {
        DEFAULT: '#ddc996',
        light: '#f1eee4'
      },
    },
    fontFamily: {
      'serif': ['Libre Baskerville', 'serif'],
      'playfair': ['Playfair Display', 'serif']
    },
    extend: {}
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
 