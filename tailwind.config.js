const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
	content: [
		'./**/*.php', 
		'./js/**/*.js'
	],
	theme: {
		container: {
			center: true,
			padding: '1rem',
		},
		extend: {
			colors: {
				accent: '#E80017',
				'gray-logo': '#272727'
			},
			fontFamily: {
				sans: ['Roboto', ...defaultTheme.fontFamily.sans],
			},
		},
	},
}
