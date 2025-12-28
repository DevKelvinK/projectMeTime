tailwind.config = {
  theme: {
    extend: {
      colors: {
        'pink-primary': '#FDCCC5',
        'pink-secondary': '#FB9D90',

        'gray-primary': '#000000',
        'gray-secondary': '#3F3F3F',
        'gray-Tertiary': '#7A7A7A',
        'stroke': '#CDCDCD',
        'disable': '#EAEAEA',
        'white': '#FFFFFF',
        'whiteG': '#ffffff80',

        'error-base': '#D04048',
        'error-light': '#F77980',
      },
      fontFamily: {
        'rale': ["Raleway", "sans-serif"],
        'montse': ["Montserrat", "sans-serif"],
      },
      backgroundImage: {
        // 'thumb': "url('assets/images/thumb.png')",
      },
      boxShadow: {
        // 'buttonHover': '0px 15px 6px #892ccd05, 0px 9px 5px #892ccd14, 0px 4px 4px #892ccd21, 0px 1px 2px #892ccd26',
      },
    }
  },

  plugins: [
    function ({ addUtilities }) {
      addUtilities({
        '.gradient-instagram': {
          backgroundImage: 'linear-gradient(to top right, #F58529, #DD2A7B, #515BD4)',
          WebkitBackgroundClip: 'text',
          backgroundClip: 'text',
          color: 'transparent',
          display: 'inline-block',
        },
      })
    }
  ],
}