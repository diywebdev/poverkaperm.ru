<?php get_template_part('template-parts/sections/contacts'); ?>

<footer class="bg-gray-logo text-white/70 pt-20 pb-10">
		<div class="container">
			<div class="sm:flex sm:justify-between">

				<div class="logo">
					<a href="<?= home_url(); ?>">
						<img src="<?= get_template_directory_uri(); ?>/assets/img/logo_cm_white.png" class="max-w-[150px] xl:max-w-[220px]" style="opacity:0.5;" alt="ALT">
					</a>
					<p class="pt-10 text-left"><?= get_bloginfo('description'); ?></p>
					<div class="py-10">
						<a href="#callback-modal" class="btn btn-accent popup-link text-center" data-form="Онлайн заявка. Кнопка в футере">Оставить заявку</a>
					</div>
				</div>

				<?php if(SERVICES): ?>
				<nav class="bottom-menu">					
					<ul>
					<?php foreach(SERVICES as $idx => $service): setup_postdata( $service ); ?>
						<li><a href="<?= get_permalink($service->ID); ?>" class=""><?= get_the_title($service->ID); ?></a></li>
					<?php endforeach; wp_reset_postdata(); ?>
					</ul>					
				</nav>
				<?php endif; ?>


			</div>
		</div>
		<div class="container pt-10 text-center">
			<p class="mb-4 pt-10">&copy; <span class="uppercase"><?= get_bloginfo('name'); ?></span>, <?= date('Y'); ?></p>
			<a href="#policy-modal" class="underline hover:no-underline inline-block popup-link">Соглашение на обработку персональных данных</a>
		</div>
</footer>
<?php
	get_template_part('template-parts/sections/modals');
?>
<?php wp_footer(); ?>
</body>

</html>