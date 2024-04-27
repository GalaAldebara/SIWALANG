/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      borderRadius: {
        'login': '100% 42px 42px 100%',
      },
      backgroundColor: {
        'primary-login' : '#add98a',
      },
    },
  },
  plugins: [],
}

