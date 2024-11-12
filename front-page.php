<?php
get_header(); ?>

<main>
<?php
	get_template_part('template-parts/sections/banner');
	get_template_part('template-parts/sections/services');
	get_template_part('template-parts/sections/about');
	get_template_part('template-parts/sections/advantages');
	get_template_part('template-parts/sections/work-steps');
	get_template_part('template-parts/sections/accreditation');
	get_template_part('template-parts/sections/faq');
	get_template_part('template-parts/sections/contacts');
?>
</main>

<?php
get_footer();
