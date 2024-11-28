<?php
get_header();
?>
<main id="primary" class="site-main">

	<section class="pt-10">
		<div class="container">
		
		<?php
		if (function_exists('yoast_breadcrumb')) {
			yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
		}
		?>

		<?php
		while (have_posts()) :
			the_post();
			get_template_part('template-parts/content');
			get_template_part('template-parts/acf-blocks');
		endwhile; ?>

		</div>
	</section>

</main>
<?php
get_footer();
