<?php 
	if(get_field('services_show', HOME_ID)): 
	$services_title = get_field('services_title', HOME_ID);
?>

<section id="services" class="section py-10 sm:py-20 overflow-hidden">
	<div class="container xl:max-w-[1200px]">
		<?php if($services_title): ?>
		<h2 class="text-center text-3xl sm:text-5xl font-medium mb-10" data-aos="fade-up" data-aos-offset="100"><?= $services_title; ?></h2>
		<?php endif; ?>

		<?php if(SERVICES): ?>
		<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-4 sm:gap-6">

			<?php foreach(SERVICES as $idx => $service): setup_postdata( $service );
				$items = get_field('items', $service->ID);
				//print_r(json_encode($items));
				// json_encode($items);

				// foreach($items as $item){
				// 	print_r(implode('|', $item));
				// }
			?>
			<div class="shadow-2xl px-3 pt-5 pb-20 relative" data-aos="fade-up" data-aos-delay="<?= $idx*100+100; ?>">
				<a href="<?= get_permalink($service->ID); ?>" class="style_no">
					<div class="aspect-[1] flex items-center justify-center">
						<img src="<?= get_the_post_thumbnail_url( $service->ID, 'full' ); ?>" alt="<?= get_the_title($service->ID); ?>">
					</div>
				</a>
				<a href="<?= get_permalink($service->ID); ?>" class="style_no !text-black">
					<h3 class="font-medium text-xl text-center"><?= get_the_title($service->ID); ?></h3>
				</a>
				<div class="flex justify-between gap-3 absolute left-3 right-3 bottom-5">
					<a href="#callback-modal" class="btn btn-accent btn-sm flex-grow popup-link" data-form="Заказ услуги. <?= get_the_title($service->ID); ?>" data-title="<?= get_the_title($service->ID); ?>" data-type="<?= $service->ID === 142 || $service->ID === 151 ? 'poverka' : 'odn'; ?>">Заказать</a>
					<a href="#more-modal" class="btn btn-black btn-sm flex-grow popup-link" data-title="<?= get_the_title($service->ID); ?>" data-form="Заказ услуги. <?= get_the_title($service->ID); ?>" data-more='<?= json_encode($items); ?>' data-type="<?= $service->ID === 142 || $service->ID === 151 ? 'poverka' : 'odn'; ?>">Цена</a>
				</div>
			</div>
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
		<?php endif; ?>

	</div>
</section>

<?php endif; ?>