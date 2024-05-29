let mix = require('laravel-mix');
require('mix-tailwindcss');
mix.setPublicPath('/')
	.js('src/js/app.js', 'dist/js/scripts.js')
	.sass('src/scss/app.scss', 'dist/css/styles.css')
	.tailwind();



if (mix.inProduction()) {
	mix.version();
} else {
	mix.sourceMaps().webpackConfig({ devtool: 'inline-source-map' });
	mix.browserSync({
		server: {
			baseDir: "./dist",
		},
		files: ['dist/**/*.html', 'dist/js/scripts.js', 'dist/css/styles.css'],
		notify: false
	});
}

mix.disableSuccessNotifications();