const colors = require( 'tailwindcss/colors' )

module.exports = {
  purge: {
    enabled: process.env.NODE_ENV === "production",
    content: [
      './assets/**/*.html',
      './assets/**/*.js',
      './**/*.php',
    ]
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      primary: '#00FA0D',
      orange: {
        DEFAULT: '#FF9213'
      },
      pink: {
        DEFAULT: '#FF00ED'
      },
      green: {
        DEFAULT: '#1CD05A',
        darkened: '#04A50C',
      },
      blue: {
        500: '#173aec'
      },

      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      yellow: { 
        ...colors.yellow,
        500: '#F9F01E'
      },
      'light-blue': {
        ...colors.lightBlue,
        500: '#26BEFF',
      },
      fuschia: colors.fuchsia,
      lime: colors.lime,

    },

    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        xl: '6rem',
        '2xl': '6rem',
      }
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
