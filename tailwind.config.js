/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',  // Все Blade шаблоны
    './resources/**/*.js',          // Все JavaScript файлы
    './resources/**/*.vue',         // Если используешь Vue.js
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
