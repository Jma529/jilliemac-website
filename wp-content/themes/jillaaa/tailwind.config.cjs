module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', './src/**/*.{html,js}' ],
  theme: {
    extend: {
      colors: {

      }, // Extend Tailwind's default colors
      spacing: {
        'wrapper-lg': '8vw',
        'wrapper-sm': '40px',
        'section-y-lg': '120px',
        'section-y-sm': '60px',
      },
      fontSize: {

      },
      fontFamily: {
        'header': "'Token 7'",
        'body': "'Token Sans 7'",
      },
    },  
  },
  plugins: [],
};