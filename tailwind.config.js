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
        'primary' : '#2a6c12',
        'secondary' : '#0f2606',
        'primary-form' : '#9ae4a1',
        'button' : '#28a745',
      },
      backgroundImage: {
        'desa-langlang': "url('/public/img/DesaLangLang.png')",
        'people': "url('/public/img/people.png')",
      },
      colors: {
        'si' :'#41b85a',
        'walang': '#00562f',
        'primary' : '#2a6c12',
      },
    },
  },
  plugins: [],
}

