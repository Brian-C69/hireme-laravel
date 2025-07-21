import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

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
        hireme: {
          light: "#D3F9D8",
          DEFAULT: "#43A047",  // primary green
          dark: "#2E7D32",
          accent: "#66BB6A",
          muted: "#A5D6A7",
        }
      }
    }
  },
  plugins: [],
}
