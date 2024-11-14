<?php
get_header();
$home_banner_show = get_field('home_banner_show');
if($home_banner_show) {
	get_template_part('template-parts/sections/banner');
}
$title_h1 = get_field('title_h1');
?>
<main id="primary" class="site-main">

	<section class="py-10 sm:py-20">
		<div class="container xl:max-w-[1200px]">
			<?php if($title_h1): ?>
				<h1 class="text-center text-3xl sm:text-5xl font-medium mb-10 sm:mb-20"><?= $title_h1; ?></h1>
			<?php else: 
			the_title('<h1 class="text-center text-3xl sm:text-5xl font-medium mb-10 sm:mb-20">', '</h1>'); 
			endif;
			?>
			<?php the_content();  ?>
		</div>
	</section>

</main>
<?php
get_footer();