import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init({
	duration: 800,
	once: true,
	easing: 'ease-out',
	// anchorPlacement: 'bottom',
});

console.log(
	'%cРазработка сайта: %c@diywebdev', 
	'color: white; font-size: 13px; font-weight: 400;',
	'color: tomato; font-size: 13px; font-weight: 500;',
);

import './modules/sliders';
import './modules/modals';
import './modules/form';
import GLightbox from 'glightbox';
import 'glightbox/dist/css/glightbox.min.css';
const lightbox = GLightbox();

let scrollpos = window.scrollY
const header = document.querySelector("header")
const scrollChange = 1
const add_class_on_scroll = () => header.classList.add('shadow-lg')
const remove_class_on_scroll = () => header.classList.remove('shadow-lg')
window.addEventListener('scroll', function() { 
	scrollpos = window.scrollY;
	if (scrollpos >= scrollChange) { add_class_on_scroll() }
	else { remove_class_on_scroll() }
})

document.querySelector('.toggle-menu-btn').onclick = function() {
	// this.classList.toggle('active');
	document.querySelector('.header-menu').classList.add('open')
}

document.querySelector('.close-menu-btn').onclick = function() {
	// this.classList.toggle('active');
	document.querySelector('.header-menu').classList.remove('open')
}

const anchors = document.querySelectorAll('.scroll-link')
for (let anchor of anchors) {
	anchor.addEventListener('click', function (e) {
		e.preventDefault()
		document.querySelector('.header-menu').classList.remove('open')
		const blockID = anchor.getAttribute('href').substr(1)
		document.getElementById(blockID).scrollIntoView({
			behavior: 'smooth',
			block: 'start'
		})
	})
}

window.addEventListener('scroll', () => {
	let scrollDistance = window.scrollY;
	document.querySelectorAll('.section').forEach((el, i) => {
		if (el.offsetTop - document.querySelector('header').clientHeight * 2 <= scrollDistance) {
			document.querySelectorAll('.scroll-link').forEach((elem) => {
				if (elem.classList.contains('active')) {
					elem.classList.remove('active');
				}
			});

			document.querySelectorAll('.scroll-link')[i].classList.add('active');
		}
	});
})

document.querySelectorAll('[data-hidden]').forEach(el => {
	el.removeAttribute('data-hidden');
})

import PureCounter from '@srexi/purecounterjs';
new PureCounter({
	selector: '.purecounter',
	start: 0, 
	end: 100,
	duration: 3,
	delay: 10,
	once: true,
	repeat: false,
	decimals: 0,
	legacy: true,
	filesizing: false,
	currency: false,
	separator: false,
});