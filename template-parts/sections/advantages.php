<?php 
	if(get_field('advantages_show', HOME_ID)): 
	$advantages_title = get_field('advantages_title', HOME_ID);
	$advantages_items = get_field('advantages_items', HOME_ID);
?>

<div class="py-6">
	<div class="container">

		<?php if($advantages_title): ?>
		<h2 class="text-center text-3xl sm:text-5xl font-medium mb-3" data-aos="fade-up"><?= $advantages_title; ?></h2>
		<?php endif;?>

		<?php if($advantages_items): ?>
		<div class="flex flex-wrap justify-center gap-y-4 sm:gap-y-5">

		<?php foreach($advantages_items as $idx => $item): ?>
			<div class="text-center w-1/2 sm:w-1/3 lg:w-1/5 px-4 sm:px-5" data-aos="fade-up" data-aos-delay="<?= $idx*100+200; ?>">
				<div class="aspect-[1/0.3] sm:aspect-[1/0.4] xl:aspect-[1/0.5] flex items-center justify-center">
					<img src="<?=$item['icon'];?>" class="h-16 xl:h-[100px] w-auto object-cover" alt="<?=$item['title'];?>">
				</div>
				<h3 class="font-medium sm:text-lg lg:text-2xl mb-1 sm:mb-1.5"><?=$item['title'];?></h3>
				<p class="text-xs sm:text-base xl:text-base"><?=$item['text'];?></p>
			</div>
		<?php endforeach; ?>

		</div>
		<?php endif;?>


	</div>
</div>

<?php endif;?>