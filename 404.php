<?php
get_header();
?>
<main id="primary" class="site-main">

	<section class="error-404 not-found pt-10">
		<div class="container">
		<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
			}
		?>
		<article class="text-center">
			<h1 class="text-3xl font-bold">404</h1>
			<br>
			<p class="text-xl">Упс! Похоже такой страницы не существует :(</p>
		</article>
		</div>
	</section>

</main>
<?php
get_footer();
