<?php 
	if(get_field('accreditation_show', HOME_ID)): 
	$accreditation_title = get_field('accreditation_title', HOME_ID);
	$accreditation_subtitle = get_field('accreditation_subtitle', HOME_ID);
	$accreditation_images = get_field('accreditation_images', HOME_ID);
?>

<section class="section py-10 sm:py-20" id="accr">
	<div class="container">
		
		<?php if($accreditation_title): ?>
			<h2 class="text-center text-3xl sm:text-5xl font-medium mb-3" data-aos="fade-up"><?= $accreditation_title; ?></h2>
		<?php endif; ?>

		<?php if($accreditation_subtitle): ?>
			<p class="text-center sm:text-xl" data-aos="fade-up" data-aos-delay="100"><?= $accreditation_subtitle; ?></p>
		<?php endif; ?>
		
		<?php if($accreditation_images): ?>
		<div class="swiper accr-slider aspect-square sm:aspect-[21/9]">
			<div class="swiper-wrapper">

			<?php foreach($accreditation_images as $image): ?>
				<div class="swiper-slide">
					<a href="<?= $image; ?>" class="glightbox cursor-zoom-in relative flex items-center justify-center h-full" data-gallery="gallery1">
						<img src="<?= $image; ?>" class="max-h-full w-auto" alt="Аккредитация">
					</a>
				</div>
				<?php endforeach; ?>

			</div>

			<div class="swiper-button-prev !text-gray-900 border rounded-full !w-10 !h-10 shadow opacity-80 hover:opacity-100 after:!text-2xl after:content-['prev']"></div>
			<div class="swiper-button-next !text-gray-900 border rounded-full !w-10 !h-10 shadow opacity-80 hover:opacity-100 after:!text-2xl after:content-['next']"></div>
		</div>
		<?php endif; ?>

	</div>
</section>

<?php endif; ?>