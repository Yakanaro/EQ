const defaultTheme = require('tailwindcss/defaultTheme');

/**
 * @type {import('tailwindcss').Config}
 */
module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './node_modules/flowbite/**/*.js'
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      },
      backgroundImage: {
        'background' : "url('https://www.freepik.com/free-vector/gradient-blur-pink-blue-abstract-background_16359095.htm')"
      }
    },
  },

  // plugins: [require('@tailwindcss/forms')],
  plugins: [
    require('flowbite/plugin')
  ],
};