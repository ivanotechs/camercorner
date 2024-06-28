const defaultTheme = require('tailwindcss/defaultTheme');

export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./node_modules/flowbite/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            librefranklin: ['Libre Franklin', ...defaultTheme.fontFamily.sans],
        },
        colors: {
            'primary': '#FF5E14',
            'secondary': '#002667',
            'secondary-2': '#009444',
            'white-50': 'rgba(255, 255, 255, 0.5)',
            'secondary-50': '#FF5E1426',
            'secondary-100': '#EAF4EC',
            'secondary-300': '#CC5700',
            'secondary-200': '#98A5E7',
            'secondary-500' : '#FF5E14',
            'secondary-700': '#FF8C00',
            'secondary-800': '#002FAC',
            'secondary-900': '#003614',
            'footer':'#0B0C0C',
            'light':'#FFF3EE',
            'green-shadow': '#32932129',
            'danger': '#EE4B49',
            'dark-400': '#4B505F',
            'dark-300': '#C7C7C7',
            'dark-900':'#0B0C0C',
            'line-up': '#172C6F',
            'dark-500': 'rgba(30, 31, 31, 1)',
            'danger-600': '#F87171',
            'home-last-section': 'rgba(0, 0, 0, 0.03)'

        },
        spacing: {
            '3/8': '37.5%',
          }
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}

