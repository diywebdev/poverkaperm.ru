module.exports = {
	plugins: [
		require('postcss-import'), // Поддержка @import в CSS
      require('tailwindcss'), // Подключение Tailwind CSS
      require('postcss-nested'), // Поддержка вложенных селекторов
      require('autoprefixer'), // Автопрефиксы для кроссбраузерности
	]
}