export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        charcoal: '#36454F',
        'off-white': '#F5F5F5',
        'royal-blue': {
          DEFAULT: '#4169E1',
          'light': '#5a8dee',
        },
      },
      backgroundImage: {
        'royal-gradient': 'linear-gradient(to right, #4169E1, #5a8dee)',
      }
    },
  },
  darkMode: 'class',
  plugins: [],
}
