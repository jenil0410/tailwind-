/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        pop: ['Poppins', 'sans-serif'],
        Mistral: ['Dancing Script', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

