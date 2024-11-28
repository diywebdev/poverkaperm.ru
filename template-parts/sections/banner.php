<?php 
	if(get_field('banner_show', HOME_ID)): 
	$banner_images = get_field('banner_images', HOME_ID);
	$banner_text = get_field('banner_text', HOME_ID);
	$banner_subtitle = get_field('banner_subtitle', HOME_ID);
	$banner_title = get_field('banner_title', HOME_ID);
?>

<section class="section banner relative" id="home">

	<div class="banner-title px-4 bg-black/60 absolute left-0 top-0 w-full h-full flex flex-col justify-center items-center text-white z-10">
		<?php if($banner_text): ?>
		<div data-aos="fade-down">
			<a href="#zayavka" class="scroll-link text-xl sm:text-3xl bg-accent px-4 py-2 font-normal hover:text-white focus:text-white active:text-white"><?= $banner_text; ?></a>
		</div>
		<?php endif;?>
		<?php if($banner_subtitle): ?>
		<div data-aos="zoom-in-up"><?= $banner_subtitle; ?></div>
		<?php endif;?>
		<?php if($banner_title): ?>
		<p data-aos="fade-up" data-aos-delay="300"><?= $banner_title; ?></p>
		<?php endif;?>
		<div class="flex flex-wrap items-center justify-center gap-5 sm:gap-6 mt-10 relative">
			<a href="https://fgis.gost.ru/fundmetrology/cm/results/" class="btn" data-aos="zoom-in" data-aos-delay="500" target="_blank">Проверьте СИ в Аршине</a>
			<a href="#services" class="btn btn-accent scroll-link" data-aos="zoom-in" data-aos-delay="700">Оставить заявку</a>
		</div>
	</div>
	<?php if($banner_images): ?>
	<div class="banner-slider swiper">
		<div class="swiper-wrapper">
			<?php foreach($banner_images as $image): ?>
			<div class="swiper-slide">
				<div class="banner-slide" style="background-image: url(<?= $image; ?>);"></div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php endif;?>
</section>

<?php endif;?>