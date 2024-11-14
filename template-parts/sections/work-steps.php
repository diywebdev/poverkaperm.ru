<?php 
	if(get_field('steps_show', HOME_ID)): 
	$steps_title = get_field('steps_title', HOME_ID);
	$steps_items = get_field('steps_items', HOME_ID);
?>

<section class="py-10 sm:py-20 bg-gray-50">
	<div class="container xl:max-w-[1200px]">
		<?php if($steps_title): ?>
		<h2 class="text-center text-3xl sm:text-5xl font-medium mb-20" data-aos="fade-up" data-aos-offset="100"><?= $steps_title; ?></h2>
		<?php endif; ?>
		
		<?php 
		if($steps_items): 
			foreach($steps_items as $idx => $item): 
			
		?>
		<div class="relative <?= (count($steps_items) !== $idx + 1) ? 'pb-12 sm:pb-20' : ''; ?> z-[1] even:md:text-right group <?= even($idx+1) ? 'odd' : 'even'; ?>" data-aos="fade-up">
			<div class="w-12 h-12 rounded-full bg-accent text-white font-bold flex items-center justify-center absolute left-0 md:left-1/2 top-2 md:-translate-x-1/2"><?= $idx + 1; ?></div>
			<?php if(count($steps_items) !== $idx + 1): ?>
			<div class="w-[2px] h-[80%] bg-gray-900 absolute left-6 md:left-1/2 top-[50px] md:-translate-x-1/2 -z-[1]"></div>
			<?php endif; ?>
			<div class="pl-16 group-[.even]:md:pl-0 group-[.even]:md:pr-14 group-[.odd]:md:pl-14 group-[.odd]:md:ml-auto md:w-1/2" data-aos="fade-up">
				<h3 class="font-bold text-xl sm:text-2xl"><?= $item['title']; ?></h3>
				<p class="text-[14px] sm:text-base"><?= $item['text']; ?></p>
			</div>
		</div>
		<?php endforeach; endif; ?>

		<div class="text-center pt-10 sm:pt-24" data-aos="fade-up" id="zayavka">
			<a href="#callback-modal" class="btn btn-accent popup-link aos-init aos-animate" data-aos="zoom-in" data-aos-delay="700" data-form="Онлайн заявка. Кнопка в секции Как мы работаем">Оставить заявку</a>
		</div>

	</div>
</section>

<?php endif; ?>