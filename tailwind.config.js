/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./public/**/*.{php,js}",
        "./admin/**/*.{php,js}",
        "./pages/**/*.{php,js}",
        "./*.php",
    ],
    theme: {
      extend: {
        backgroundColor: {
          'primary': '#67277a',
          'secondary': '#cc5b36',
        },
        textColor: {
          'primary': '#67277a',
          'secondary': '#cc5b36',
        },
        borderColor: {
          'primary': '#67277a',
          'secondary': '#cc5b36',
        },
        borderWidth: {
          '20p': '20px',
        },
        height: {
          '500p': '450px',
          '1000p' : '1000px',
        },
        placeholderColor: {
          secondary: '#cc5b36',
        },
        width: {
          '1240p': '1240px',
        },
      },
    },
    plugins: [],
}

