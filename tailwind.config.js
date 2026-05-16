/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './src/js/**/*.{js,jsx}',
  ],
  theme: {
    extend: {
      // ─── Brand colors ────────────────────────────────────────────────────────
      // TODO: Replace with client brand values when available.
      // colors: {
      //   brand: {
      //     50:  '#f0f9ff',
      //     500: '#0ea5e9',
      //     900: '#0c4a6e',
      //   },
      // },

      // ─── Typography ──────────────────────────────────────────────────────────
      // TODO: Add custom fonts here once brand guide is available.
      // fontFamily: {
      //   sans: ['Inter', ...defaultTheme.fontFamily.sans],
      //   serif: ['Merriweather', ...defaultTheme.fontFamily.serif],
      // },

      // ─── Container ───────────────────────────────────────────────────────────
      container: {
        center: true,
        padding: {
          DEFAULT: '1rem',
          sm: '1.5rem',
          lg: '2rem',
        },
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
};
