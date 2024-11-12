const banner = new Swiper('.banner-slider', {
	// modules: [ Autoplay, EffectFade ],
	loop: true,
	autoplay: {
		delay: 5000
	},
	effect: 'fade',
	fadeEffect: {
		crossFade: true
	},
})

const accr = new Swiper('.accr-slider', {
	// modules: [Autoplay, Navigation],
	// loop: true,
	// autoplay: {
	// 	delay: 5000
	// },
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	breakpoints: {
		// when window width is >= 320px
		320: {
			slidesPerView: 1,
			spaceBetween: 0,
			initialSlide: 0,
			centeredSlides: false,
		},
		640: {
			slidesPerView: 2,
			spaceBetween: 10,
			initialSlide: 0,
			centeredSlides: false,
		},
		1024: {
			slidesPerView: 3,
			spaceBetween: 20,
			initialSlide: 1,
			centeredSlides: true,
		},
	}
})