<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="sticky top-0 w-full z-20 bg-white">
		<div class="container">
			<div class="flex items-center justify-between h-[50px] lg:h-auto">

				<div class="logo">
					<img src="<?= get_template_directory_uri(); ?>/assets/img/logo.png" class="max-w-[150px] xl:max-w-[220px]" alt="ALT">
				</div>

				<nav class="header-menu">
					<ul>
						<li><a href="#home" class="hidden xl:block scroll-link active">Главная</a></li>
						<li><a href="#services" class="scroll-link">Услуги</a></li>
						<li><a href="#about" class="scroll-link">О компании</a></li>
						<li><a href="#accr" class="scroll-link">Аккредитация</a></li>
						<li class="dropdown group">
							<a class="group-hover:!bg-accent group-hover:!text-white">Проверить нашу аккредитацию</a>
							<ul class="lg:opacity-0 lg:invisible group-hover:opacity-100 group-hover:visible">
								<li><a href="https://pub.fsa.gov.ru/ral/view/35307/applicant" target="_blank">ООО «Акваметролоджи»</a></li>
								<li><a href="https://pub.fsa.gov.ru/ral/view/29510/applicant" target="_blank">ООО "Центр метрологии"</a></li>
								<li><a href="https://pub.fsa.gov.ru/ral/view/33215/applicant" target="_blank">ООО "НПП ГИДРОТЕСТ"</a></li>
							</ul>
						</li>
						<li><a href="#contacts" class="scroll-link">Контакты</a></li>
					</ul>
					<div class="close-menu-btn">×</div>
				</nav>

				<div class="flex items-center gap-4">
					<a href="tel:+73422043332" class="header__phone text-sm font-bold flex items-center gap-1">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-accent" style="width: 24px; height: 24px;">
							<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
						</svg>
						<span class="hidden sm:block">+7 (342) 204-33-32</span>
					</a>

					<button class="toggle-menu-btn"><span></span><span></span><span></span></button>
				</div>

			</div>
		</div>
	</header>