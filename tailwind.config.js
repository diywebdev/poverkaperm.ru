const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
	content: ['./*.html', './src/**/*.js', './data.json'],
	darkMode: 'class',
	theme: {
		container: {
			center: true,
			padding: '1rem',
		},
		colors: {
			transparent: 'transparent',
			current: 'currentColor',
			black: colors.black,
			gray: colors.gray,
			white: colors.white,
			accent: '#E80017',
			'gray-logo': '#272727'
		},
		extend: {
			fontFamily: {
				sans: ['Roboto', ...defaultTheme.fontFamily.sans],
			},
		},
	},
}
