let mix = require('laravel-mix');
require('mix-tailwindcss');
mix.setPublicPath('/')
	.js('src/js/app.js', 'js/scripts.js')
	.sass('src/scss/app.scss', 'css/styles.css')
	.tailwind();



if (mix.inProduction()) {
	mix.version();
} else {
	mix.sourceMaps().webpackConfig({ devtool: 'inline-source-map' });
	mix.browserSync({
		server: {
			baseDir: "./",
		},
		files: ['index.html', 'js/scripts.js', 'css/styles.css'],
		notify: false
	});
}

mix.disableSuccessNotifications();