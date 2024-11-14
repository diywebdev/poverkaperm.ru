<?php 
	if(get_field('contacts_show', HOME_ID)): 
	$contacts_title = get_field('contacts_title', HOME_ID);
	$address = get_field('address', HOME_ID);
	$map_link = get_field('map_link', HOME_ID);
	$emails = get_field('emails', HOME_ID);
?>

<section class="section py-10 sm:py-20" id="contacts">
	<div class="container">

		<?php if($contacts_title): ?>
		<h2 class="text-center text-3xl sm:text-5xl font-medium mb-10" data-aos="fade-up"><?= $contacts_title; ?></h2>
		<?php endif;?>

		<div class="grid gap-10 lg:grid-cols-2">
			<div data-aos="fade-up">

			<?php if($address): ?>
				<div class="flex items-center gap-2 sm:gap-4 text-[14px] sm:text-lg font-medium border-b border-b-gray-200 pb-6">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 stroke-accent">
						<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
						<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
					</svg>
					<span><?= $address; ?></span>
				</div>
			<?php endif;?>

			<?php if(PHONES): ?>
				<div class="flex gap-2 sm:gap-4 text-[14px] sm:text-lg font-medium border-b border-b-gray-200 py-6">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 stroke-accent">
						<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
					</svg>
					<div class="flex flex-col gap-3">
						<?php 
							foreach(PHONES as $phone): 
							$numbers = $phone['numbers'];
							if($numbers):
						?>
						<span class="flex items-center gap-4 flex-grow">
							<span class="font-bold flex-grow"><?= $phone['podpis'] ? $phone['podpis'] : ''; ?></span>
							<span class="flex flex-col">
								<?php foreach($numbers as $number): ?>
								<a href="tel:<?= formatPhoneLink($number['phone']); ?>" class="whitespace-nowrap"><?= $number['phone']; ?></a>
								<?php endforeach; ?>
							</span>
						</span>
						<?php endif; endforeach; ?>
					</div>
				</div>
			<?php endif;?>
			
			<?php if($emails): ?>
				<div class="flex gap-2 sm:gap-4 text-[14px] sm:text-lg font-medium pt-6">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 stroke-accent">
						<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"></path>
					</svg>
					<div class="flex flex-col gap-3">
					<?php foreach($emails as $item): ?>
						<div>
							<a href="mailto:<?= $item['email']; ?>"><?= $item['email']; ?></a>
							<?php if($item['podpis']): ?>
							<span class="font-normal text-[14px]">(<?= $item['podpis']; ?>)</span>
							<?php endif;?>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			<?php endif;?>

			</div>
			<div data-aos="fade-up">
			<?php if($map_link): ?>
				<iframe src="<?= $map_link;?>" frameborder="0" allowfullscreen="true" width="100%" height="450px" style="display: block;"></iframe>
			<?php endif;?>
				<!-- <iframe src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=false&amp;source=constructor-api&amp;um=constructor%3A68c1953a172e785030977d10fa1ea69100b060ddc862e054334e6eb48125617f" frameborder="0" allowfullscreen="true" width="100%" height="400px" style="display: block;"></iframe> -->
			</div>
		</div>

	</div>
</section>

<?php endif;?>