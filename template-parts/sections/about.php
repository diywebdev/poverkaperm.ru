<?php 
	if(get_field('about_show', HOME_ID)): 
	$about_title_h1 = get_field('about_title_h1', HOME_ID);
	$about_title_h2 = get_field('about_title_h2', HOME_ID);
	$about_subtitle = get_field('about_subtitle', HOME_ID);
	$about_items = get_field('about_items', HOME_ID);
?>

<section id="about" class="section py-10 sm:py-20 bg-gray-50">
	<div class="container">
		<?php if($about_title_h1): ?>
		<h1 class="text-center text-3xl sm:text-5xl font-medium mb-10" data-aos="fade-up"><?= $about_title_h1; ?></h1>
		<?php endif;?>
		<?php if($about_title_h2): ?>
		<h2 class="text-center text-3xl sm:text-5xl font-medium mb-3" data-aos="fade-up"><?= $about_title_h2; ?></h2>
		<?php endif;?>
		<?php if($about_subtitle): ?>
		<p class="text-center mb-8 sm:mb-10 sm:text-xl" data-aos="fade-up" data-aos-delay="100"><?= $about_subtitle; ?></p>
		<?php endif;?>
		
		<?php if($about_items): ?>
		<div class="flex flex-wrap justify-center text-gray-800">
			<?php foreach($about_items as $idx => $item): ?>
			<div class="w-1/2 md:w-1/4 2xl:w-1/5 text-center p-2 sm:p-4 xl:p-5" data-aos="fade-up" data-aos-delay="<?= $idx*100+200; ?>">
				<div class="aspect-[1/0.3] sm:aspect-[1/0.4] xl:aspect-[1/0.5] flex items-center justify-center text-2xl sm:text-4xl xl:text-6xl font-bold relative">
					<span class="absolute w-full h-full left-0 top-0 opacity-10 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1/2 xl:w-3/5 h-auto"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></span>
					<span
						data-purecounter-end="<?= $item['about_item_count']?>"
						data-purecounter-duration="<?= ($idx*0.2)+2; ?>"
						class="purecounter"
					>0</span><?= $item['about_item_prefix'] ? '&nbsp;' . $item['about_item_prefix'] : ''?>
				</div>
				<p class="font-medium text-[14px] sm:text-lg uppercase mt-4"><?= $item['about_item_text']?></p>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endif;?>

	</div>
</section>

<?php endif; ?>