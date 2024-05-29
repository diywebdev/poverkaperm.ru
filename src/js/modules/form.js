const $$ = function (selector) {
	const elements = document.querySelectorAll(selector);
	return elements;
};
// PHONE MASK
function maskphone(e) {
	let num = this.value.replace(/^(\+7|8)/g, '').replace(/\D/g, '').split(/(?=.)/),
			i = num.length;
	if (0 <= i) num.unshift('+7');
	if (1 <= i) num.splice(1, 0, ' ');
	if (4 <= i) num.splice(5, 0, ' ');
	if (7 <= i) num.splice(9, 0, '-');
	if (9 <= i) num.splice(12, 0, '-');
	if (11 <= i) num.splice(15, num.length - 15);
	this.value = num.join('');
	this.nextSibling.nextElementSibling.classList.add('hidden');
};
$$("input[name=phone]").forEach(function (element) {
	element.addEventListener('focus', maskphone);
	element.addEventListener('input', maskphone);
});
// AGREE CHECKBOX
// Проверка на состояние чекбокса, показ/скрытие ошибки
$$("input[name=agree]").forEach(function (element) {
	let errorMes = element.parentElement.querySelector('#agree')
	element.addEventListener('change', e => {
		if(!e.target.checked){
			errorMes.classList.remove('hidden')
		}else{
			errorMes.classList.add('hidden')
		}
	});
});


// BUTTON
// Состояние кнопки
const stateBtn = (btn, value, disable = false) => {
	btn.value = value;
	btn.disabled = disable;
}

const showErrorMes = (form, el, text) => {
	let field = form.querySelector(el);
	field.innerText = text;
	field.classList.remove('hidden');
}

const showMessageModal = (messageModal, message) => {
	document.querySelectorAll('.modal-overlay').forEach(el => {
		el.classList.add('hidden');
	});
	messageModal.querySelector('p').innerHTML = message;
	messageModal.classList.remove('hidden');
}

// FORMS
// Отправка всех форм
$$('form').forEach(form => {
	const btn = form.querySelector('input[type="submit"]');
	form.onsubmit = async event => {
		event.preventDefault();
		stateBtn(btn, 'Отправляем...', true);

		const agree = form.querySelector('[name="agree"]');
		const phone = form.querySelector('[name="phone"]');
		const errorText = '<b class="text-bold block text-2xl mb-4">Упс!</b> Что-то пошло не так. Перезагрузите страницу и попробуйте снова. ';
		let successText = '<b class="text-bold block text-2xl mb-4">Спасибо за Вашу заявку!</b> В скором времени мы свяжемся с Вами!';
		const messageModal = document.getElementById('message-modal');

		if(!phone.value.length){
			showErrorMes(form, '#phone', 'Телефон является обязательным полем');
			stateBtn(btn, 'Отправить');
			return;
		}else{
			const phoneRe = new RegExp(/^\+7 [0-9]{3} [0-9]{3}-[0-9]{2}-[0-9]{2}$/);
			if(!phoneRe.test(phone.value)){
				showErrorMes(form, '#phone', 'Введен некорректный номер телефона');
				stateBtn(btn, 'Отправить');
				return;
			}
		}
		// если флажок не установлен - фронт
		if (!agree.checked) {
			showErrorMes(form, '#agree', 'Чтобы продолжить, установите флажок');
			stateBtn(btn, 'Отправить');
			return;
		}
		let formData = new FormData(form);
		const params = new URLSearchParams([...new FormData(event.target).entries()]);
		formData.append("page_url", window.location.origin + window.location.pathname);
		window.location.search.slice(1).split("&").forEach(function(pair) {
			var param = pair.split("=");
			formData.append(param[0], param[1]);
		});
		for (const pair of formData) {
			params.append(pair[0], pair[1]);
		}
		await fetch('https://diywebdev.ru/metrology/', {
			method: 'POST',
			mode: 'cors',
			cache: 'no-cache',
			credentials: 'same-origin',
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded',
			},
			body: params,
		})
		.then(res => res.json())
		.then(data => {
			stateBtn(btn, 'Отправить');
			if (data.answer == 'required') {
				showErrorMes(form, data.field, data.message);
				return;
			}else if (data.answer == 'error') {
				showMessageModal(messageModal, errorText+'<br>'+data.error);
			}else{
				showMessageModal(messageModal, successText);
			}
			// console.log(data);
			form.reset();
		})
		.catch(error => {
			stateBtn(btn, 'Отправить');
			showMessageModal(messageModal, errorText+'<br>'+error);
			console.warn("Ошибка отправки данных формы: " + error);
		});
		return false;
	}
})