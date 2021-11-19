module.exports = {
  purge: {
    enabled: true,
    content: ['./resources/views/**/*.blade.php',
    './resources/css/**/*.css'
  ],
  safelist: [
    'hidden',
    'flex',
    'grid',
  ]
  },
  theme: {

    extend: {}
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
    require('daisyui'),
  ]
}
