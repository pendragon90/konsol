/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        body: '#FFF1EA',
        primary: '#DA7738',
        g: '#E2E3E5',
      },
    },
  },
  plugins: [],
}