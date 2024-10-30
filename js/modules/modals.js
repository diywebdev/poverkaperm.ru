document.querySelectorAll(".popup-link").forEach(link => link.onclick = e => {
	e.preventDefault();
	let id = link.getAttribute('href');
	if(id === '#' || !id) return;
	if(id != '#policy-modal'){
		document.querySelectorAll('.modal-overlay').forEach(el => {
			closeModal(el);
		})
	}
	const targetModal = document.getElementById(id.substr(1));
	if(!targetModal) return;
	const formName = link.dataset.form;
	const formInput = targetModal.querySelector('input[name="form"]');
	if(formName && formInput){
		formInput.value = formName;
	}
	const typeName = link.dataset.type;
	if(typeName){
		targetModal.querySelector('input[name="type"]').value = typeName;
	}else{
		targetModal.querySelector('input[name="type"]').value = 'odn';
	}
	const title = link.dataset.title;
	if(title){
		targetModal.querySelector('h2').innerText = title;
	}else if(id == '#policy-modal'){
		targetModal.querySelector('h2').innerText = 'Политика конфиденциальности';
	}else{
		targetModal.querySelector('h2').innerText = 'Онлайн заявка';
	}
	if(link.dataset.more){
		const id = link.dataset.more;
		let html;
		fetch('data.json')
		.then(async (response) => {
			const data = await response.json()
			if(!data.length){
				console.log('Ошибка FETCH!!!')
				return;
			}
			data.find(h => {
				if(h.id == id){
					html = h.html
				}
			})
			if(!html) return;
			targetModal.querySelector('.more-info-content').innerHTML = html;
			targetModal.querySelector('.popup-link').setAttribute('data-title', title);
			targetModal.querySelector('.popup-link').setAttribute('data-form', formName);
			if(typeName){
				targetModal.querySelector('.popup-link').setAttribute('data-type', typeName);
			}
		})
	}
	targetModal.classList.remove('hidden');
	document.body.classList.add('overflow-hidden');
})

document.querySelectorAll('.modal-overlay').forEach(el => {
	document.addEventListener('keydown', event => {
		if(event.key == 'Escape'){
			closeModal(el);
		}
	});

	el.addEventListener('click', event => {
		if(typeof event.target.dataset.close != 'undefined'){
			closeModal(el);
		}
	})
})

function closeModal(modal){
	modal.classList.add('hidden');
	const form = modal.querySelector('form');
	if(form){
		form.reset();
	}
	document.querySelectorAll('.error-message').forEach(mes => {
		mes.classList.add('hidden');
	});
	document.body.classList.remove('overflow-hidden');
}

async function request(url){
	return await fetch(url)
	.then(request => {
			return request.json()
	})
}