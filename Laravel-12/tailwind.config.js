/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'lavender': {
          50: '#f3f1fe',
          100: '#e6e6fa',
          200: '#d8d6ff',
          300: '#c0b9fe',
          400: '#aa99fc',
          500: '#9370db',
          600: '#7b68ee',
          700: '#644ad9',
          800: '#5438be',
          900: '#473497',
        },
      },
      fontFamily: {
        'sans': ['Poppins', 'sans-serif'],
      },
    },
  },
  plugins: [],
}