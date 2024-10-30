<footer class="bg-gray-logo text-white/70 py-10">
		<div class="container">
			<div class="b_menu">

				<div class="logo">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/logo_cm_white.png" class="max-w-[150px] xl:max-w-[220px]" style="opacity:0.5;" alt="ALT">
					<p class="p40t text-left"><?= get_bloginfo('description'); ?></p>
					<div class="p40t" data-aos="fade-up" id="zayavka">
						<a href="#callback-modal" class="btn btn-accent popup-link" data-aos="zoom-in" data-aos-delay="700" data-form="Онлайн заявка. Кнопка в футере">Оставить заявку</a>
					</div>
				</div>

				<nav class="bottom-menu">
					
					<ul>
						<li><a href="https://poverkaperm.ru/schetchiki_hvs_gvs.html" class="">Поверка счётчиков ХВС и ГВС</a></li>
						<li><a href="https://poverkaperm.ru/obschedomovye_schetchiki_hvs_gvs.html" class="">Поверка общедомовых счётчиков воды</a></li>
						<li><a href="https://poverkaperm.ru/kvartirniye_teploschetchiki.html" class="">Поверка квартирных теплосчётчиков</a></li>
						<li><a href="https://poverkaperm.ru/obshedomovie_pribory_ucheta_otopleniya.html" class="">Поверка общедомовых приборов учета отопления</a></li>
						<li><a href="https://poverkaperm.ru/zamena_schetchiki_hvs_gvs.html" class="">Замена / установка счётчиков ХВС и ГВС</a></li>
						<li><a href="https://poverkaperm.ru/zamena_obschedomovye_schetchiki_hvs_gvs.html" class="">Замена общедомовых счётчиков ХВС и ГВС</a></li>
					</ul>
					
				</nav>


			</div>
		</div>
		<div class="container p40t text-center">
			<p class="mb-4 p40t">&copy; <span class="uppercase"><?= get_bloginfo('name'); ?></span>, <?= date('Y'); ?></p>
			<a href="#policy-modal" class="underline hover:no-underline inline-block popup-link">Соглашение на обработку персональных данных</a>
		</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>