module.exports = {
  content: ["./**/*.php"],
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'white': '#fff',
      'gray-light': '#F7F7F7',
      'gray-light-2': '#EEEEEE',
      'gray': '#B7B7B7',
      'gray-dark': "#707070",
      'black': '#000',
      'blue': "#39C9F0",
      'blue-dark': "#093363",
      'yellow': '#E7B222',
      'primary': '#39C9F0',
      'secondary': '#093363',
      'text-color': '#093363'
    },
    container: {
      screens: {
        DEFAULT: "1280px",
      },
    },
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px',
      '2xl': '1480px',
    },
    fontFamily: {
      'Poppins': ['Poppins'],
      'Rajdhani': ['Rajdhani'],
    },
    extend: {
      /*gap: {
        '30': '1.875rem',
      }*/
      /*fontFamily: {
        'sans': ['Source Sans Pro', ...defaultTheme.fontFamily.sans],
      },*/
      backgroundImage: {
        'hero-bg': "url('/wp-content/themes/perfectinfo/img/hero-bg.webp')",
        'footer-bg': "url('/wp-content/themes/perfectinfo/img/footer-bg.webp')",
      },
    },
  },
  plugins: [],
}