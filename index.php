<?php
	require_once(dirname(__FILE__) . '/helpers.php');
	$PHONES = require_once(dirname(__FILE__) . '/phones.php');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<title>Поверка счетчиков воды и теплосчетчиков в Перми без снятия - Центр Метрологии</title>
	<meta name="description" content="Поверка счетчиков воды и теплосчетчиков без снятия: Пермь, Березники, Соликамск. Замена и установка счётчиков ХВС и ГВС. Качественные метрологические услуги от Центра Метрологии">
	<meta name="Keywords" content="Поверка счетчиков воды и теплосчетчиков в Перми без снятия Центр Метрологии"> 
	<meta property="og:url" content="">
	<meta property="og:title" content="Центр метрологии">
	<meta property="og:description" content="Центр метрологии в Перми предлагает услуги по поверке средств измерений, тепловых и водяных счетчиков всех типов, услуги по первичной поверке средств измерений, обслуживание, установка, замена и диагностика узлов учета.">
	<meta property="og:type" content="website">
	<meta property="og:image" content="assets/img/banners/1.jpg">
	<link rel="shortcut icon" href="assets/img/favicon.jpg" type="image/jpg">
	<link rel="stylesheet" href="css/styles.css?171020241501">


</head>

<body>

	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(97476086, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/97476086" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	<header class="sticky top-0 w-full z-20 bg-white">
		<div class="container">
			<div class="flex items-center justify-between h-[50px] lg:h-auto">

				<div class="logo">
					<img src="assets/img/logo.png" class="max-w-[150px] xl:max-w-[220px]" alt="ALT">
				</div>

				<nav class="header-menu" data-hidden>
					<ul>
						<li><a href="#home" class="!hidden xl:block scroll-link active">Главная</a></li>
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
					<div class="close-menu-btn">&times;</div>
				</nav>

				<div class="flex items-center gap-4">
					<a href="tel:<? formatPhoneLink($PHONES[0]['values'][0]); ?>" class="header__phone text-sm font-bold flex items-center gap-1">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-accent" style="width: 24px; height: 24px;">
							<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
						</svg>
						<span class="hidden sm:block"><?= $PHONES[0]['values'][0]; ?></span>
					</a>

					<button class="toggle-menu-btn"><span></span><span></span><span></span></button>
				</div>

			</div>
		</div>
	</header>

	<main>

		<section class="section banner relative" id="home">

			<div class="banner-title px-4 bg-black/60 absolute left-0 top-0 w-full h-full flex flex-col justify-center items-center text-white z-10">
				<h2 data-aos="fade-down">
					<a href="#zayavka" class="scroll-link text-xl sm:text-3xl bg-accent px-4 py-2 font-normal">Успей поверить свой теплосчётчик всего за&nbsp;2400&nbsp;руб!</a>
				</h2>
				<h2 data-aos="zoom-in-up">Поверка под ключ от&nbsp;5&nbsp;рабочих дней</h2>
				<p data-aos="fade-up" data-aos-delay="300">Счетчики воды и тепла: Поверка, замена, установка и&nbsp;сервисное обслуживание средств измерений <br>в&nbsp;Перми и&nbsp;Пермском крае</p>
				<div class="flex flex-wrap items-center justify-center gap-5 sm:gap-6 mt-10 relative">
					<a href="https://fgis.gost.ru/fundmetrology/cm/results/" class="btn" data-aos="zoom-in" data-aos-delay="500" target="_blank">Проверьте СИ в Аршине</a>
					<a href="#services" class="btn btn-accent scroll-link" data-aos="zoom-in" data-aos-delay="700">Оставить заявку</a>
				</div>
			</div>

			<div class="banner-slider swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="banner-slide" style="background-image: url(assets/img/banners/1.jpg);"></div>
					</div>
					<div class="swiper-slide">
						<div class="banner-slide" style="background-image: url(assets/img/banners/2.jpg);"></div>
					</div>
					<div class="swiper-slide">
						<div class="banner-slide" style="background-image: url(assets/img/banners/3.jpg);"></div>
					</div>
					<div class="swiper-slide">
						<div class="banner-slide" style="background-image: url(assets/img/banners/4.jpg);"></div>
					</div>
				</div>
			</div>
		</section>

		<section id="services" class="section py-10 sm:py-20 overflow-hidden">
			<div class="container xl:max-w-[1200px]">
				<h2 class="text-center text-3xl sm:text-5xl font-medium mb-10" data-aos="fade-up" data-aos-offset="100">Наши услуги</h2>

				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-4 sm:gap-6">

					<div class="shadow-2xl px-3 pt-5 pb-20 relative" data-aos="fade-right">
						<a href="https://poverkaperm.ru/schetchiki_hvs_gvs.html" class="style_no">
						    <div class="aspect-[1] flex items-center justify-center">
							<img src="assets/img/services/1.jpg" alt="">
						</div>
						</a>
						<a href="https://poverkaperm.ru/schetchiki_hvs_gvs.html" class="style_no">
						    <h3 class="font-medium text-xl text-center">Поверка счётчиков ХВС и&nbsp;ГВС</h3>
						    </a>
						<div class="flex justify-between gap-3 absolute left-3 right-3 bottom-5">
							<a href="#callback-modal" class="btn btn-accent btn-sm flex-grow popup-link" data-form="Заказ услуги. Поверка счётчиков ХВС и ГВС" data-title="Поверка счётчиков ХВС и ГВС" data-type="poverka">Заказать</a>
							<a href="#more-modal" class="btn btn-black btn-sm flex-grow popup-link" data-title="Поверка счётчиков ХВС и ГВС" data-form="Заказ услуги. Поверка счётчиков ХВС и ГВС" data-more="1" data-type="poverka">Цена</a>
						</div>
					</div>

					<div class="shadow-2xl px-3 pt-5 pb-20 relative" data-aos="fade-up" data-aos-delay="100">
						<a href="https://poverkaperm.ru/obshedomovie_pribory_ucheta_otopleniya.html" class="style_no">
						<div class="aspect-[1] flex items-center justify-center">
							<img src="assets/img/services/2.jpg" alt="">
						</div>
						</a>
						<a href="https://poverkaperm.ru/obshedomovie_pribory_ucheta_otopleniya.html" class="style_no">
						<h3 class="font-medium text-xl text-center">Поверка общедомовых приборов учета отопления</h3>
						</a>
						<div class="flex justify-between gap-3 absolute left-3 right-3 bottom-5">
							<a href="#callback-modal" class="btn btn-accent btn-sm flex-grow popup-link" data-form="Заказ услуги. Поверка общедомовых приборов учета отопления" data-title="Поверка общедомовых приборов учета отопления">Заказать</a>
							<a href="#more-modal" class="btn btn-black btn-sm flex-grow popup-link" data-title="Поверка общедомовых приборов учета отопления" data-form="Заказ услуги. Поверка общедомовых приборов учета отопления" data-more="2">Цена</a>
						</div>
					</div>

					<div class="shadow-2xl px-3 pt-5 pb-20 relative" data-aos="fade-left" data-aos-delay="200">
						<a href="https://poverkaperm.ru/kvartirniye_teploschetchiki.html" class="style_no">
						<div class="aspect-[1] flex items-center justify-center">
							<img src="assets/img/services/3.jpg" alt="">
						</div>
						</a>
						<a href="https://poverkaperm.ru/kvartirniye_teploschetchiki.html" class="style_no">
						<h3 class="font-medium text-xl text-center">Поверка квартирных теплосчётчиков</h3>
						</a>
						<div class="flex justify-between gap-3 absolute left-3 right-3 bottom-5">
							<a href="#callback-modal" class="btn btn-accent btn-sm flex-grow popup-link" data-form="Заказ услуги. Поверка квартирных теплосчётчиков" data-title="Поверка квартирных теплосчётчиков">Заказать</a>
							<a href="#more-modal" class="btn btn-black btn-sm flex-grow popup-link" data-title="Поверка квартирных теплосчётчиков" data-form="Заказ услуги. Поверка квартирных теплосчётчиков" data-more="3">Цена</a>
						</div>
					</div>

					<div class="shadow-2xl px-3 pt-5 pb-20 relative" data-aos="fade-right" data-aos-delay="300">
						<a href="https://poverkaperm.ru/obschedomovye_schetchiki_hvs_gvs.html" class="style_no">
						<div class="aspect-[1] flex items-center justify-center">
							<img src="assets/img/services/4.png" alt="">
						</div>
						</a>
						<a href="https://poverkaperm.ru/obschedomovye_schetchiki_hvs_gvs.html" class="style_no">
						<h3 class="font-medium text-xl text-center">Поверка общедомовых счётчиков воды</h3>
						</a>
						<div class="flex justify-between gap-3 absolute left-3 right-3 bottom-5">
							<a href="#callback-modal" class="btn btn-accent btn-sm flex-grow popup-link" data-form="Заказ услуги. Поверка общедомовых счётчиков воды" data-title="Поверка общедомовых счётчиков воды">Заказать</a>
							<a href="#more-modal" class="btn btn-black btn-sm flex-grow popup-link" data-title="Поверка общедомовых счётчиков воды" data-form="Заказ услуги. Поверка общедомовых счётчиков воды" data-more="4">Цена</a>
						</div>
					</div>

					<div class="shadow-2xl px-3 pt-5 pb-20 relative" data-aos="fade-up" data-aos-delay="400">
						<a href="https://poverkaperm.ru/zamena_schetchiki_hvs_gvs.html" class="style_no">
						<div class="aspect-[1] flex items-center justify-center">
							<img src="assets/img/services/5.png" alt="">
						</div>
						</a>
						<a href="https://poverkaperm.ru/zamena_schetchiki_hvs_gvs.html" class="style_no">
						<h3 class="font-medium text-xl text-center">Замена&nbsp;/&nbsp;установка счётчиков ХВС и ГВС</h3>
						</a>
						<div class="flex justify-between gap-3 absolute left-3 right-3 bottom-5">
							<a href="#callback-modal" class="btn btn-accent btn-sm flex-grow popup-link" data-form="Заказ услуги. Замена / установка счётчиков ХВС и ГВС" data-title="Замена&nbsp;/&nbsp;установка счётчиков ХВС и ГВС" data-type="poverka">Заказать</a>
							<a href="#more-modal" class="btn btn-black btn-sm flex-grow popup-link" data-title="Замена&nbsp;/&nbsp;установка счётчиков ХВС и ГВС" data-form="Заказ услуги. Замена&nbsp;/&nbsp;установка счётчиков ХВС и ГВС" data-more="5" data-type="poverka">Цена</a>
						</div>
					</div>

					<div class="shadow-2xl px-3 pt-5 pb-20 relative" data-aos="fade-left" data-aos-delay="500">
					    <a href="https://poverkaperm.ru/zamena_obschedomovye_schetchiki_hvs_gvs.html" class="style_no">
						<div class="aspect-[1] flex items-center justify-center">
							<img src="assets/img/services/6.jpg" alt="">
						</div>
						</a>
						<a href="https://poverkaperm.ru/zamena_obschedomovye_schetchiki_hvs_gvs.html" class="style_no">
						<h3 class="font-medium text-xl text-center">Замена общедомовых счётчиков ХВС и ГВС</h3>
						</a>
						<div class="flex justify-between gap-3 absolute left-3 right-3 bottom-5">
							<a href="#callback-modal" class="btn btn-accent btn-sm flex-grow popup-link" data-form="Заказ услуги. Замена общедомовых счётчиков ХВС и ГВС" data-title="Замена общедомовых счётчиков ХВС и ГВС">Заказать</a>
							<a href="#more-modal" class="btn btn-black btn-sm flex-grow popup-link" data-title="Замена общедомовых счётчиков ХВС и ГВС" data-form="Заказ услуги. Замена общедомовых счётчиков ХВС и ГВС" data-more="6">Цена</a>
						</div>
					</div>

				</div>

			</div>
		</section>

		<section id="about" class="section py-10 sm:py-20 bg-gray-50">
			<div class="container">
			    <h1 class="text-center text-3xl sm:text-5xl font-medium mb-3" data-aos="fade-up">Поверка счетчиков воды и теплосчетчиков в Перми </h1>
				<h2 class="text-center text-3xl sm:text-5xl font-medium mb-3" data-aos="fade-up">О компании</h2>
				<p class="text-center mb-8 sm:mb-10 sm:text-xl" data-aos="fade-up" data-aos-delay="100">Мы работаем на рынке метрологических услуг с 2016 года:</p>

				<div class="flex flex-wrap justify-center text-gray-800">

					<div class="w-1/2 md:w-1/4 2xl:w-1/5 text-center p-2 sm:p-4 xl:p-5" data-aos="fade-up">
						<div class="aspect-[1/0.3] sm:aspect-[1/0.4] xl:aspect-[1/0.5] flex items-center justify-center text-2xl sm:text-4xl xl:text-6xl font-bold relative">
							<span class="absolute w-full h-full left-0 top-0 opacity-10 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1/2 xl:w-3/5 h-auto"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></span>
							<span
								data-purecounter-end="150000"
								data-purecounter-duration="2"
								class="purecounter"
							>0</span>
						</div>
						<p class="font-medium text-[14px] sm:text-lg uppercase mt-4">счетчиков в год</p>
					</div>
					<div class="w-1/2 md:w-1/4 2xl:w-1/5 text-center p-2 sm:p-4 xl:p-5" data-aos="fade-up" data-aos-delay="200">
						<div class="aspect-[1/0.3] sm:aspect-[1/0.4] xl:aspect-[1/0.5] flex items-center justify-center text-2xl sm:text-4xl xl:text-6xl font-bold relative">
							<span class="absolute w-full h-full left-0 top-0 opacity-10 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1/2 xl:w-3/5 h-auto"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></span>
							<span
								data-purecounter-end="50"
								data-purecounter-duration="2.2"
								class="purecounter"
							>0</span>&nbsp;УК
						</div>
						<p class="font-medium text-[14px] sm:text-lg uppercase mt-4">работают с нами</p>
					</div>
					<div class="w-1/2 md:w-1/4 2xl:w-1/5 text-center p-2 sm:p-4 xl:p-5" data-aos="fade-up" data-aos-delay="400">
						<div class="aspect-[1/0.3] sm:aspect-[1/0.4] xl:aspect-[1/0.5] flex items-center justify-center text-2xl sm:text-4xl xl:text-6xl font-bold relative">
							<span class="absolute w-full h-full left-0 top-0 opacity-10 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1/2 xl:w-3/5 h-auto"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></span>
							<span
								data-purecounter-end="500"
								data-purecounter-duration="2.4"
								class="purecounter"
							>0</span>&nbsp;ТСЖ
						</div>
						<p class="font-medium text-[14px] sm:text-lg uppercase mt-4">обращаются к нам</p>
					</div>
					<div class="w-1/2 md:w-1/4 2xl:w-1/5 text-center p-2 sm:p-4 xl:p-5" data-aos="fade-up" data-aos-delay="600">
						<div class="aspect-[1/0.3] sm:aspect-[1/0.4] xl:aspect-[1/0.5] flex items-center justify-center text-2xl sm:text-4xl xl:text-6xl font-bold relative">
							<span class="absolute w-full h-full left-0 top-0 opacity-10 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-1/2 xl:w-3/5 h-auto"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg></span>
							<span
								data-purecounter-end="100000"
								data-purecounter-duration="2.6"
								class="purecounter"
							>0</span>
						</div>
						<p class="font-medium text-[14px] sm:text-lg uppercase mt-4">довольных клиентов</p>
					</div>

				</div>

			</div>
		</section>

		<div class="pt-6">
			<div class="container">
				<div class="flex flex-wrap justify-center gap-y-4 sm:gap-y-5">

					<div class="text-center w-1/2 sm:w-1/3 lg:w-1/5 px-4 sm:px-5" data-aos="fade-up" data-aos-offset="100">
						<div class="aspect-[1/0.3] sm:aspect-[1/0.4] xl:aspect-[1/0.5] flex items-center justify-center text-accent">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 xl:w-1/3 h-auto"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
						</div>
						<h3 class="font-medium sm:text-lg lg:text-2xl mb-1.5">Оперативность</h3>
						<p class="text-[10px] sm:text-base xl:text-base">Выполняем работы от 3 дней</p>
					</div>
					<div class="text-center w-1/2 sm:w-1/3 lg:w-1/5 px-4 sm:px-5" data-aos="fade-up" data-aos-delay="200" data-aos-offset="100">
						<div class="aspect-[1/0.3] sm:aspect-[1/0.4] xl:aspect-[1/0.5] flex items-center justify-center text-accent">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 xl:w-1/3 h-auto"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" /></svg>
						</div>
						<h3 class="font-medium sm:text-lg lg:text-2xl mb-1.5">Качество</h3>
						<p class="text-[10px] sm:text-base xl:text-base">Проводим работы с помощью современного и высокоточного оборудования</p>
					</div>
					<div class="text-center w-1/2 sm:w-1/3 lg:w-1/5 px-4 sm:px-5" data-aos="fade-up" data-aos-delay="400" data-aos-offset="100">
						<div class="aspect-[1/0.3] sm:aspect-[1/0.4] xl:aspect-[1/0.5] flex items-center justify-center text-accent">
							<img src="assets/img/ngp.png" alt="">
						</div>
						<h3 class="font-medium sm:text-lg lg:text-2xl mb-1.5">Официальный представитель</h3>
						<p class="text-[10px] sm:text-base xl:text-base"><a href="https://www.novogor.perm.ru/" target="_blank" rel="noopener noreferrer" class="font-normal underline hover:no-underline">ООО “Новогор-Прикамье”</a></p>
					</div>
					<div class="text-center w-1/2 sm:w-1/3 lg:w-1/5 px-4 sm:px-5" data-aos="fade-up" data-aos-delay="600" data-aos-offset="100">
						<div class="aspect-[1/0.3] sm:aspect-[1/0.4] xl:aspect-[1/0.5] flex items-center justify-center text-accent">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 xl:w-1/3 h-auto"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" /></svg>
						</div>
						<h3 class="font-medium sm:text-lg lg:text-2xl mb-1.5">Выгода</h3>
						<p class="text-[10px] sm:text-base xl:text-base">Предлагаем цены на 20% выгоднее, чем у конкурентов</p>
					</div>
					<div class="text-center w-1/2 sm:w-1/3 lg:w-1/5 px-4 sm:px-5" data-aos="fade-up" data-aos-delay="800" data-aos-offset="100">
						<div class="aspect-[1/0.3] sm:aspect-[1/0.4] xl:aspect-[1/0.5] flex items-center justify-center text-accent">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 xl:w-1/3 h-auto"><path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" /></svg>
						</div>
						<h3 class="font-medium sm:text-lg lg:text-2xl mb-1.5">Индивидульный подход</h3>
						<p class="text-[10px] sm:text-base xl:text-base">Проводим коллективные заявки с ТСЖ, управляющими компаниями на выгодных условиях</p>
					</div>

				</div>
			</div>
		</div>

		<section class="py-10 sm:py-20">
			<div class="container xl:max-w-[1200px]">
				<h2 class="text-center text-3xl sm:text-5xl font-medium mb-20" data-aos="fade-up" data-aos-offset="100">Как мы работаем</h2>

				<div class="relative pb-12 sm:pb-20">
					<div class="w-12 h-12 rounded-full bg-accent text-white font-bold flex items-center justify-center absolute left-0 md:left-1/2 top-2 md:-translate-x-1/2">1</div>
					<div class="w-[2px] h-[80%] bg-gray-900 absolute left-6 md:left-1/2 top-[50px] md:-translate-x-1/2 -z-[1]"></div>
					<div class="pl-16 md:pl-0 md:pr-14 md:w-1/2" data-aos="fade-up">
						<h3 class="md:text-right font-bold text-xl sm:text-2xl">Звонок или онлайн-заявка</h3>
						<p class="text-[14px] sm:text-base md:text-right">Закажите поверку водосчетчика или теплосчетчика. Наш менеджер свяжется с Вами в течении дня</p>
					</div>
				</div>
				<div class="relative pb-12 sm:pb-20">
					<div class="w-12 h-12 rounded-full bg-accent text-white font-bold flex items-center justify-center absolute left-0 md:left-1/2 top-2 md:-translate-x-1/2">2</div>
					<div class="w-[2px] h-[80%] bg-gray-900 absolute left-6 md:left-1/2 top-[50px] md:-translate-x-1/2 -z-[1]"></div>
					<div class="pl-16 md:pl-14 md:w-1/2 md:ml-auto" data-aos="fade-up">
						<h3 class="text-left font-bold text-xl sm:text-2xl">Выезд специалиста</h3>
						<p class="text-[14px] sm:text-base text-left">Специалист поверки водосчетчиков и теплосчетчиков приедет к вам в назначенную дату и время, согласованную с Вами</p>
					</div>
				</div>
				<div class="relative pb-12 sm:pb-20">
					<div class="w-12 h-12 rounded-full bg-accent text-white font-bold flex items-center justify-center absolute left-0 md:left-1/2 top-2 md:-translate-x-1/2">3</div>
					<div class="w-[2px] h-[90%] bg-gray-900 absolute left-6 md:left-1/2 top-[50px] md:-translate-x-1/2 -z-[1]"></div>
					<div class="pl-16 md:pl-0 md:pr-14 md:w-1/2" data-aos="fade-up">
						<h3 class="md:text-right font-bold text-xl sm:text-2xl">Проведение необходимых работ</h3>
						<p class="text-[14px] sm:text-base md:text-right">Специалист проведет поверку водосчетчика и теплосчетчика без снятия, замену, установку c опломбировкой прибора или заберет прибор на поверку в лабораторию, в зависимости от заявки</p>
					</div>
				</div>
				<div class="relative">
					<div class="w-12 h-12 rounded-full bg-accent text-white font-bold flex items-center justify-center absolute left-0 md:left-1/2 top-2 md:-translate-x-1/2">4</div>
					<div class="pl-16 md:pl-14 md:w-1/2 md:ml-auto" data-aos="fade-up">
						<h3 class="text-left font-bold text-xl sm:text-2xl">Оформление документов</h3>
						<p class="text-[14px] sm:text-base text-left">Выдаем свидетельства о поверке водосчетчика и теплосчетчика<br>
							Составляем акты для ресурсоснабжающих организаций, ТСЖ и УК<br>
							Результаты поверок заносим во ФГИС “Аршин”</p>
					</div>
				</div>

				<div class="text-center pt-10 sm:pt-24" data-aos="fade-up" id="zayavka">
					<a href="#callback-modal" class="btn btn-accent popup-link aos-init aos-animate" data-aos="zoom-in" data-aos-delay="700" data-form="Онлайн заявка. Кнопка в секции Как мы работаем">Оставить заявку</a>
				</div>

			</div>
		</section>

		<section class="section py-10 sm:py-20" id="accr">
			<div class="container xl:max-w-[1200px]">
				<h2 class="text-center text-3xl sm:text-5xl font-medium mb-3" data-aos="fade-up">Аккредитация</h2>
				<p class="text-center mb-8 sm:mb-16 sm:text-xl" data-aos="fade-up" data-aos-delay="100">Нам можно доверять, мы прошли государственную аккредитацию!</p>

				<div class="swiper accr-slider aspect-square sm:aspect-[1/0.5]">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<a href="assets/img/accr/1.png" class="glightbox cursor-zoom-in relative flex items-center justify-center h-full" data-gallery="gallery1">
								<img src="assets/img/accr/1.png" class="max-h-full w-auto" alt="ALT">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/img/accr/2-1.jpg" class="glightbox cursor-zoom-in relative flex items-center justify-center h-full" data-gallery="gallery1">
								<img src="assets/img/accr/2-1.jpg" class="max-h-full w-auto" alt="ALT">
							</a>
						</div>
						<div class="swiper-slide">
							<a href="assets/img/accr/3-1.jpg" class="glightbox cursor-zoom-in relative flex items-center justify-center h-full" data-gallery="gallery1">
								<img src="assets/img/accr/3-1.jpg" class="max-h-full w-auto" alt="ALT">
							</a>
						</div>
					</div>
					<div class="swiper-button-prev !text-gray-900 border rounded-full !w-10 !h-10 shadow opacity-80 hover:opacity-100 after:!text-2xl"></div>
					<div class="swiper-button-next !text-gray-900 border rounded-full !w-10 !h-10 shadow opacity-80 hover:opacity-100 after:!text-2xl"></div>
				</div>

			</div>
			
		
			<div class="container xl:max-w-[1200px]">
                <h2 class="text-center text-3xl sm:text-5xl font-medium mb-3 aos-init aos-animate h_acc" data-aos="fade-up">Частые вопросы и ответы о поверке и замене счетчиков</h2>
                <h2 class="font-medium text-3xl  h_acc">Частые вопросы юридических лиц</h2>
                <div id="details1">
                <details class="accordion" open>
                  <summary class="text-left text-xl sm:text-2xl">Как часто необходимо проводить поверку общедомовых счетчиков? 
                </summary>
                  <div class="accordion-content">
                    <p>Общедомовые счетчики обычно поверяются каждые 4-6 лет, в зависимости от типа прибора. Регулярная поверка обеспечивает точность учета и снижает риски переплат.</p>
                  </div>
                </details>
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Какова процедура поверки общедомовых приборов учета?</summary>
                  <div class="accordion-content">
                    <p>Процедура поверки включает проверку работоспособности и точности приборов на месте или в лаборатории. После поверки выдается акт и свидетельство о поверке.</p>
                  </div>
                </details>
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Какие документы нужны для поверки общедомовых счетчиков?</summary>
                  <div class="accordion-content">
                    <p>Для поверки нужны паспорт счетчика и предыдущий акт поверки. В случае первичной поверки требуется только паспорт.</p>
                  </div>
                </details>
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Как записаться на поверку для юридического лица?</summary>
                  <div class="accordion-content">
                    <p>Записаться на поверку можно через форму на сайте или по телефону. Наши специалисты подберут удобное время и быстро проведут поверку. Мы работаем по Пермскому краю: Пермь, Березники, Соликамск и др.</p>
                  </div>
                </details>
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Предоставляете ли вы услуги по поверке промышленных счетчиков?</summary>
                  <div class="accordion-content">
                    <p>Да, мы предоставляем услуги по поверке промышленных счетчиков, включая водомеры и тепломеры, используемые в коммерческих и производственных зданиях.</p>
                  </div>
                </details>
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Можно ли заключить договор на регулярное обслуживание и поверку счетчиков?</summary>
                  <div class="accordion-content">
                    <p>Да, мы предлагаем заключение договоров на регулярное обслуживание и поверку счетчиков для юридических лиц, что позволяет планировать работы и снижать риски.</p>
                  </div>
                </details>
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Что делать, если выявлены неисправности в общедомовых счетчиках?</summary>
                  <div class="accordion-content">
                    <p>При обнаружении неисправностей мы предлагаем услуги по ремонту или замене счетчиков. Все работы выполняются квалифицированными специалистами с использованием сертифицированного оборудования.</p>
                  </div>
                </details>
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Какова стоимость поверки общедомовых и промышленных счетчиков?</summary>
                  <div class="accordion-content">
                    <p>Стоимость зависит от типа счетчика и объема работ. Точную цену можно узнать по телефону или на сайте, а также узнать о возможных скидках и акциях для юридических лиц.</p>
                  </div>
                </details>
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Какие виды оплаты вы принимаете для юридических лиц?</summary>
                  <div class="accordion-content">
                    <p>Для юридических лиц мы принимаем безналичные расчеты. Все необходимые реквизиты и счета будут предоставлены при оформлении заказа.</p>
                  </div>
                </details>
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Какие дополнительные услуги вы предоставляете юридическим лицам?</summary>
                  <div class="accordion-content">
                    <p>Помимо поверки, мы предоставляем услуги по установке, ремонту, замене и обслуживанию счетчиков, а также консультации по выбору и эксплуатации приборов учета. Мы работаем по Пермскому краю: Пермь, Березники, Кунгур и др.</p>
                  </div>
                </details>
                </div>
                </div>
                <div class="container xl:max-w-[1200px]">
                
                <h2 class="font-medium text-3xl h_acc">Частые вопросы физических лиц</h2>
                
                 <div id="details2">
                <details class="accordion" open>
                  <summary class="text-left text-xl sm:text-2xl">Что такое поверка счетчиков и зачем она нужна?</summary>
                  <div class="accordion-content">
                    <p>Поверка счетчиков – это проверка их точности и исправности водосчетчиков и теплосчетчиков. Она необходима для подтверждения правильности учета потребленных ресурсов и предотвращения переплат.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Как часто нужно проводить поверку счетчиков воды и отопления?</summary>
                  <div class="accordion-content">
                    <p>Счетчики горячей воды поверяются каждые 4 года, холодной – каждые 6 лет. Счетчики отопления следует проверять каждые 4-6 лет в зависимости от модели.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Что происходит, если не провести поверку вовремя?</summary>
                  <div class="accordion-content">
                    <p>Если не провести поверку вовремя, счетчики (водосчетчики и теплосчетчики) считаются недействительными, и расчет за ресурсы будет производиться по нормативам, что может значительно повысить расходы.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Нужно ли снимать счетчики для поверки?</summary>
                  <div class="accordion-content">
                    <p>Нет, в большинстве случаев поверка проводится на месте без демонтажа счетчиков (водосчетчиков и теплосчетчиков), что экономит время и деньги.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Как подготовиться к поверке счетчиков? </summary>
                  <div class="accordion-content">
                    <p>Перед визитом специалиста необходимо обеспечить доступ к счетчикам и удостовериться, что приборы в исправном состоянии и нет протечек.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Сколько времени занимает поверка одного счетчика?</summary>
                  <div class="accordion-content">
                    <p>Поверка одного счетчика обычно занимает около 30 минут.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Какие документы я получу после поверки?</summary>
                  <div class="accordion-content">
                    <p>После поверки вы получите акт поверки и свидетельство о поверке, подтверждающие исправность счетчика.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Как узнать, что моя компания аккредитована для проведения поверок?</summary>
                  <div class="accordion-content">
                    <p>Наша компания имеет государственную аккредитацию, что подтверждается соответствующими документами, размещенными на сайте.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Какие услуги вы предоставляете помимо поверки счетчиков?</summary>
                  <div class="accordion-content">
                    <p>Мы также предоставляем услуги по установке, замене и обслуживанию счетчиков, а также комплексные решения для учета ресурсов.</p>
                  </div>
                </details> 
                  
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Как записаться на поверку?</summary>
                  <div class="accordion-content">
                    <p>Вы можете записаться на поверку через форму на нашем сайте или позвонив по указанным контактным номерам в Перми, Березниках и Кунгуре. Мы предложим удобное для вас время и оперативно проведем все необходимые работы.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Сколько стоит поверка счетчиков?</summary>
                  <div class="accordion-content">
                    <p>Стоимость поверки счетчиков зависит от типа прибора и его количества. Точную цену можно узнать на нашем сайте или по телефону, а также узнать о возможных акциях и скидках.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Какие гарантии вы предоставляете на свои услуги?</summary>
                  <div class="accordion-content">
                    <p>Мы гарантируем качество наших услуг, подтвержденное аккредитацией и опытом с 2016 года. При обнаружении дефектов или неточностей мы бесплатно повторим поверку.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Можно ли доверять вашему оборудованию для поверки?</summary>
                  <div class="accordion-content">
                    <p>Да, мы используем современное и сертифицированное оборудование, соответствующее всем государственным стандартам и требованиям.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Что делать, если мой счетчик не прошел поверку?</summary>
                  <div class="accordion-content">
                    <p>Если счетчик не прошел поверку, необходимо заменить его на новый. Мы можем предложить услуги по замене и установке новых счетчиков.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Можно ли заказать поверку в выходные или праздничные дни?</summary>
                  <div class="accordion-content">
                    <p>Да, мы работаем по гибкому графику и можем провести поверку в выходные и праздничные дни по предварительной договоренности. В контактах есть телефоны Пермь, Березники и Кунгур.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Какие виды счетчиков вы поверяете?</summary>
                  <div class="accordion-content">
                    <p>Мы поверяем счетчики холодной и горячей воды, а также счетчики отопления и общедомовые приборы учета.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Как долго действует свидетельство о поверке?</summary>
                  <div class="accordion-content">
                    <p>Свидетельство о поверке действует до следующего срока поверки, который зависит от типа счетчика (4 или 6 лет).</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Предоставляете ли вы услуги по установке и замене счетчиков?</summary>
                  <div class="accordion-content">
                    <p>Да, помимо поверки, мы предлагаем услуги по профессиональной установке и замене счетчиков с последующей регистрацией и поверкой.</p>
                  </div>
                </details> 
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Можно ли вызвать мастера срочно?</summary>
                  <div class="accordion-content">
                    <p>Да, мы предоставляем срочные услуги. Свяжитесь с нами, и мы постараемся направить мастера в максимально короткие сроки. В контактах есть телефоны Пермь, Березники и Кунгур.</p>
                  </div>
                </details>
                
                <details class="accordion">
                  <summary class="text-left text-xl sm:text-2xl">Какие способы оплаты вы принимаете?</summary>
                  <div class="accordion-content">
                    <p>Мы принимаем наличные, банковские карты и безналичные расчеты. Уточнить удобный способ оплаты можно при оформлении заказа.</p>
                  </div>
                </details>  
                </div>
            </div> 

	<script>
	let d1 = document.getElementById("details1"); 
	let d2 = document.getElementById("details2"); 
    d1.querySelectorAll('details').forEach((D,_,A)=>{
        D.ontoggle =_=>{ if(D.open) A.forEach(d =>{ if(d!=D) d.open=false })}
    });
    d2.querySelectorAll('details').forEach((D,_,A)=>{
        D.ontoggle =_=>{ if(D.open) A.forEach(d =>{ if(d!=D) d.open=false })}
    });
	</script>
			
			
		</section>
		

		<section class="section py-10 sm:py-20 bg-gray-50" id="contacts">
			<div class="container xl:max-w-[1200px]">
				<h2 class="text-center text-3xl sm:text-5xl font-medium mb-10" data-aos="fade-up">Контакты</h2>

				<div class="grid gap-10 lg:grid-cols-2">
					<div data-aos="fade-up">

						<div class="flex items-center gap-2 sm:gap-4 text-[14px] sm:text-lg font-medium border-b border-b-gray-200 pb-6">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 stroke-accent">
								<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
								<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
							</svg>
							<span>г. Пермь, ул. Н. Островского, 49</span>
						</div>
						<div class="flex gap-2 sm:gap-4 text-[14px] sm:text-lg font-medium border-b border-b-gray-200 py-6">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 stroke-accent">
								<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
							</svg>
							<div class="flex flex-col gap-3">
								<?php foreach($PHONES as $phone): ?>
									<span class="flex items-center gap-4 flex-grow">
										<span class="font-bold flex-grow"><?= $phone['label']; ?></span>
										<div class="flex flex-col">
										<?php foreach($phone['values'] as $ph): ?>
											<a href="tel:<?= formatPhoneLink($ph); ?>" class="whitespace-nowrap"><?= $ph; ?></a>
										<?php endforeach; ?>
										</div>
									</span>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="flex gap-2 sm:gap-4 text-[14px] sm:text-lg font-medium pt-6">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 stroke-accent">
								<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
							</svg>
							<div class="flex flex-col gap-3">
								<div>
									<a href="mailto:poverka@geosr.ru">poverka@geosr.ru</a>
									<span class="font-normal text-[14px]">(Пермь, Соликамск, Березники)</span>
								</div>
								<div>
									<a href="mailto:odn@geosr.ru">odn@geosr.ru</a>
									<span class="font-normal text-[14px]">(Общедомовые приборы учёта и квартирные теплосчётчики)</span>
								</div>
							</div>
						</div>

					</div>
					<div data-aos="fade-up">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A68c1953a172e785030977d10fa1ea69100b060ddc862e054334e6eb48125617f&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
					</div>
				</div>

			</div>
		</section>

	</main>

	<footer class="bg-gray-logo text-white/70 py-10 text-center">
		<div class="container">
			<div class="b_menu">

				<div class="logo">
				    <img src="assets/img/logo_cm_white.png" class="max-w-[150px] xl:max-w-[220px]" style="opacity:0.5;" alt="ALT">
				    <p class="p40t text-left">Поверка и замена счётчиков <br>воды и тепла в Перми</p>
			    	<div class="text-center aos-init aos-animate p40t" data-aos="fade-up" id="zayavka">
					<a href="#callback-modal" class="btn btn-accent popup-link aos-init aos-animate" data-aos="zoom-in" data-aos-delay="700" data-form="Онлайн заявка. Кнопка в секции Как мы работаем">Оставить заявку</a>
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
		<div class="container p40t">
			<p class="mb-4 p40t">&copy; ЦЕНТР МЕТРОЛОГИИ, 2024</p>
			<a href="#policy-modal" class="underline hover:no-underline inline-block popup-link">Соглашение на обработку персональных данных</a>
		</div>
	</footer>

	<!-- <div class="fixed bottom-5 right-5 sm:bottom-10 sm:right-10 z-10 rounded-full" id="telegram-widget">
		<a href="tg://resolve?domain=diywebdev" class="block rounded-full transition-transform duration-500 ease-in-out hover:scale-105" target="_blank" title="Telegram">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Livello_1" x="0px" y="0px" viewBox="0 0 240.1 240.1" enable-background="new 0 0 240.1 240.1" xml:space="preserve" class="w-10 h-10 sm:w-14 sm:h-14"><g id="Artboard"><linearGradient id="Oval_1_" gradientUnits="userSpaceOnUse" x1="-838.041" y1="660.581" x2="-838.041" y2="660.3427" gradientTransform="matrix(1000 0 0 -1000 838161 660581)"><stop offset="0" style="stop-color:#2AABEE"/><stop offset="1" style="stop-color:#229ED9"/></linearGradient><circle id="Oval" fill-rule="evenodd" clip-rule="evenodd" fill="url(#Oval_1_)" cx="120.1" cy="120.1" r="120.1"/><path id="Path-3" fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M54.3,118.8c35-15.2,58.3-25.3,70-30.2   c33.3-13.9,40.3-16.3,44.8-16.4c1,0,3.2,0.2,4.7,1.4c1.2,1,1.5,2.3,1.7,3.3s0.4,3.1,0.2,4.7c-1.8,19-9.6,65.1-13.6,86.3   c-1.7,9-5,12-8.2,12.3c-7,0.6-12.3-4.6-19-9c-10.6-6.9-16.5-11.2-26.8-18c-11.9-7.8-4.2-12.1,2.6-19.1c1.8-1.8,32.5-29.8,33.1-32.3   c0.1-0.3,0.1-1.5-0.6-2.1c-0.7-0.6-1.7-0.4-2.5-0.2c-1.1,0.2-17.9,11.4-50.6,33.5c-4.8,3.3-9.1,4.9-13,4.8   c-4.3-0.1-12.5-2.4-18.7-4.4c-7.5-2.4-13.5-3.7-13-7.9C45.7,123.3,48.7,121.1,54.3,118.8z"/></g></svg>
		</a>
	</div> -->

	<!-- MODALS -->
	<div class="fixed w-screen h-screen left-0 top-0 bg-black/70 z-20 overflow-x-hidden overflow-y-auto hidden modal-overlay" id="callback-modal" data-close>
		<div class="modal-content relative top-20 mb-10 left-1/2 translate-x-[-50%] -translate-y-10 transition-all duration-1000 max-w-xl w-full bg-white text-dark py-8 px-4 sm:p-8">
			<div class="w-10 h-10 flex items-center justify-center absolute right-0 top-0 opacity-50 transition-opacity hover:opacity-100 cursor-pointer rotate-45" data-close><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" data-close>
				<line y1="9.5" x2="20" y2="9.5" stroke="black" data-close/>
				<line x1="9.5" y1="20" x2="9.5" stroke="black" data-close/>
				</svg>
			</div>
			<h2 class="text-2xl font-bold text-center">Обратная связь</h2>
			<p class="text-center text-lg mb-10 font-normal">Оставьте свои данные и мы свяжемся с Вами</p>
			<form class="flex flex-col gap-4 sm:gap-5">
				<input type="hidden" name="form" value="">
				<input type="hidden" name="type" value="odn">
				<input type="text" name="address" class="border border-gray-900/50 transition-all focus:border-opacity-90 focus:border-gray-900 px-4 py-2 mb-1.5 sm:text-lg outline-none w-full" placeholder="Адрес">
				<div>
					<input type="tel" name="phone" class="border border-gray-900/50 transition-all focus:border-opacity-90 focus:border-gray-900 px-4 py-2 mb-1.5 sm:text-lg outline-none w-full" placeholder="+7 999 999-99-99 *">
					<div class="error-message text-xs text-accent hidden" id="phone">Веден некорректный номер телефона</div>
				</div>
				<textarea name="message" class="border border-gray-900/50 transition-all focus:border-opacity-90 focus:border-gray-900 px-4 py-2 mb-1.5 sm:text-lg outline-none w-full h-32 overflow-y-auto resize-none" placeholder="Ваше сообщение"></textarea>
				<label class="cursor-pointer flex items-center flex-wrap">
					<input type="checkbox" name="agree" class="absolute w-0 h-0 opacity-0 invisible">
					<div class="flex flex-wrap gap-x-2">
						<span class="fake-checkbox mt-0.5 w-4 h-4 inline-block flex-shrink-0 transition-all relative"></span>
						<span>Я согласен на</span> <a href="#policy-modal" class="popup-link text-blue underline transition-all hover:no-underline">обработку персональных данных</a>
					</div>
					<div class="error-message text-xs text-accent mt-1 w-full hidden" id="agree">Чтобы продолжить, установите флажок</div>
				</label>
				<input type="checkbox" name="subscribe" class="absolute w-0 h-0 opacity-0 invisible">
				<input type="submit" class="btn btn-accent" value="Отправить">
			</form>
		</div>
	</div>
	<div class="fixed w-screen h-screen left-0 top-0 bg-black/70 z-20 overflow-x-hidden overflow-y-auto hidden modal-overlay" id="more-modal" data-close>
		<div class="modal-content relative top-20 mb-10 left-1/2 translate-x-[-50%] -translate-y-10 transition-all duration-1000 max-w-2xl w-full bg-white text-dark py-8 px-4 sm:p-8">
			<div class="w-10 h-10 flex items-center justify-center absolute right-0 top-0 opacity-50 transition-opacity hover:opacity-100 cursor-pointer rotate-45" data-close><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" data-close>
				<line y1="9.5" x2="20" y2="9.5" stroke="black" data-close/>
				<line x1="9.5" y1="20" x2="9.5" stroke="black" data-close/>
				</svg>
			</div>
			<input type="hidden" name="type" value="odn">
			<h2 class="text-2xl font-bold text-center mb-10"></h2>
			<div class="more-info-content mb-10 text-[14px] sm:text-base"></div>
			<div class="text-center">
				<a href="#callback-modal" class="btn btn-accent mx-auto popup-link" data-title="" data-form="">Заказать</a>
			</div>
		</div>
	</div>
	<div class="fixed w-screen h-screen left-0 top-0 bg-black/70 z-30 overflow-x-hidden overflow-y-auto hidden modal-overlay" id="policy-modal" data-close>
		<div class="modal-content relative top-20 mb-10 left-1/2 translate-x-[-50%] -translate-y-10 transition-all duration-1000 max-w-5xl w-full bg-white text-dark py-8 px-4 sm:p-8">
			<div class="w-10 h-10 flex items-center justify-center absolute right-0 top-0 opacity-50 transition-opacity hover:opacity-100 cursor-pointer rotate-45" data-close><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" data-close>
				<line y1="9.5" x2="20" y2="9.5" stroke="black" data-close/>
				<line x1="9.5" y1="20" x2="9.5" stroke="black" data-close/>
				</svg>
			</div>
			<input type="hidden" name="type" value="odn">
			<h2 class="text-base sm:text-xl uppercase pb-4 mb-4 border-b border-gray-100 font-bold">Согласие на обработку персональных данных посетителей сайта</h2>
			<div class="">Настоящим в соответствии с <strong>Федеральным законом № 152-ФЗ</strong> «О персональных данных» от 27.07.2006 года Вы подтверждаете свое согласие на обработку компанией "Центр Метрологии" персональных данных: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, передачу исключительно в целях продажи программного обеспечения на Ваше имя, как это описано ниже, блокирование, обезличивание, уничтожение. <br><br> Компания "Центр Метрологии" гарантирует конфиденциальность получаемой информации. Обработка персональных данных осуществляется в целях эффективного исполнения заказов, договоров и иных обязательств, принятых компанией "Центр Метрологии" в качестве обязательных к исполнению. <br><br> В случае необходимости предоставления Ваших персональных данных правообладателю, дистрибьютору или реселлеру программного обеспечения в целях регистрации программного обеспечения на ваше имя, вы даёте согласие на передачу ваших персональных данных. Компания "Центр Метрологии" гарантирует, что правообладатель, дистрибьютор или реселлер программного обеспечения осуществляет защиту персональных данных на условиях, аналогичных изложенным в Политике конфиденциальности персональных данных. <br><br> Настоящее согласие распространяется на следующие Ваши персональные данные: фамилия, имя и отчество, адрес электронной почты, почтовый адрес доставки заказов, контактный телефон, платёжные реквизиты. <br><br> Срок действия согласия является неограниченным. Вы можете в любой момент отозвать настоящее согласие, направив письменное уведомления на адрес: г. Пермь, ул. Н. Островского, 49 с пометкой «Отзыв согласия на обработку персональных данных». <br><br> Обращаем ваше внимание, что отзыв согласия на обработку персональных данных влечёт за собой удаление Вашей учётной записи с Интернет-сайта (https://poverkaperm.ru/), а также уничтожение записей, содержащих ваши персональные данные, в системах обработки персональных данных компании "Центр Метрологии", что может сделать невозможным пользование интернет-сервисами компании "Центр Метрологии". <br><br> Гарантирую, что представленная мной информация является полной, точной и достоверной, а также что при представлении информации не нарушаются действующее законодательство Российской Федерации, законные права и интересы третьих лиц. Вся представленная информация заполнена мною в отношении себя лично. <br><br> Настоящее согласие действует в течение всего периода хранения персональных данных, если иное не предусмотрено законодательством Российской Федерации.<br></div>
		</div>
	</div>
	<div class="fixed w-screen h-screen left-0 top-0 bg-black/70 z-20 overflow-x-hidden overflow-y-auto hidden modal-overlay" id="message-modal" data-close>
		<div class="modal-content relative top-20 mb-10 left-1/2 translate-x-[-50%] -translate-y-10 transition-all duration-1000 max-w-xl w-full bg-white text-dark py-8 px-4 sm:p-8">
			<div class="w-10 h-10 flex items-center justify-center absolute right-0 top-0 opacity-50 transition-opacity hover:opacity-100 cursor-pointer rotate-45" data-close><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" data-close>
				<line y1="9.5" x2="20" y2="9.5" stroke="black" data-close/>
				<line x1="9.5" y1="20" x2="9.5" stroke="black" data-close/>
				</svg>
			</div>
			<p class="text-center text-lg"></p>
		</div>
	</div>
	<!-- MODALS END -->
	<script src="js/scripts.js?1234567"></script>
</body>

</html>