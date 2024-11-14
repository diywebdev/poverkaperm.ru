<?php 
	if(get_field('faq_show', HOME_ID)): 
	$faq_title = get_field('faq_title', HOME_ID);
	$faq_sections = get_field('faq_sections', HOME_ID);
?>

<section class="py-10 sm:py-20 bg-gray-50">
	<div class="container xl:max-w-[1200px]">

		<?php if($faq_title): ?>
		<h2 class="text-center text-3xl sm:text-5xl font-medium mb-3" data-aos="fade-up"><?= $faq_title; ?></h2>
		<?php endif;?>
		
		<?php 
		if($faq_sections): 
			foreach($faq_sections as $section): 
				$items = $section['items'];
				if($items):
		?>
		<?php if($section['title']): ?>
		<h3 class="font-medium text-3xl py-10" data-aos="fade-up"><?= $section['title']; ?></h3>
		<?php endif; ?>
		<div class="faq" data-aos="fade-up">

			<?php foreach($items as $idx => $item): ?>
			<details class="accordion" <?=$idx == 0 ? 'open' : ''; ?>>
				<summary class="text-left text-xl sm:text-2xl"><?= $item['question']; ?></summary>
				<div class="accordion-content"><p><?= $item['answer']; ?></p></div>
			</details>
			<?php endforeach; ?>

      </div>
		<?php endif; endforeach; endif;?>

	</div>

	<script>
		
	</script>

</section>

<?php endif; ?>